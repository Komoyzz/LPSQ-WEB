<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $usersPerPage = 1;
        $totalUsers = User::count();
        $totalPages = ceil($totalUsers / $usersPerPage);
        $currentPage = request()->page ?? 1;

        $query = User::query()->latest();

        if (request()->filled('search')) {
            $search = request()->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('username', 'LIKE', '%' . $search . '%')
                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%');
            });
        }

        $users = $query->get();

        return view('manageuser', compact('users', 'currentPage', 'totalPages'));
    }
    public function register(Request $request)
    {
        // Logika validasi dan pembuatan pengguna tetap ada di sini
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'image' => '/img/default-profile.webp',
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('userdate')->withSuccess('Pendaftaran berhasil! Silakan login.');
    }
    public function update(Request $request, $id)
    {
        $rules = [
            'type' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'name' => 'required',
        ];

        $messages = [
            'type.required' => 'The type field is required.',
            'username.required' => 'The username field is required.',
            'username.unique' => 'The username has already been taken.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'name.required' => 'The name field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);

        // Update fields
        $user->type = $request->input('type');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->name = $request->input('name');

        $user->save();
        return redirect()->route('userdate')->withSuccess('Pengguna berhasil diupdate.');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('userdate')->withSuccess('Pengguna berhasil dihapus.');
    }
    public function changePasswordView()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    public function changePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate the input fields
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        // Check if the current password matches the user's stored password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('profile')->withSuccess("Password updated successfully.");
    }
    public function update_profile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5|max:50|regex:/^[a-zA-Z\s]+$/',
            'job' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|regex:/^[+0-9\s]+$/|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->setAttribute('username', $request->username);
        $user->fill($request->only(['name', 'job', 'address', 'phone', 'email']));

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $allowedMimes = ['jpeg', 'png', 'jpg'];
            $validator = Validator::make($request->all(), [
                'image' => 'image|mimes:' . implode(',', $allowedMimes) . '|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $name = Str::slug($request->username) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $user->setAttribute('image', '/uploads/' . $name);
        }

        $user->save();

        return redirect()->route('profile')->withSuccess("Profile updated successfully.");
    }
}

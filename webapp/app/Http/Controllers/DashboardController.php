<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class DashboardController extends Controller
{
    public function index()
    {
        $Tasks = Tasks::all();
        return view('home', compact('Tasks'));
    }

    public function store(Request $request)
    {
        Tasks::create(['task' => $request->task, 'completed' => false]);
        return redirect()->route('home');
    }

    public function update($id)
    {
        $Tasks = Tasks::findOrFail($id);
        $Tasks->update(['completed' => true]);
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Tasks::destroy($id);
        return redirect()->route('home');
    }
}

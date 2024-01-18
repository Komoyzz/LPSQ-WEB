@extends('Template.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Manage User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <!-- List Data User -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body row" style="background-color: #457B9D">
                            <h5 class="card-title">Data User</span></h5>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong class="font-bold">Success!</strong>
                                    <span class="block sm:inline">{{ session('success') }}</span>
                                </div>
                            @elseif(session('unsuccess'))
                                <div class="alert alert-danger" role="alert">
                                    <strong class="font-bold">Unsuccess!</strong>
                                    <span class="block sm:inline">{{ session('unsuccess') }}</span>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul class="list-disc pl-5">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ htmlentities($error) }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                            </div>
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama User</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                                            <td>{{ htmlentities($user->username) }}</td>
                                            <td><a href="#" class="text-primary">{{ htmlentities($user->email) }}</a>
                                            </td>
                                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#user{{ $user->id }}">
                                                    <i class="bi bi-info-circle">
                                                    </i></button>
                                                <div class="modal fade" id="user{{ $user->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Akun
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form role="form text-left"
                                                                    action="{{ route('userdate.update', $user->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <label for="name"
                                                                            class="col-form-label">Nama:</label>
                                                                        <input type="text" class="form-control"
                                                                            id="name" name="name"
                                                                            value="{{ htmlentities($user->name) }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="username"
                                                                            class="col-form-label">Username:</label>
                                                                        <input type="text" class="form-control"
                                                                            id="username" name="username"
                                                                            value="{{ htmlentities($user->username) }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="email"
                                                                            class="col-form-label">Email:</label>
                                                                        <input type="text" class="form-control"
                                                                            id="email" name="email"
                                                                            value="{{ htmlentities($user->email) }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="type" class="col-form-label">Tipe
                                                                            Akun</label>
                                                                        <select class="form-select form-select-md"
                                                                            aria-label=".form-select-md example"
                                                                            name="type" id="type">
                                                                            <option
                                                                                @if ($user->type === 'admin') selected @endif
                                                                                value="admin">Admin</option>
                                                                            <option
                                                                                @if ($user->type === 'user') selected @endif
                                                                                value="user">User</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                </form>
                                                                <a href="{{ route('userdate.delete', ['id' => $user->id]) }}"
                                                                    onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this user?')) document.getElementById('delete-form-{{ htmlentities($user->id) }}').submit();">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Hapus</button>
                                                                </a>
                                                                <form id="delete-form-{{ htmlentities($user->id) }}"
                                                                    action="{{ route('userdate.delete', ['id' => $user->id]) }}"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>

                        <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                            <button type="button" class="btn add-account btn" data-bs-toggle="modal"
                                data-bs-target="#addUserModal">
                                Tambah Akun
                            </button>
                        </div>

                        <!-- Modal Tambah Akun -->
                        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form text-left" action="{{ route('register') }}" method="post">
                                            @method('POST')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="col-form-label">Nama:</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="col-form-label">Username:</label>
                                                <input type="text" class="form-control" id="username"
                                                    name="username" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="col-form-label">Email:</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="col-form-label">Password:</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Tambah Akun</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

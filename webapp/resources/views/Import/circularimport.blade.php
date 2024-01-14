@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Import Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('formexcel') }}">Form Excel</a></li>
                    <li class="breadcrumb-item active">Import Data</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Circular</h5>

                            <div class="tab-content pt-2">
                                <form action="{{ route('circularstore') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="file" class="form-control" name="excel" id="excel">
                                    </div>
                                    <button type="submit" class="btn btn-info">Upload</button>
                                </form>

                                @if (session('success'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger mt-3">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mt-3">
                                <div class="alert alert-warning my-4 text-center" role="alert">
                                    Unggah file sesuai dengan format yang ditetapkan.
                                    <div class="d-flex justify-content-center mt-3">
                                        <a href="https://drive.google.com/drive/folders/1qO_InTPgnPLR4bL6b-QXSvt-i_Z7APkX?usp=sharing"
                                            class="download-button" target="_blank">
                                            Gdrive Format Excel
                                        </a>
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
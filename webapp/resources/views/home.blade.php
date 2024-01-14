@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" {{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">

            <!-- Welcome Card -->
            <div class="row">
                <div class="col-12  col-md-6">
                    <div class="card info-card welcome-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Selamat Datang di Website LPSQ</h5>
                            <div class="card-title"><span>{{ Auth::user()->name }}</span></div>
                            <div>
                                <h6>HAVE A FUN DAY,</h6>
                                <span class="text-muted small pt-2 ps-1">Selamat Bekerja!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Welcome Card -->

        </section>

    </main>
@endsection

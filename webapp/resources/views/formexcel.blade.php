@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Excel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Form Excel</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Select Audit Type</h5>

                            <!-- Border Tab -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#audit-sms">Audit
                                        SMS</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#audit-qse">Audit
                                        QSE</button>
                                </li>
                            </ul>

                            <!-- Audit Type -->
                            <div class="tab-content pt-2">

                                <!-- Form Audit SMS -->
                                <div class="tab-pane fade show active audit-qse pt-3" id="audit-sms">
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import1') }}'">Navigation
                                            Audit</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import2') }}'">Cargo Operation</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import3') }}'">Mooring
                                            Operation</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import4') }}'">Engineering
                                            Audit</button>
                                    </div>
                                    <div class="d-flex justify-content-center my-lg-auto">
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import5') }}'">Superintendent
                                            Visit</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import6') }}'">Circular</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import7') }}'">MWT</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4 "
                                            style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import8') }}'">Negative
                                            Feedback</button>
                                    </div>
                                </div>

                                <!-- Form Audit QSE -->
                                <div class="tab-pane fade pt-3" id="audit-qse">
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import9') }}'">Incident Record</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import10') }}'">Investigation
                                            Record</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import11') }}'">BJST</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import12') }}'">PSC</button>
                                    </div>
                                    <div class="d-flex justify-content-center my-lg-auto">
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import13') }}'">CDI</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import14') }}'">Sire</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import15') }}'">Internal
                                            Audit</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import16') }}'">UAUC</button>
                                    </div>
                                    <div class="d-flex justify-content-center my-lg-auto">
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import17') }}'">OHSI - Safety
                                            Meeting</button>
                                        <button class="btn btn-info btn-lg mx-auto my-4" style="width: 200px; height: 75px;"
                                            onclick="window.location.href='{{ route('Import18') }}'">COC</button>
                                    </div>
                                </div>

                                <div class="alert alert-warning mt-4" role="alert">
                                    Silahkan click tombol diatas untuk mengunggah file! (1 File untuk 1 Jenis Audit)
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
        </section>

    </main><!-- End #main -->
@endsection

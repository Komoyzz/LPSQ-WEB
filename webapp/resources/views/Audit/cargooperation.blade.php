@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mt-3 d-flex" style="width:650px;">
                <div class="card bg-primary text-dark pt-3" style="width:650px;">
                    <div class="card-body">
                        {!! $Cargo1Chart->container() !!}
                        <script src="{{ $Cargo1Chart->cdn() }}"></script>
                        {!! $Cargo1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 mt-3">
                <div class="card bg-dark text-dark pt-3 mx-auto">
                    <div class="card-body">
                        {!! $Cargo3Chart->container() !!}
                        <script src="{{ $Cargo3Chart->cdn() }}"></script>
                        {!! $Cargo3Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 d-flex" style="width:650px;">
                <div class="card bg-success text-dark pt-3" style="width:650px;">
                    <div class="card-body">
                        {!! $Cargo2Chart->container() !!}
                        <script src="{{ $Cargo2Chart->cdn() }}"></script>
                        {!! $Cargo2Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-lg-5">
                <div class="card bg-danger text-dark pt-3 mx-auto">
                    <div class="card-body">
                        {!! $Cargo4Chart->container() !!}
                        <script src="{{ $Cargo4Chart->cdn() }}"></script>
                        {!! $Cargo4Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

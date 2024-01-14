@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mt-3 d-flex" style="width:650px;">
                <div class="card bg-primary text-dark pt-3" style="width:650px;">
                    <div class="card-body">
                        {!! $Mooring1Chart->container() !!}
                        <script src="{{ $Mooring1Chart->cdn() }}"></script>
                        {!! $Mooring1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 mt-3">
                <div class="card bg-dark text-dark pt-3 mx-auto">
                    <div class="card-body">
                        {!! $Mooring3Chart->container() !!}
                        <script src="{{ $Mooring3Chart->cdn() }}"></script>
                        {!! $Mooring3Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5  d-flex" style="width:650px;">
                <div class="card bg-success text-dark pt-3" style="width:650px;">
                    <div class="card-body">
                        {!! $Mooring2Chart->container() !!}
                        <script src="{{ $Mooring2Chart->cdn() }}"></script>
                        {!! $Mooring2Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-lg-5 ">
                <div class="card bg-danger text-dark pt-3 mx-auto">
                    <div class="card-body">
                        {!! $Mooring4Chart->container() !!}
                        <script src="{{ $Mooring4Chart->cdn() }}"></script>
                        {!! $Mooring4Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

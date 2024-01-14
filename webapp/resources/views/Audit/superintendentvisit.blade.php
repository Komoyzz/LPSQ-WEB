@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mt-3">
                <div class="card text-dark pt-3" style="background-color:#4B8F8C">
                    <div class="card-body">
                        {!! $Supervisit1Chart->container() !!}
                        <script src="{{ $Supervisit1Chart->cdn() }}"></script>
                        {!! $Supervisit1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 mt-3" style="width:650px;">
                <div class="card text-dark pt-3 mx-auto" style="width:650px; background-color:#B07BAC">
                    <div class="card-body">
                        {!! $Supervisit3Chart->container() !!}
                        <script src="{{ $Supervisit3Chart->cdn() }}"></script>
                        {!! $Supervisit3Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="card text-dark pt-3" style="background-color:#484D6D">
                    <div class="card-body">
                        {!! $Supervisit2Chart->container() !!}
                        <script src="{{ $Supervisit2Chart->cdn() }}"></script>
                        {!! $Supervisit2Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-lg-5" style="width:650px;">
                <div class="card text-dark pt-3 mx-auto" style="width:650px; background-color:#87C38F">
                    <div class="card-body">
                        {!! $Supervisit4Chart->container() !!}
                        <script src="{{ $Supervisit4Chart->cdn() }}"></script>
                        {!! $Supervisit4Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

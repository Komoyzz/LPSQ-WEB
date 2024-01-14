@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-lg-5 mt-3 d-flex" style="width:650px;">
                <div class="card bg-primary text-dark pt-3" style="width:650px;">
                    <div class="card-body">
                        {!! $Engine1Chart->container() !!}
                        <script src="{{ $Engine1Chart->cdn() }}"></script>
                        {!! $Engine1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mt-3">
                <div class="card bg-success text-dark pt-3 mx-auto">
                    <div class="card-body">
                        {!! $Engine2Chart->container() !!}
                        <script src="{{ $Engine2Chart->cdn() }}"></script>
                        {!! $Engine2Chart->script() !!}
                    </div>

                    <div class=" text-white text-center font-size-14 mt-3">
                        <p class="text-justify">Done: {{ $TotalDone }} Not Yet: {{ $TotalNotYet }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-11">
            <div class="card bg-danger text-dark pt-3" style="margin-left: 19px;">
                <div class="card-body">
                    {!! $Engine3Chart->container() !!}
                    <script src="{{ $Engine3Chart->cdn() }}"></script>
                    {!! $Engine3Chart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-lg-5 mt-3 d-flex" style="width:650px;">
                <div class="card text-dark pt-3" style="width:650px; background-color: #468189;">
                    <div class="card-body">
                        {!! $PSC1Chart->container() !!}
                        <script src="{{ $PSC1Chart->cdn() }}"></script>
                        {!! $PSC1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mt-3">
                <div class="card text-dark pt-3" style="background-color: #2F4858;">
                    <div class="card-body">
                        {!! $PSC3Chart->container() !!}
                        <script src="{{ $PSC3Chart->cdn() }}"></script>
                        {!! $PSC3Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-11">
            <div class="card text-dark pt-3" style="margin-left: 19px; background-color: #5C7457;">
                <div class="card-body">
                    {!! $PSC2Chart->container() !!}
                    <script src="{{ $PSC2Chart->cdn() }}"></script>
                    {!! $PSC2Chart->script() !!}
                </div>
            </div>

    </main>
@endsection

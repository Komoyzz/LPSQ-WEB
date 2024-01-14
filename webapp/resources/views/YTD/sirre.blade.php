@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6 mt-3">
                <div class="card text-dark pt-3" style="background-color: #C06E52;">
                    <div class="card-body">
                        {!! $Sire1Chart->container() !!}
                        <script src="{{ $Sire1Chart->cdn() }}"></script>
                        {!! $Sire1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="card text-dark pt-3" style="background-color: #55505C;">
                    <div class="card-body">
                        {!! $Sire2Chart->container() !!}
                        <script src="{{ $Sire2Chart->cdn() }}"></script>
                        {!! $Sire2Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div>
                <div class="card text-dark pt-3" style="background-color: #5D737E;">
                    <div class="card-body">
                        {!! $Sire3Chart->container() !!}
                        <script src="{{ $Sire3Chart->cdn() }}"></script>
                        {!! $Sire3Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div>
                <div class="card text-dark pt-3" style="background-color: #2F4858;">
                    <div class="card-body">
                        {!! $Sire4Chart->container() !!}
                        <script src="{{ $Sire4Chart->cdn() }}"></script>
                        {!! $Sire4Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-dark pt-3" style="background-color: #1C3144;">
                    <div class="card-body">
                        {!! $Sire5Chart->container() !!}
                        <script src="{{ $Sire5Chart->cdn() }}"></script>
                        {!! $Sire5Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark pt-3" style="background-color: #31493C;">
                    <div class="card-body">
                        {!! $Sire6Chart->container() !!}
                        <script src="{{ $Sire6Chart->cdn() }}"></script>
                        {!! $Sire6Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark pt-3" style="background-color: #00171F;">
                    <div class="card-body">
                        {!! $Sire7Chart->container() !!}
                        <script src="{{ $Sire7Chart->cdn() }}"></script>
                        {!! $Sire7Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

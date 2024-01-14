@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-lg-5 mt-3">
                <div class="card text-dark pt-3" style="height:631px; background-color: #48639C;">
                    <div class="card-body">
                        {!! $Internal1Chart->container() !!}
                        <script src="{{ $Internal1Chart->cdn() }}"></script>
                        {!! $Internal1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card text-dark" style="height:300px; background-color: #A27035;">
                            <div class="card-body">
                                {!! $Internal2Chart->container() !!}
                                <script src="{{ $Internal2Chart->cdn() }}"></script>
                                {!! $Internal2Chart->script() !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card text-dark" style="height:300px; background-color: #4E5166;">
                            <div class="card-body">
                                {!! $Internal3Chart->container() !!}
                                <script src="{{ $Internal3Chart->cdn() }}"></script>
                                {!! $Internal3Chart->script() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-11 mt-3">
                <div class="card text-dark pt-3" style="background-color: #4A2545;">
                    <div class="card-body">
                        {!! $Internal4Chart->container() !!}
                        <script src="{{ $Internal4Chart->cdn() }}"></script>
                        {!! $Internal4Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-11 mt-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card text-dark pt-3" style="background-color: #1C3144;">
                            <div class="card-body">
                                {!! $Internal5Chart->container() !!}
                                <script src="{{ $Internal5Chart->cdn() }}"></script>
                                {!! $Internal5Chart->script() !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card text-dark pt-3" style="background-color: #31493C;">
                            <div class="card-body">
                                {!! $Internal6Chart->container() !!}
                                <script src="{{ $Internal6Chart->cdn() }}"></script>
                                {!! $Internal6Chart->script() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-11 mt-3">
                <div class="card text-dark pt-3" style="background-color: #00171F;">
                    <div class="card-body">
                        {!! $Internal7Chart->container() !!}
                        <script src="{{ $Internal7Chart->cdn() }}"></script>
                        {!! $Internal7Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@extends('Template.main')
@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-lg-10 mt-3">
                <div class="card text-dark pt-3" style="background-color: #48639C;">
                    <div class="card-body">
                        {!! $UAUC1Chart->container() !!}
                        <script src="{{ $UAUC1Chart->cdn() }}"></script>
                        {!! $UAUC1Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 mt-3">
                <div class="card text-dark pt-3 mx-auto"
                    style="background-color: #A27035;>
                    <div class="card-body">
                    {!! $UAUC2Chart->container() !!}
                    <script src="{{ $UAUC2Chart->cdn() }}"></script>
                    {!! $UAUC2Chart->script() !!}
                </div>
            </div>
        </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 mt-3">
                <div class="card text-dark pt-3"
                    style="background-color: #4E5166;>
                    <div class="card-body">
                    {!! $UAUC3Chart->container() !!}
                    <script src="{{ $UAUC3Chart->cdn() }}"></script>
                    {!! $UAUC3Chart->script() !!}
                </div>
            </div>
        </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 mt-3">
                <div class="card text-dark pt-3 mx-auto"
                    style="background-color: #4A2545;>
                    <div class="card-body">
                    {!! $UAUC4Chart->container() !!}
                    <script src="{{ $UAUC4Chart->cdn() }}"></script>
                    {!! $UAUC4Chart->script() !!}
                </div>
            </div>
        </div>
        </div>

    </main>
@endsection

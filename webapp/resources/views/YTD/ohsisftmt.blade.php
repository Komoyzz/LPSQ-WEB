@extends('Template.main')
@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6 mt-3">
                <div class="card text-dark pt-3" style="background-color: #48639C;">
                    <div class="card-body">
                        {!! $OHSI1Chart->container() !!}
                        <script src="{{ $OHSI1Chart->cdn() }}"></script>
                        {!! $OHSI1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="card text-dark pt-3" style="background-color: #A27035;">
                    <div class="card-body">
                        {!! $OHSI2Chart->container() !!}
                        <script src="{{ $OHSI2Chart->cdn() }}"></script>
                        {!! $OHSI2Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-dark pt-3"
                    style="background-color: #4E5166;>
                    <div class="card-body">
                    {!! $OHSI3Chart->container() !!}
                    <script src="{{ $OHSI3Chart->cdn() }}"></script>
                    {!! $OHSI3Chart->script() !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-dark pt-3"
                    style="background-color: #4A2545;>
                    <div class="card-body">
                    {!! $OHSI4Chart->container() !!}
                    <script src="{{ $OHSI4Chart->cdn() }}"></script>
                    {!! $OHSI4Chart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

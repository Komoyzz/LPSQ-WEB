@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="col-lg-12 mt-3">
            <div class="card text-dark pt-3" style="background-color:#87C38F">
                <div class="card-body">
                    {!! $CDI1Chart->container() !!}
                    <script src="{{ $CDI1Chart->cdn() }}"></script>
                    {!! $CDI1Chart->script() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-3">
            <div class="card text-dark pt-3" style="background-color:#484D6D">
                <div class="card-body">
                    {!! $CDI2Chart->container() !!}
                    <script src="{{ $CDI2Chart->cdn() }}"></script>
                    {!! $CDI2Chart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

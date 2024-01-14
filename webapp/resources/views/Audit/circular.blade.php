@extends('Template.main')
@section('content')
    <main id="main" class="main">

        <div class="col-lg-12 mt-3">
            <div class="card text-dark pt-3" style="background-color:#87C38F">
                <div class="card-body">
                    {!! $Circular1Chart->container() !!}
                    <script src="{{ $Circular1Chart->cdn() }}"></script>
                    {!! $Circular1Chart->script() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-3">
            <div class="card text-dark pt-3" style="background-color:#484D6D">
                <div class="card-body">
                    {!! $Circular2Chart->container() !!}
                    <script src="{{ $Circular2Chart->cdn() }}"></script>
                    {!! $Circular2Chart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

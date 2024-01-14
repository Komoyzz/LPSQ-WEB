@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="col-lg-12 mt-3">
            <div class="card text-dark pt-3" style="background-color:#4B8F8C">
                <div class="card-body">
                    {!! $MWTChart->container() !!}
                    <script src="{{ $MWTChart->cdn() }}"></script>
                    {!! $MWTChart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

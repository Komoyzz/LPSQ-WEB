@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="card text-dark pt-3" style="background-color: #4E6E58;">
                <div class="card-body">
                    {!! $BJSTChart->container() !!}
                    <script src="{{ $BJSTChart->cdn() }}"></script>
                    {!! $BJSTChart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

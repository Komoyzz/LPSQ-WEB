@extends('Template.main')
@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="cardtext-dark pt-3" style="background-color: #996888">
                <div class="card-body">
                    {!! $COCChart->container() !!}
                    <script src="{{ $COCChart->cdn() }}"></script>
                    {!! $COCChart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

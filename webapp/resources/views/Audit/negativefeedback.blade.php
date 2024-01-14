@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-lg-6 mt-3">
                <div class="card text-dark pt-3" style="background-color:#4B8F8C">
                    <div class="card-body">
                        {!! $Feedback1Chart->container() !!}
                        <script src="{{ $Feedback1Chart->cdn() }}"></script>
                        {!! $Feedback1Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-3">
                <div class="card text-dark pt-3 mx-auto" style="background-color:#B07BAC">
                    <div class="card-body">
                        {!! $Feedback3Chart->container() !!}
                        <script src="{{ $Feedback3Chart->cdn() }}"></script>
                        {!! $Feedback3Chart->script() !!}
                    </div>


                    <div class=" text-white text-center font-size-14 mt-3">
                        <p class="text-justify">C&T: {{ $TotalCT }} Inspector SP: {{ $TotalInspector }} Marine:
                            {{ $TotalMarine }} R&P: {{ $TotalRP }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card text-dark pt-3" style="background-color:#484D6D">
                <div class="card-body">
                    {!! $Feedback2Chart->container() !!}
                    <script src="{{ $Feedback2Chart->cdn() }}"></script>
                    {!! $Feedback2Chart->script() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card text-dark pt-3" style="background-color:#87C38F">
                <div class="card-body">
                    {!! $Feedback4Chart->container() !!}
                    <script src="{{ $Feedback4Chart->cdn() }}"></script>
                    {!! $Feedback4Chart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

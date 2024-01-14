@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="col-lg-12 mt-3">
            <div class="card text-dark pt-3" style="background-color: #468189;">
                <div class="card-body">
                    {!! $Incident1Chart->container() !!}
                    <script src="{{ $Incident1Chart->cdn() }}"></script>
                    {!! $Incident1Chart->script() !!}
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card text-dark pt-3" style="background-color: #C06E52;">
                    <div class="card-body">
                        {!! $Incident2Chart->container() !!}
                        <script src="{{ $Incident2Chart->cdn() }}"></script>
                        {!! $Incident2Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card text-dark pt-3" style="background-color: #55505C;">
                    <div class="card-body">
                        {!! $Incident3Chart->container() !!}
                        <script src="{{ $Incident3Chart->cdn() }}"></script>
                        {!! $Incident3Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card text-dark pt-3" style="background-color: #5D737E;">
                    <div class="card-body">
                        {!! $Incident4Chart->container() !!}
                        <script src="{{ $Incident4Chart->cdn() }}"></script>
                        {!! $Incident4Chart->script() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card text-dark pt-3" style="background-color: #2F4858;">
                    <div class="card-body">
                        {!! $Incident5Chart->container() !!}
                        <script src="{{ $Incident5Chart->cdn() }}"></script>
                        {!! $Incident5Chart->script() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card text-dark pt-3" style="background-color: #5C7457;">
                <div class="card-body">
                    {!! $Incident6Chart->container() !!}
                    <script src="{{ $Incident6Chart->cdn() }}"></script>
                    {!! $Incident6Chart->script() !!}
                </div>
            </div>
        </div>

    </main>
@endsection

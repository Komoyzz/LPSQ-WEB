@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mt-3" style="width: 650px; position: relative;">
                <div class="card text-dark pt-3" style="width:650px; position: relative; background-color: #4682B4;">
                    <div class="card-body position-relative">
                        <div>
                            {!! $Investigation1Chart->container() !!}
                            <script src="{{ $Investigation1Chart->cdn() }}"></script>
                            {!! $Investigation1Chart->script() !!}
                        </div>

                        <div class=" text-white text-center font-size-14 mt-3">
                            <p class="text-justify">Done: {{ $doneCount }} Not Done: {{ $notDoneCount }} Investigation No:
                                {{ $investigationNoCount }}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8 col-lg-5 mt-3" style="width:650px;">
                <div class="card text-dark pt-3" style="background-color: darkolivegreen; width: 650px;">
                    <div class="card-body">
                        {!! $Investigation2Chart->container() !!}
                        <script src="{{ $Investigation2Chart->cdn() }}"></script>
                        {!! $Investigation2Chart->script() !!}
                    </div>

                    <div class="text-white text-center font-size-14 mt-auto">
                        <p class="text-justify">Grounding: {{ $groundingCount }} Collision: {{ $collisionCount }} Allision:
                            {{ $allisionCount }} Injury: {{ $injuryCount }}</p>
                        <p class="text-justify">Asset Loss: {{ $assetlossCount }} Engine
                            Breakdown: {{ $enginebreakCount }} Oil Spill: {{ $oilspillCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('base')


@section('subtitle')
    Here you can learn about many ways of train
@endsection

@section('content')

    @for($count=0, $breakLine=0; $count<$calisthenics->count(); $breakLine++)
    <div class="row">
        <div class="col col-sm-5 card-deck d-flex justify-content-between m-auto my-lg-4">

    @for($line = $breakLine ;$count<$calisthenics->count() && $line<$breakLine+3; $count++, $line++)
            <div class="card mt-10">
            <div class="card-body">
                <h5 class="card-title">{{$calisthenic[$count]->name}}</h5>
                <p class="card-text">{{$calisthenic[$count]->description}}.</p>
            </div>
            <div class="card-footer d-flex justify-countent-between">
                <small class="text-muted">Repetations: {{$calisthenic[$count]->repetation}}</small>
                <small class="border border-top-0 border-right-0 border-bottom-0"> </small>
                <small class="text-muted"> Sequencys: {{$calisthenic[$count]->sequency}}</small>
            </div>
            <div class="card-footer">
                @if($calisthenic[$count]->difficulty == 'easy')
                <small class="text-muted">Easy</small>
                @endif
                @if($calisthenic[$count]->difficulty == 'medium')
                    <small class="text-muted">Medium</small>
                @endif
                @if($calisthenic[$count]->difficulty == 'hard')
                    <small class="text-muted">Hard</small>
                @endif
            </div>
        </div>
    @endfor
        </div>
    </div>

    @endfor


    <div class="col  m-auto text-center">

        <img class=" w-100" src="{{ asset('images/wallpaper.jpg') }}" alt="">
    </div>
@endsection



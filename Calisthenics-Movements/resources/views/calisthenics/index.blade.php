@extends('base')

@section('title')
    @if(!isset($isUserList))
    My List Calisthenics Movements
    @else
    Calisthenics Movements
    @endif

@endsection

@section('subtitle')
    Here you can learn about many ways of train
@endsection

@section('content')

    @if(!empty($message_success))
        <div class="alert alert-success m-md-3">
            {{ $message_success }}
        </div>
    @endif


    @for($count=0, $breakLine=0; $count<$calisthenics->count(); $breakLine++)
    <div class="row">
        <div class="col col-sm-10 card-deck d-flex justify-content-between m-auto my-lg-4">

    @for($line = $breakLine ;$count<$calisthenics->count() && $line<$breakLine+3; $count++, $line++)
            <div class="card mt-10">
            <div class="card-body">
                <h5 class="card-title">{{$calisthenic[$count]->name}}</h5>
                <p class="card-text">{{$calisthenic[$count]->description}}.</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <small class="text-muted">Repetations: {{$calisthenic[$count]->repetation}}</small>
                <small class="border border-top-0 border-right-0 border-bottom-0"> </small>
                <small class="text-muted"> Sequencys: {{$calisthenic[$count]->sequency}}</small>
            </div>
            <div class="card-footer">
                <small class="text-muted">Difficulty Level: </small>
                @if($calisthenic[$count]->difficulty == 'easy')
                    <small class="text-muted">Easy</small>
                @elseif($calisthenic[$count]->difficulty == 'medium')
                    <small class="text-muted">Medium</small>
                @elseif($calisthenic[$count]->difficulty == 'hard')
                    <small class="text-muted">Hard</small>
                @elseif($calisthenic[$count]->difficulty == 'expert')
                    <small class="text-muted">Expert</small>
                @endif
            </div>
            @if(strlen ($calisthenic[$count]->muscle_group)!=0)
                <div class="card-footer">
                    <small class="text-muted">Muscle Group: {{$calisthenic[$count]->muscle_group}}</small>
                </div>
            @endif
                <div class="card-footer">
                    @if($calisthenic[$count]->i_know == '0')
                        <small class="text-muted">I don't know</small>
                    @elseif($calisthenic[$count]->i_know == '1')
                        <small class="text-muted">I know</small>
                    @endif
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <form action="{{ route('destroy', $calisthenic[$count]->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                    @if(!isset($isUserList))
                        <a class="btn btn-outline-secondary" href="{{ route('calisthenics.user.create', $calisthenic[$count]->id) }}">Add to my list</a>
                    @endif
                        <a class="btn btn-outline-primary" href="{{ route('update', $calisthenic[$count]->id) }}">Edit</a>
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



@extends('base')

@section('title')
    Recently Created
@endsection

@section('subtitle')
    Here you can see the last train created
@endsection

@section('content')

    @if(isset($_COOKIE['LastMovement']))
        <div class="row">
            <div class="col col-sm-10 card-deck d-flex justify-content-between m-auto my-lg-4">

              <div class="card mt-10">
                        <div class="card-body">
                            <h5 class="card-title">{{json_decode($_COOKIE['LastMovement'],true)['name']}}</h5>
                            <p class="card-text">{{json_decode($_COOKIE['LastMovement'],true)['description']}}.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <small class="text-muted">Repetations: {{json_decode($_COOKIE['LastMovement'],true)['repetation']}}</small>
                            <small class="border border-top-0 border-right-0 border-bottom-0"> </small>
                            <small class="text-muted"> Sequencys: {{json_decode($_COOKIE['LastMovement'],true)['sequency']}}</small>
                        </div>
                        <div class="card-footer">
                            @if(    json_decode($_COOKIE['LastMovement'],true)['difficulty'] == 'easy')
                                <small class="text-muted">Easy</small>
                            @elseif(json_decode($_COOKIE['LastMovement'],true)['difficulty'] == 'medium')
                                <small class="text-muted">Medium</small>
                            @elseif(json_decode($_COOKIE['LastMovement'],true)['difficulty'] == 'hard')
                                <small class="text-muted">Hard</small>
                            @elseif(json_decode($_COOKIE['LastMovement'],true)['difficulty'] == 'expert')
                                <small class="text-muted">Expert</small>
                            @endif
                        </div>
                        @if(strlen (json_decode($_COOKIE['LastMovement'],true)['muscle_group'])!=0)
                            <div class="card-footer">
                                <small class="text-muted">{{json_decode($_COOKIE['LastMovement'],true)['muscle_group']}}</small>
                            </div>
                        @endif
                        <div class="card-footer d-flex justify-content-between">
                            <form action="{{ route('destroy', json_decode($_COOKIE['LastMovement'],true)['id']) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                            <a class="btn btn-outline-primary" href="{{ route('update', json_decode($_COOKIE['LastMovement'],true)['id']) }}">Edit</a>

                        </div>
                    </div>
            </div>
        </div>

    @else
        <h2 class="text-center m-5"><span class="badge badge-secondary">No movements recorded in the last 24 hours</span></h2>
    @endif
    <div class="col  m-auto text-center">
        <img class=" w-100" src="{{ asset('images/wallpaper.jpg') }}" alt="Footer">
    </div>
@endsection



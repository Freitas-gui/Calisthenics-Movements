@extends('base')


@section('subtitle')
    Here you can create other movement of calisthenics
@endsection

@section('content')


    @if(isset($calisthenic))
        <form action="{{ route('edit', $calisthenic->id) }}" method="POST">
            @method('PUT')
    @else
        <form method="POST">
    @endif
        @csrf
        <div class="row mt-5">
            <div class="col col-6 m-auto">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name"
                        @if(isset($calisthenic))
                            value="{{$calisthenic->name}}"
                        @endif
               >
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto">
                <label for="muscle_group">Muscle Group:</label>
                <input type="text" class="form-control" name="muscle_group" id="muscle_group"
                        @if(isset($calisthenic))
                           value="{{$calisthenic->muscle_group}}"
                        @endif
                >
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="3">@if(isset($calisthenic)){{$calisthenic->description}}@endif</textarea>

            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto d-flex">
                <div class="col pl-0">
                    <label for="repetation">Repetation:</label>
                    <input type="number" min="1" class="form-control" name="repetation" id="repetation"
                            @if(isset($calisthenic))
                                value="{{$calisthenic->repetation}}"
                            @else
                                value="1"
                            @endif
                    >
                </div>
                <div class="col pr-0">
                    <label for="sequency">Sequency:</label>
                    <input type="number" min="1" class="form-control" name="sequency" id="sequency"
                           @if(isset($calisthenic))
                            value="{{$calisthenic->sequency}}"
                           @else
                            value="1"
                        @endif
                    >
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-6 m-auto d-flex justify-content-between">
                <label for="difficulty" class="form-group">Difficulty:</label>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-6 m-auto d-flex justify-content-between">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="easy" value="easy"
                           @if(isset($calisthenic) && ($calisthenic->difficulty == "easy"))
                           checked
                        @endif
                    >
                    <label class="form-check-label" for="easy">Easy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="mmmedium" value="mmmedium"
                        @if(isset($calisthenic) && ($calisthenic->difficulty == "medium"))
                            checked
                        @endif
                    >
                    <label class="form-check-label" for="mmmedium">Medium</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="hard" value="hard"
                        @if(isset($calisthenic) && ($calisthenic->difficulty == "hard"))
                           checked
                        @endif
                    >
                    <label class="form-check-label" for="hard">Hard</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="expert" value="expert"
                        @if(isset($calisthenic) && ($calisthenic->difficulty == "expert"))
                           checked
                        @endif
                    >
                    <label class="form-check-label" for="expert">Expert</label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 m-auto d-flex justify-content-between">
                <button class="btn btn-primary w-100">Save</button>
            </div>
        </div>
    </form>

    <script>
        function isUpdate(){
            @if(isset($calisthenics))
                {{$calisthenics}};
            @endif

        }
    </script>
@endsection

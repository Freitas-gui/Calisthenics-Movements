@extends('base')

@section('title')
    Create New Movement
@endsection

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
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        @if(isset($calisthenic))
                            value="{{$calisthenic->name}}"
                        @else
                           value="{{old('name')}}"
                        @endif
               >
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto">
                <label for="muscle_group">Muscle Group:</label>
                <input type="text" class="form-control @error('muscle_group') is-invalid @enderror" name="muscle_group" id="muscle_group"
                    @if(isset($calisthenic))
                       value="{{$calisthenic->muscle_group}}"
                    @else
                       value="{{old('muscle_group')}}"
                    @endif
                >
                @error('muscle_group')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto">
                <label for="description">Description:</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">@if(isset($calisthenic)){{$calisthenic->description}}@else{{old('muscle_group')}}@endif</textarea>

                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto d-flex">
                <div class="col pl-0">
                    <label for="repetation">Repetation:</label>
                    <input type="text" min="1" class="form-control @error('repetation') is-invalid @enderror" name="repetation" id="repetation"
                            @if(isset($calisthenic))
                                value="{{$calisthenic->repetation}}"
                            @elseif(old('repetation'))
                                value="{{old('repetation')}}"
                            @else
                                value="1"
                            @endif
                    >
                    @error('repetation')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col pr-0">
                    <label for="sequency">Sequency:</label>
                    <input type="number" min="1" class="form-control @error('sequency') is-invalid @enderror" name="sequency" id="sequency"
                           @if(isset($calisthenic))
                               value="{{$calisthenic->repetation}}"
                           @elseif(old('sequency'))
                               value="{{old('sequency')}}"
                           @else
                               value="1"
                           @endif
                    >
                    @error('sequency')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-6 m-auto d-flex justify-content-between">
                <label for="difficulty" class="form-group">Difficulty:</label>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col col-6 m-auto d-flex justify-content-between">
                <div class="form-check form-check-inline">
                    <input class="form-check-input  @error('difficulty') is-invalid @enderror" type="radio" name="difficulty" id="easyeroooooooo" value="easy error !!!!!!!!!!"
                       @if(isset($calisthenic) && ($calisthenic->difficulty == "easy"))
                           checked
                       @elseif(old('difficulty')=="easy")
                           checked
                       @endif
                    >
                    <label class="form-check-label" for="easy">Easy</label>
                    @error('difficulty')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('difficulty') is-invalid @enderror" type="radio" name="difficulty" id='medium' value='medium'
                        @if(isset($calisthenic) && ($calisthenic->difficulty == "medium"))
                            checked
                        @elseif(old('difficulty')=="medium")
                           checked
                        @endif
                    >
                    <label class="form-check-label" for="mmmedium">Medium</label>
                    @error('difficulty')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('difficulty') is-invalid @enderror" type="radio" name="difficulty" id="hard" value="hard"
                        @if(isset($calisthenic) && ($calisthenic->difficulty == "hard"))
                           checked
                        @elseif(old('difficulty')=="hard")
                           checked
                        @endif
                    >
                    <label class="form-check-label" for="hard">Hard</label>
                    @error('difficulty')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('difficulty') is-invalid @enderror" type="radio" name="difficulty" id="expert" value="expert"
                        @if(isset($calisthenic) && ($calisthenic->difficulty == "expert"))
                           checked
                        @elseif(old('difficulty')=="expert")
                           checked
                        @endif
                    >
                    <label class="form-check-label" for="expert">Expert</label>
                    @error('difficulty')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-6 m-auto">
                <label for="i_know">Mark if you know this movement:</label>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col col-6 m-auto d-flex justify-content-between">
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('i_know') is-invalid @enderror" type="checkbox" name="i_know" id="i_know" value="1"
                       @if(old('i_know')=="1")
                            checked
                       @endif
                    >
                    @error('i_know')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
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

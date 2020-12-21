@extends('base')


@section('subtitle')
    Here you can create other movement of calisthenics
@endsection

@section('content')

    <form method="post">
        @csrf
        <div class="row mt-5">
            <div class="col col-6 m-auto">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto">
                <label for="muscle_group">Muscle Group:</label>
                <input type="text" class="form-control" name="muscle_group" id="muscle_group">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-6 m-auto d-flex">
                <div class="col pl-0">
                    <label for="repetation">Repetation:</label>
                    <input type="number" min="1" value="1" class="form-control" name="repetation" id="repetation">
                </div>
                <div class="col pr-0">
                    <label for="sequency">Sequency:</label>
                    <input type="number" min="1" value="1" class="form-control" name="sequency" id="sequency">
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
                    <input class="form-check-input" type="radio" name="difficulty" id="easy" value="easy">
                    <label class="form-check-label" for="easy">Easy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="medium" value="medium" checked>
                    <label class="form-check-label" for="medium">Medium</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="hard" value="hard">
                    <label class="form-check-label" for="hard">Hard</label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 m-auto d-flex justify-content-between">
                <button class="btn btn-primary w-100">Create</button>
            </div>
        </div>
    </form>

@endsection

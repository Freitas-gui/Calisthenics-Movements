@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endsection

@section('header')
    <div class="position-relative overflow-hidden p-3 m-md-3 pt-0 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">@yield('title')</h1>
            <p class="lead font-weight-normal">@yield('subtitle')</p>
            <a class="btn btn-outline-secondary" href="{{Route("index")}}">Home</a>
            <a class="btn btn-outline-secondary" href="{{Route("create")}}">New</a>
            <a class="btn btn-outline-secondary" href="{{Route("calisthenics.user.index")}}">My List</a>
            <a class="btn btn-outline-secondary" href="{{Route("last.created")}}">Recently created</a>
        </div>
    </div>
@endsection

@section('content')
    @yield('content')
@endsection


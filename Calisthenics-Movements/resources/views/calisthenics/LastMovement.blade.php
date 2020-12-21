@extends('base')


@section('subtitle')
    Here you can see last movement created
@endsection

@section('content')

    {{ $_COOKIE['LastMovement']}}

@endsection

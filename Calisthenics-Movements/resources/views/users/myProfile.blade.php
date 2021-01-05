@extends('base')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/myProfile.css') }}" >
@endsection

@section('title')
    My profile
@endsection

@section('subtitle')
    Here you can see details of your profile
@endsection

@section('content')


    <div class="mw-120 mh-100">
        <div class="padding">
            <div class=" d-flex justify-content-center">
                <div class="col-xl-10 col-md-12">


                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile d-flex justify-content-between flex-column">
                                <div class="card-block text-center">
                                    <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                    <h6 class="f-w-600">{{Auth::user()->name}}</h6>
                                    <h6 class="f-w-600">{{"@"}}{{Auth::user()->username}}</h6>

                                    {{--<p>Web Designer</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>--}}
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a class="navbar-brand btn btn-outline-danger text-danger w-25 ml-3" href="{{Route("deactive")}}">
                                        Deactivate
                                    </a>
                                    <a class="navbar-brand btn btn-outline-primary text-primary w-25 ml-3" href="{{Route("deactive")}}">
                                        Edit
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block mt-5">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row mt-5">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted">{{Auth::user()->email}}</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Phone</p>
                                            <h6 class="text-muted">{{Auth::user()->phone}}</h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                    <div class="row mt-5">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">CPF</p>
                                            <h6 class="text-muted">{{Auth::user()->cpf}}</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Age</p>
                                            <h6 class="text-muted">{{$age}}</h6>
                                        </div>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

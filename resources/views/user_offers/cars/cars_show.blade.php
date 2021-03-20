@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>Property For Rent</h1>
                    </div>
                    <div class="col-12">
                        {{$car->where_can_u_get_it}}
                        {{$car->car_cost_of_renting}}M<sup>2</sup>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-items-center">
                    <div>
                        <img src="{{ $car->user->profile->profileImage() }}" class="rounded-circle mid">
                    </div>
                    <div class="float-right pt-5">
                        <a href="#">
                            Follow
                        </a>
                    </div>
                    <div class="font-weight-bold">
                        <a href="/myprofile/{{ $car->user_id}}">
                            <h2>{{$car->user->name}}</h2>
                        </a>
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $car->user->profile->introduction }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $car->user->profile->email }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $car->user->phone }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        <a href="{{ $car->user->profile->url }}">
                            Here you can find me
                        </a>
                    </div>
                    <div class="font-weight-bold pr-1">
                        {{ $car->user->email }}
                    </div>
                    <div>
                        <button class="btn btn-dark info_but" type="button">
                            <a href="/myprofile/{{ $car->user_id}}">
                                More offer
                            </a>
                        </button>
                    </div>
                    @if(Auth::user()->id==$car->user_id)
                        <div>
                            <button class="btn btn-dark info_but" type="button">
                                <a href="/myprofile/items/car/{{$car->id}}/edit">
                                    Edit your post
                                </a>
                            </button>
                        </div>
                        <div>
                                <button class="btn btn-dark info_but" type="button" data-toggle="modal" data-target="#exampleModal">
                                    Delete
                                </button>
                        </div>
                    @else

                        <div>
                            <button class="btn btn-dark info_but" type="button">
                                Make appointment now
                            </button>
                        </div>
                    @endif

                </div>
                <div class="col-md-8">
                    <img src="/storage/{{ $car->car_image }}" class="itemshow" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About the car</h2>
                </div>
                <div class="col-md-6 col-xl-2">
                    Manufacturer
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->car_manufacturer }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Number of doors
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->number_of_doors }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Colour:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->colour_of_car }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Gearbox
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->type_of_gearbox }}
                </div>
                <div class="col-md-6 col-xl-2">
                   ABS
                </div>
                <div class="col-md-6 col-xl-2">
                    {{ $car->abs }}
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Extras</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Alarm: {{ $car->alarm }}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Bluetooth:{{ $car->bluetooth}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    DashCam: {{ $car->dashcam}}
                </div>

                <div class="col-xs-6 col-md-4 col-xl-2">
                    Backward radar: {{ $car->back_radar}}
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Payments</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Cost:{{ $car->car_cost_of_renting}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Deposit: {{ $car->car_deposit }}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Really wanna it?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                    <form action="/myprofile/items/car/{{$car->id}}" enctype="multipart/form-data" method="POST">
                        <button class="btn btn-danger" value="submit" type="submit">
                            @csrf
                            @method('DELETE')
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

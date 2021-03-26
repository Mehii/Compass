@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>{{__('Vehicle For Rent')}}</h1>
                    </div>
                    <div class="col-12">
{{--                        {{$car->where_can_u_get_it}}--}}
{{--                        {{$car->car_cost_of_renting}}M<sup>2</sup>--}}
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
                            {{__('Follow')}}
                        </a>
                    </div>
                    <div class="font-weight-bold">
                        <a href="/en/myprofile/{{ $car->user_id}}">
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
                            {{__('Here you can find me')}}
                        </a>
                    </div>
                    <div class="font-weight-bold pr-1">
                        {{ $car->user->email }}
                    </div>
                    <div>
                        <button class="btn btn-dark info_but" type="button">
                            <a href="/en/myprofile/{{ $car->user_id}}">
                                {{__('More offer')}}
                            </a>
                        </button>
                    </div>
                    @if(Auth::user()->id==$car->user_id)
                        <div>
                            <button class="btn btn-dark info_but" type="button">
                                <a href="/en/myprofile/items/car/{{$car->id}}/edit">
                                    {{__('Edit your post')}}
                                </a>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-dark info_but" type="button" data-toggle="modal" data-target="#exampleModal">
                                {{__('Delete')}}
                            </button>
                        </div>
                    @else

                        <div>
                            <button class="btn btn-dark info_but" type="button">
                                {{__('Make appointment now')}}
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
                    <h2>{{__('About the vehicle')}}</h2>
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Vehicle manufacturer')}}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->car_manufacturer }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Number of doors')}}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->number_of_doors }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Colour of the vehicle')}}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->colour_of_car }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Gearbox')}}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $car->type_of_gearbox }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('ABS')}}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{ $car->abs }}
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('Extras')}}</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Alarm')}}: {{ $car->alarm }}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Bluetooth')}}:{{ $car->bluetooth}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('DashCam')}}: {{ $car->dashcam}}
                </div>

                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Backwards radar')}}: {{ $car->back_radar}}
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('Payments')}}</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Cost/Week')}}:{{ $car->car_cost_of_renting}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Deposit')}}: {{ $car->car_deposit }}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Delete')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{__('Really wanna it?')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Discard')}}</button>
                    <form action="/en/myprofile/items/car/{{$car->id}}" enctype="multipart/form-data" method="POST">
                        <button class="btn btn-danger" value="submit" type="submit">
                            @csrf
                            @method('DELETE')
                            {{__('Delete')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

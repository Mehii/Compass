@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>Provider</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-3 pt-5">
                    <img src="{{ $user->profile->profileImage() }}" class="rounded-circle profile_image">
                </div>
                <div class="col-9 pt-5">
                    <div>
                        <h2>
                            {{$user->name}}
                        </h2>
                    </div>
                    <div>
                        {{ $user->email }}
                    </div>
                    <div>
                        {{ $user->phone ?? 'Not filled'}}
                    </div>
                    <div>
                        <div class="pr-5">{{ $user->profile->introduction}}</div>
                    </div>
                    <div class="d-flex">
                            <div class="pr-5"><strong>{{ $user->cars->count() }}</strong> Car posted</div>
                            <div class="pr-5"><strong>{{ $user->offices->count() }}</strong> Office posted</div>
                            <div class="pr-5"><strong>{{ $user->boats->count() }}</strong> Boat posted</div>
                            <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> follower</div>
                            <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-flex align-items-center pb-3">
                            <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                        </div>

                        <!-- Main Page-n 3 choosable option-Car-Boat-Office -->
                        @can('update',$user->profile)
                            <div class="col-3"><a href="/myprofile/items/car/add_new_car">Add New Car</a></div>
                            <div class="col-3"><a href="/myprofile/items/office/add_new_office">Add New Office</a></div>
                            <div class="col-3"><a href="/myprofile/items/boat/add_new_boat">Add New Boat</a></div><!-- choose from list which type && d-flex justify-content-between-->
                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        Cars
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach($user->cars as $car)
                    <div class="col-md-4 pb-4">
                        <a href="/myprofile/items/car/{{$car->id}}">
                            <div>
                                <img src="/storage/{{ $car->car_image }}" class="w-75" alt="">
                            </div>
                            <div>
                                <h2>{{$car->name_of_the_city}},{{$car->car_manufacturer}}</h2>
                                <h5>Doors: {{$car->number_of_doors}}</h5>
                                <h5>Ref No:{{$car->id}}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        Flats
                    </h2>
                </div>
                @foreach($user->offices as $office)
                    <div class="col-md-4 pb-4">
                        <a href="/myprofile/items/office/{{$office->id}}">
                            <div>
                                <img src="/storage/{{ $office->office_image }}" class="w-75" alt="">
                            </div>
                            <div>
                                <h2>{{$office->name_of_the_city}},{{$office->street}}</h2>
                                <h5>Square Meter: {{$office->square_meter}}M<sup>2</sup></h5>
                                <h5>Ref No:{{$office->id}}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        Cars
                    </h2>
                </div>
                @foreach($user->boats as $boat)
                    <div class="col-md-4 pb-4">
                        <a href="/myprofile/items/boat/{{$boat->id}}">
                            boat
                            <img src="/storage/{{ $boat->boat_image }}" class="w-100" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




@endsection



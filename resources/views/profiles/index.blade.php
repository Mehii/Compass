@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>{{__('Provider')}}</h1>
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
                            {{ $user->name }}
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
                            <div class="pr-5"><strong>{{ $user->cars->count() }}</strong>{{__('Vehicle posted')}} </div>
                            <div class="pr-5"><strong>{{ $user->offices->count() }}</strong>{{__('Property posted')}} </div>
                            <div class="pr-5"><strong>{{ $user->boats->count() }}</strong>{{__('Boat posted')}} </div>
                            <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong>{{__('follower')}}</div>
                            <div class="pr-5"><strong>{{ $user->following->count() }}</strong>{{__('following')}}</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-flex align-items-center pb-3">
                            <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                        </div>

                        <!-- Main Page-n 3 choosable option-Car-Boat-Office -->
                        @can('update',$user->profile)
                            <div class="col-3"><a href="/{{app()->getLocale()}}/myprofile/items/car/add_new_car">{{__('New Car')}}</a></div>
                            <div class="col-3"><a href="/{{app()->getLocale()}}/myprofile/items/office/add_new_office">{{__('New Property')}}</a></div>
                            <div class="col-3"><a href="/{{app()->getLocale()}}/myprofile/items/boat/add_new_boat">{{__('New Boat')}}</a></div><!-- choose from list which type && d-flex justify-content-between-->
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
                        {{__('Vehicles')}}
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach($user->cars as $car)
                    <div class="col-md-4 pb-4">
                        <a href="/{{app()->getLocale()}}/myprofile/items/car/{{$car->id}}">
                            <div>
                                <img src="/storage/{{ $car->car_image }}" class="w-75" alt="">
                            </div>
                            <div>
                                <h2>{{$car->name_of_the_city}},{{$car->car_manufacturer}}</h2>
                                <h5>{{__('Doors')}}: {{$car->number_of_doors}}</h5>
                                <h5>{{__('Ref No')}}:{{$car->id}}</h5>
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
                        {{__('Properties')}}
                    </h2>
                </div>
                @foreach($user->offices as $office)
                    <div class="col-md-4 pb-4">
                        <a href="/{{app()->getLocale()}}/myprofile/items/office/{{$office->id}}">
                            <div>
                                <img src="/storage/{{ $office->office_image }}" class="w-75" alt="">
                            </div>
                            <div>
                                <h2>{{$office->name_of_the_city}},{{$office->street}}</h2>
                                <h5>{{__('Square Meter')}}: {{$office->square_meter}}M<sup>2</sup></h5>
                                <h5>{{__('Ref No')}}:{{$office->id}}</h5>
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
                        {{__('Boat')}}
                    </h2>
                </div>
                @foreach($user->boats as $boat)
                    <div class="col-md-4 pb-4">
                        <a href="/{{app()->getLocale()}}/myprofile/items/office/{{$boat->id}}">
                            <div>
                                <img src="/storage/{{ $boat->boat_image }}" class="w-75" alt="">
                            </div>
                            <div>
{{--                                <h2>{{$boat->name_of_the_city}},{{$office->street}}</h2>--}}
{{--                                <h5>Square Meter: {{$office->square_meter}}M<sup>2</sup></h5>--}}
{{--                                <h5>Ref No:{{$office->id}}</h5>--}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection



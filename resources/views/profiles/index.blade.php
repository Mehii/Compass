@extends('layouts.app')

<link href="../../css/app.css" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-3">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" alt="">
        </div>
        <div class="col-9 pt-5">
            <h1>{{$user->name}}</h1>
        </div>
    </div>
    <div class="row ">
        <!-- Main Page-n 3 choosable option-Car-Boat-Office -->
        @can('update',$user->profile)
        <div class="col-3"><a href="/myprofile/items/car/add_new_car">Add New Car</a></div>
        <div class="col-3"><a href="/myprofile/items/office/add_new_office">Add New Office</a></div><!-- choose from list which type && d-flex justify-content-between-->
        @endcan
        <div class="col-9">{{ $user->email }}</div>
        <div class="col-9">{{ $user->password }}</div>
        <div class="col-9 pb-1">{{ $user->profile->introduction ?? 'Not filled yet' }}</div>

    </div>
    <div class="row">
        <div class="col-4 pb-4">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
        </div>
        <div class="col-4 pb-4">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
        </div>
        <div class="col-4 pb-4">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
        </div>
        @foreach($user->cars as $car)
            <div class="col-4 pb-4">
                <a href="/myprofile/items/car/{{$car->id}}">
                    Autó
                    <img src="/storage/{{ $car->car_image }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
        @foreach($user->offices as $office)
                <div class="col-4 pb-4">
                    <a href="/myprofile/items/office/{{$office->id}}">
                        Office
                        <img src="/storage/{{ $office->office_image }}" class="w-100" alt="">
                    </a>
                </div>
        @endforeach
        @foreach($user->boats as $boat)
            <div class="col-4 pb-4">
                <a href="/myprofile/items/boat/{{$boat->id}}">
                    boat
                    <img src="/storage/{{ $boat->boat_image }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection


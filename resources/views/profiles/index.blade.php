@extends('layouts.app')

<link href="../../css/app.css" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-3">
            Profile Image place
        </div>
        <div class="col-9 pt-5">
            <h1>{{$user->name}}</h1>
        </div>
    </div>
    <div class="row">
        <!-- Main Page-n 3 choosable option-Car-Boat-Office -->
        @can('update',$user->profile)
        <div class="col-9"><a href="/myprofile/items/car/add_new_car">Add New Car</a></div> <!-- choose from list which type && d-flex justify-content-between-->
        @endcan
            <div class="col-9">{{ $user->email }}</div>
        <div class="col-9">{{ $user->password }}</div>
        <div class="col-9">{{ $user->profile->introduction ?? 'Not filled yet' }}</div>
    </div>
    <div class="row">
        @foreach($user->cars as $car)
            <div class="col-4 pb-4">
                <a href="/myprofile/items/car/{{$car->id}}">
                    <img src="/storage/{{ $car->car_image }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection


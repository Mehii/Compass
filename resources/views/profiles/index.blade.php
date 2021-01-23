@extends('layouts.app')

<link href="../../css/app.css" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-3">
            Profile Image place
        </div>
        <div class="col-9 pt-5">
            <h1>{{$user->name }}</h1>
        </div>
    </div>
    <div class="row">
        <!-- Main Page-n 3 choosable option-Car-Boat-Office -->
        <div class="col-9"><a href="#">Add New Item</a></div> <!-- choose from list which type && d-flex justify-content-between-->
        <div class="col-9">{{ $user->email }}</div>
        <div class="col-9">{{ $user->password }}</div>
        <div class="col-9">{{ $user->profile->introduction ?? 'Not filled yet' }}</div>
    </div>
</div>
@endsection

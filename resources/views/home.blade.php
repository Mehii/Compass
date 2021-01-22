@extends('layouts.app')

<link href="../css/app.css" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$user->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-9">{{ $user->email }}</div>
        <div class="col-9">{{ $user->password }}</div>
        <div class="col-9">{{ $user->profile->introduction ?? 'Not filled yet' }}</div>
    </div>
</div>
@endsection


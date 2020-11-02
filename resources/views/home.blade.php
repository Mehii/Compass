@extends('layouts.app')

<link href="../css/app.css" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">{{ $user->name }}</div>
        <div class="col-9"><h1></h1></div>

    </div>
</div>
@endsection

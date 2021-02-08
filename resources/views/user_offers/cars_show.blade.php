@extends('layouts.app')

@section('content')
    <div class="container">
      <img src="storage/{{$car->car_image}}" alt="">
        <div class="row">
            <div class="col-12">
                {{ $car->id }}
            </div>
        </div>
    </div>
@endsection

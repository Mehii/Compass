@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                {{ $car->id }}
                <img src="/storage/{{ $car->car_image }}" class="w-100" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-5">
                <a href="/myprofile/items/car/{{$car->id}}/edit">Edit your post</a>
            </div>
            <div class="col-6">

                <form action="/myprofile/items/car/{{$car->id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row pt-5">
                        <button class="btn btn-danger" value="submit" type="submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

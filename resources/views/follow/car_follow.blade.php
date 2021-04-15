@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>{{__('Followed providers')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                @forelse($car_post as $car)
                    <div class="col-md-4 pb-4">
                        <a href="/{{app()->getLocale()}}/myprofile/items/car/{{$car->id}}">
                            <div>
                                <img src="/storage/{{ $car->car_image }}" class="w-75 kep" alt="">
                            </div>
                            <div>
                                <h2>{{$car->name_of_the_city}},{{$car->car_manufacturer}}</h2>
                                <h5>{{__('Doors')}}: {{$car->number_of_doors}}</h5>
                                <h5>{{__('Ref No')}}:{{$car->id}}</h5>
                            </div>
                        </a>
                    </div>
                    @empty
                        <div class="col-12">
                            <h2>{{__('Nobody posted car')}}</h2>
                            <h2><a href="/{{app()->getLocale()}}/registered_users"> {{__('Check out other users')}}</a></h2>
                        </div>
                    @endforelse
            </div>
        </div>
    </section>
@endsection

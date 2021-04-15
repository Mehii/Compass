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
                @forelse($boat_post as $boat)
                    <div class="col-md-4 pb-4">
                        <a href="/{{app()->getLocale()}}/myprofile/items/boat/{{$boat->id}}">
                            <div>
                                <img src="/storage/{{ $boat->boat_image }}" class="kep w-75" alt="">
                            </div>
                            <div>
                                <h2>{{$boat->name_of_the_city}},{{$boat->street}}</h2>
                                <h5>{{__('Type of Ship')}}: {{$boat->type_of_boat}}M<sup>2</sup></h5>
                                <h5>{{__('Ref No')}}:{{$boat->id}}</h5>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <h2>{{__('Nobody posted boat')}}</h2>
                        <h2><a href="/{{app()->getLocale()}}/registered_users"> {{__('Check out other users')}}</a></h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

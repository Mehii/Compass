@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>{{__('Welcome in my page')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                @foreach($office_post as $office)
                    <div class="col-md-4 pb-4">
                        <a href="/{{app()->getLocale()}}/myprofile/items/office/{{$office->id}}">
                            <div>
                                <img src="/storage/{{ $office->office_image }}" class="kep w-75" alt="">
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
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>{{__('Boat For Rent')}}</h1>
                    </div>
                    <div class="col-12">
                        {{$boat->name_of_the_city}}
                        GPS
                        @if(($boat->gps)==1)
                            Available
                        @else
                            {{__('Doesnt have')}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-items-center">
                    <div>
                        <img src="{{ $boat->user->profile->profileImage() }}" class="rounded-circle mid">
                    </div>
                    <div class="font-weight-bold">
                        <a href="/{{app()->getLocale()}}/myprofile/{{ $boat->user_id}}">
                            <h2>{{$boat->user->name}}</h2>
                        </a>
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $boat->user->profile->introduction }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $boat->user->profile->email }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $boat->user->phone }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        <a href="{{ $boat->user->profile->url }}">
                            {{('Here you can find me')}}
                        </a>
                    </div>
                    <div class="font-weight-bold pr-1">
                        {{ $boat->user->email }}
                    </div>
                    <div>
                        <button class="btn btn-dark info_but" type="button">
                            <a href="/{{app()->getLocale()}}/myprofile/{{ $boat->user_id}}">
                                {{__('More offer')}}
                            </a>
                        </button>
                    </div>

                    @if(Auth::user()->id==$boat->user_id)
                        <div>
                            <button class="btn btn-dark info_but" type="button">
                                <a href="/{{app()->getLocale()}}/myprofile/items/boat/{{$boat->id}}/edit">
                                    {{__('Edit my post')}}
                                </a>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-dark info_but" type="button" data-toggle="modal" data-target="#exampleModal">
                                {{__('Delete')}}
                            </button>
                        </div>
                    @else
                        <div>
                            <button class="btn btn-dark info_but" type="button" >
                                {{__('Make appointment now')}}
                            </button>
                        </div>
                    @endif

                </div>
                <div class="col-md-8">
                    <img src="/storage/{{ $boat->boat_image }}" class="itemshow" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('Details')}}</h2>
                </div>

                <div class="col-md-6 col-xl-2">
                    <b>{{__('Type of the boat')}}:</b>
                    {{  $boat->boat_type }}
                </div>
                <div class="col-md-6 col-xl-2">
                  <b>  {{__('Boat manufacturer')}}:</b>
                    {{  $boat->boat_manufacturer }}
                </div>

                <div class="col-md-6 col-xl-2">
                    <b>{{__('Colour of boat')}}:</b>
                    {{  $boat->colour_of_boat }}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('Details of the Ship')}}</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Rooms')}}:
                    {{ $boat->rooms }}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Survivability')}}:
                    {{ $boat->survivability}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('Extras')}}</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('GPS')}}:</b>
                    @if(($boat->gps)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('A/C')}}:</b>
                    @if(($boat->ac)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('Washing machine')}}:</b>
                    @if(($boat->washing_machine)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('Heating')}}:</b>
                    @if(($boat->heating)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('Payments')}}</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Cost/Week')}}:{{ $boat->boat_cost_of_renting}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Deposit')}}: {{ $boat->boat_deposit }}
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Post delete')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{__('Really wanna it?')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Discard')}}</button>
                    <form action="/{{app()->getLocale()}}/myprofile/items/boat/{{$boat->id}}" enctype="multipart/form-data" method="POST">
                        <button class="btn btn-danger" value="submit" type="submit">
                            @csrf
                            @method('DELETE')
                            {{__('Delete')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



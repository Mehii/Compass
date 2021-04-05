@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>{{__('Property For Rent')}}</h1>
                    </div>
                    <div class="col-12">
                        {{$office->name_of_the_city}}
                        {{$office->square_meter}}M<sup>2</sup>
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
                        <img src="{{ $office->user->profile->profileImage() }}" class="rounded-circle mid">
                    </div>
                    <div class="font-weight-bold">
                        <a href="/{{app()->getLocale()}}/myprofile/{{ $office->user_id}}">
                            <h2>{{$office->user->name}}</h2>
                        </a>
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $office->user->profile->introduction }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $office->user->profile->email }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        {{ $office->user->phone }}
                    </div>

                    <div class="font-weight-bold pr-1">
                        <a href="{{ $office->user->profile->url }}">
                            {{('Here you can find me')}}
                        </a>
                    </div>
                    <div class="font-weight-bold pr-1">
                        {{ $office->user->email }}
                    </div>
                    <div>
                        <button class="btn btn-dark info_but" type="button">
                            <a href="/{{app()->getLocale()}}/myprofile/{{ $office->user_id}}">
                                {{__('More offer')}}
                            </a>
                        </button>
                    </div>

                    @if(Auth::user()->id==$office->user_id)
                        <div>
                            <button class="btn btn-dark info_but" type="button">
                                <a href="/{{app()->getLocale()}}/myprofile/items/office/{{$office->id}}/edit">
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
                    <img src="/storage/{{ $office->office_image }}" class="itemshow" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <h2>{{__('Rooms')}}</h2>
                </div>

                <div class="col-md-6 col-xl-2">
                    {{__('Bathroom')}}

                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->bathroom }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Bedroom')}}:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->bedroom }}
                </div>

                <div class="col-md-6 col-xl-2">
                    {{__('Dining room')}}:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->dining_room }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Kitchen')}}:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->kitchen }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Living room')}}:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->living_room }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Closet')}}:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->toilet }}
                </div>
                <div class="col-md-6 col-xl-2">
                    {{__('Garage')}}:
                </div>
                <div class="col-md-6 col-xl-2">
                    @if(($office->garage)==1)
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
                    <h2>{{__('Extras')}}</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('Lift')}}:</b>
                    @if(($office->lift)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('A/C')}}:</b>
                    @if(($office->ac)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('Washing machine')}}:</b>
                    @if(($office->washing_machine)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>

                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('Sea view')}}:</b>
                    @if(($office->sea_view)==1)
                        {{__('Available')}}
                    @else
                        {{__('Doesnt have')}}
                    @endif
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    <b>{{__('Heating')}}:</b>
                    @if(($office->heating)==1)
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
                    {{__('Cost/Week')}}:{{ $office->office_cost_of_renting}} €
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    {{__('Deposit')}}: {{ $office->office_deposit }} €
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
                    <form action="/hu/myprofile/items/office/{{$office->id}}" enctype="multipart/form-data" method="POST">
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



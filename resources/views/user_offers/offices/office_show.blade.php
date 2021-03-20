@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>Property For Rent</h1>
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
                    <div class="float-right pt-5">
                        <a href="#">
                            Follow
                        </a>
                    </div>
                    <div class="font-weight-bold">
                        <a href="/myprofile/{{ $office->user_id}}">
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
                            Here you can find me
                        </a>
                    </div>
                    <div class="font-weight-bold pr-1">
                        {{ $office->user->email }}
                    </div>
                    <div>
                        <button class="btn btn-dark info_but" type="button">
                            <a href="/myprofile/{{ $office->user_id}}">
                                More offer
                            </a>
                        </button>
                    </div>



                    @if(Auth::user()->id==$office->user_id)
                        <div>
                            <button class="btn btn-dark info_but" type="button">
                                <a href="/myprofile/items/office/{{$office->id}}/edit">
                                    Edit your post
                                </a>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-dark info_but" type="button" data-toggle="modal" data-target="#exampleModal">
                                Delete
                            </button>
                        </div>
                    @else
                        <div>
                            <button class="btn btn-dark info_but" type="button" >
                                Make appointment now
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
                   <h2>Rooms</h2>
                </div>

                <div class="col-md-6 col-xl-2">
                    Bathroom:

                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->bathroom }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Bedroom:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->bedroom }}
                </div>

                <div class="col-md-6 col-xl-2">
                    Dining room:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->dining_room }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Kitchen:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->kitchen }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Living room:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->living_room }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Closet:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->toilet }}
                </div>
                <div class="col-md-6 col-xl-2">
                    Garage:
                </div>
                <div class="col-md-6 col-xl-2">
                    {{  $office->garage }}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Extras</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    lift: {{ $office->lift }}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    A/C:{{ $office->ac}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Washing machine: {{ $office->washing_machine}}
                </div>

                <div class="col-xs-6 col-md-4 col-xl-2">
                    Sea view: {{ $office->sea_view}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Heating:  {{ $office->heating}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Payments</h2>
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Cost:{{ $office->office_cost_of_renting}}
                </div>
                <div class="col-xs-6 col-md-4 col-xl-2">
                    Deposit: {{ $office->office_deposit }}
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Really wanna it?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                    <form action="/myprofile/items/office/{{$office->id}}" enctype="multipart/form-data" method="POST">
                        <button class="btn btn-danger" value="submit" type="submit">
                            @csrf
                            @method('DELETE')
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



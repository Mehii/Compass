@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <h1>{{__('Publish your Ship')}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <form action="/en/myprofile/items/boat" enctype="multipart/form-data" method="POST" id="name_of_the_city">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{__('Location')}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <div class="col-xs-12 col-md-4 col-xl-4">
                            <label for="name_of_the_city">{{__('City')}}</label>
                            <div class="form-group" style="width: 300px">
                                <select class="city_choose" name="name_of_the_city" form="name_of_the_city" id="name_of_the_city"  style="width: 150px">
                                    <option value="Birgu">Birgu</option>
                                    <option value="Mdina">Mdina</option>
                                    <option value="Qormi">Qormi</option>
                                    <option value="Senglea">Senglea</option>
                                    <option value="Siġġiewi">Siġġiewi</option>
                                    <option value="Valletta">Valletta</option>
                                    <option value="Żebbuġ">Żebbuġ</option>
                                    <option value="Żejtun">Żejtun</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <label for="street">{{__('Street')}}</label>
                        <div class="form-group" style="width: 200px">
                            <input id="street"
                                   type="text"
                                   class="form-control @error('street') is-invalid @enderror"
                                   name="street"
                                   autocomplete="">
                            @error('street')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{__('Details')}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="boat_type" class="col-md-4 col-form-label text-md-left" style="width: 200px">{{__('Boat-type')}}</label>
                        <div class="form-group">
                            <select id="boat_type" name="boat_type" class="form-control">
                                <option value="Sail_Boat">{{__('Sail Boat')}}</option>
                                <option value="Deck">{{__('Deck')}}</option>
                                <option value="Bowrider_Boat">{{__('Bowrider Boat')}}</option>
                            </select>
                            @error('boat_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="boat_manufacturer">{{__('Boat manufacturer')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="boat_manufacturer"
                                   type="text"
                                   class="form-control @error('boat_manufacturer') is-invalid @enderror"
                                   name="boat_manufacturer"
                                   autocomplete="">
                            @error('boat_manufacturer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="colour_of_boat">{{__('Colour of the boat')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="colour_of_boat"
                                   type="text"
                                   class="form-control @error('colour_of_boat') is-invalid @enderror"
                                   name="colour_of_boat"
                                   autocomplete="">

                            @error('colour_of_boat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            {{__('Details of the boat')}}
                        </h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="rooms">{{__('Rooms')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="rooms"
                                   type="number" step="1"
                                   class="form-control @error('rooms') is-invalid @enderror"
                                   name="rooms"
                                   min="1"
                                   autocomplete="toilet">

                            @error('rooms')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="survivability" class="col-md-4 col-form-label text-md-left">{{__('Survivability')}}</label>
                        <div class="form-group">
                            <select id="survivability" name="survivability" class="form-control">
                                <option value="not-suitable">{{__('Not-suitable')}}</option>
                                <option value="suitable">{{__('Suitable')}}</option>

                            </select>
                            @error('survivability')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{__('Extras')}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 200px">
                            <label for="gps">{{__('GPS')}}</label>
                            <input type='hidden' value='0' name='gps'>
                            <input type='checkbox'
                                   id="gps"
                                   name="gps"
                                   value="1"
                                   autocomplete="0">
                            @error('gps')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="ac">{{__('A/C')}}</label>
                            <input type='hidden' value='0' name='ac'>
                            <input type='checkbox'
                                   id="ac"
                                   name="ac"
                                   value="1"
                            autocomplete="0">
                            @error('ac')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 150px">
                            <label for="washing_machine">{{__('Washing machine')}}</label>
                            <input type='hidden' value='0' name='washing_machine'>
                            <input type='checkbox'
                                   id="washing_machine"
                                   name="washing_machine"
                                   value="1"
                                   autocomplete="0">
                            @error('washing_machine')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="heating">{{__('Heating')}}</label>
                            <input type='hidden' value='0' name='heating'>
                            <input type='checkbox'
                                   id="checkbox"
                                   name="heating"
                                   value="1"
                                   autocomplete="0">
                            @error('heating')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{__('Payments')}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="boat_cost_of_renting">{{__('Cost/Week')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="boat_cost_of_renting"
                                   type="number" min="0" step="50"
                                   class="form-control @error('boat_cost_of_renting') is-invalid @enderror"
                                   name="boat_cost_of_renting"
                                   placeholder="€">

                            @error('office_cost_of_renting')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="boat_deposit">{{__('Deposit')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="boat_deposit"
                                   type="number" min="0" step="50"
                                   class="form-control @error('boat_deposit') is-invalid @enderror"
                                   name="boat_deposit"
                                   placeholder="€">
                            @error('boat_deposit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="boat_image" class="col-mod-4 col-form-label"><h2>{{__('Image')}}</h2></label>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="boat_image" name="boat_image" multiple>
                            @error('boat_image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary align-bottom">{{__('Submit your Ship')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection

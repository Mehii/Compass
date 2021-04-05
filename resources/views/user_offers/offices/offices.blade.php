@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <h1>{{__('Publish your property')}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <form action="/en/myprofile/items/office" enctype="multipart/form-data" method="POST" id="name_of_the_city">
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
                                   value="{{ old('street') }}"
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
                        <label for="square_meter">{{__('Square Meter')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="square_meter"
                                   type="number" step="1"
                                   min="40" max="750"
                                   class="form-control @error('square_meter') is-invalid @enderror"
                                   name="square_meter"
                                   value="{{ old('square_meter') }}">
                            @error('square_meter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="building_floor">{{__('Block of building')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="building_floor"
                                   type="number" step="1"
                                   min="0" max="20"
                                   class="form-control @error('building_floor') is-invalid @enderror"
                                   name="building_floor">

                            @error('building_floor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="floor">{{__('Floor')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="floor"
                                   type="number"
                                   class="form-control @error('floor') is-invalid @enderror"
                                   name="floor"
                                   min="0" maxlength="20">
                            @error('floor')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="furniture" class="col-md-4 col-form-label text-md-left">{{__('Furniture')}}</label>
                        <div class="form-group">
                            <select id="furniture" name="furniture" class="form-control">
                                <option value="Furnished">{{__('Furnished')}}</option>
                                <option value="Half-furnished">{{__('Half-furnished')}}</option>
                                <option value="No furnished">{{__('No furnished')}}</option>
                            </select>
                            @error('furniture')
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
                            {{__('Details of the property')}}
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="bathroom">{{__('Bathroom')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="bathroom"
                                   type="number" step="1"
                                   min="0" max="4"
                                   class="form-control @error('bathroom') is-invalid @enderror"
                                   name="bathroom"
                                   value="{{ old('bathroom') }}"
                                   autocomplete="bathroom">

                            @error('bathroom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="bedroom">{{__('Bedroom')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="bedroom"
                                   type="number" step="1"
                                   min="0" max="4"
                                   class="form-control @error('bedroom') is-invalid @enderror"
                                   name="bedroom"
                                   value="{{ old('bedroom') }}"
                                   autocomplete="bedroom">

                            @error('bedroom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="dining_room">{{__('Dining room')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="dining_room"
                                   type="number" step="1"
                                   min="0" max="4"
                                   class="form-control @error('dining_room') is-invalid @enderror"
                                   name="dining_room">

                            @error('dining_room')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="kitchen">{{__('Kitchen')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="kitchen"
                                   type="number" step="1"
                                   min="0" max="4"
                                   class="form-control @error('kitchen') is-invalid @enderror"
                                   name="kitchen">

                            @error('kitchen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="living_room">{{__('Living room')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="living_room"
                                   type="number" step="1"
                                   min="0" max="4"
                                   class="form-control @error('living_room') is-invalid @enderror"
                                   name="living_room"
                                   value="{{ old('living_room') }}"
                                   autocomplete="living_room">

                            @error('living_room')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="toilet">{{__('Closet')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="toilet"
                                   type="number" step="1"
                                   min="0" max="4"
                                   class="form-control @error('toilet') is-invalid @enderror"
                                   name="toilet"
                                   value="{{ old('toilet') }}"
                                   autocomplete="toilet">

                            @error('toilet')
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
                        <div class="form-group" style="width: 100px">
                            <label for="garage">{{__('Garage')}}</label>
                            <input type='hidden' value='0' name='garage'>
                            <input type='checkbox'
                                   id="garage"
                                   name="garage" value="1"
                                   autocomplete="0">
                            @error('garage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 200px">
                            <label for="sea_view">{{__('Sea view')}}</label>
                            <input type='hidden' value='0' name='sea_view'>
                            <input type='checkbox'
                                   id="sea_view"
                                   name="sea_view"
                                   value="1">
                            @error('sea_view')
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
                                   value="1">
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
                                   value="1">
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
                                   id="heating"
                                   name="heating"
                                   value="1">
                            @error('heating')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="lift">{{__('Lift')}}</label>
                            <input type='hidden' value='0' name='lift'>
                            <input type='checkbox'
                                   id="lift"
                                   name="lift"
                                   value="1">
                            @error('lift')
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
                        <label for="office_cost_of_renting">{{__('Cost/Week')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="office_cost_of_renting"
                                   type="number" step="50"
                                   class="form-control @error('office_cost_of_renting') is-invalid @enderror"
                                   name="office_cost_of_renting"
                                   value="0"
                                   autocomplete="office_cost_of_renting">

                            @error('office_cost_of_renting')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="office_deposit">{{__('Deposit')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="office_deposit"
                                   type="number" step="50"
                                   class="form-control @error('office_deposit') is-invalid @enderror"
                                   name="office_deposit"
                                   value="0">
                            @error('office_deposit')
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
                        <label for="office_image" class="col-mod-4 col-form-label"><h2>{{__('Image')}}</h2></label>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="office_image" name="office_image" multiple>
                            @error('office_image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary align-bottom">{{__('Submit your property')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection

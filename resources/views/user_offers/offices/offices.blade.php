@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <h1>Publish your property</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <form action="/myprofile/items/office" enctype="multipart/form-data" method="POST" id="name_of_the_city">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Location</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <div class="col-xs-12 col-md-4 col-xl-4">
                            <label for="name_of_the_city">City</label>
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
                        <label for="street">Street</label>
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
{{--                    <div class="form">--}}
{{--                        <div class="col-xs-12 col-md-4 col-xl-4">--}}
{{--                            <label for="type_of_property">Property</label>--}}
{{--                            <div class="form-group" style="width: 300px">--}}
{{--                                <select class="property" name="type_of_property" form="type_of_property" id="type_of_property"  style="width: 150px">--}}
{{--                                    <option value="Apartment">Apartment</option>--}}
{{--                                    <option value="Penthouse">Penthouse</option>--}}
{{--                                    <option value="Office">Office</option>--}}
{{--                                    <option value="Villa">Villa</option>--}}
{{--                                    <option value="Apartment block">Apartment block</option>--}}
{{--                                    <option value="Bungalow">Bungalow</option>--}}
{{--                                    <option value="Restaurant">Restaurant</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Details</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="square_meter">Square meter</label>
                        <div class="form-group" style="width: 100px">
                            <input id="square_meter"
                                   type="number" step="1"
                                   class="form-control @error('square_meter') is-invalid @enderror"
                                   name="square_meter"
                                   value="{{ old('square_meter') }}"
                                   autocomplete="">
                            @error('square_meter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="building_floor">Block of</label>
                        <div class="form-group" style="width: 100px">
                            <input id="building_floor"
                                   type="number" step="1"
                                   min="0" max="20"
                                   class="form-control @error('building_floor') is-invalid @enderror"
                                   name="building_floor"
                                   value="{{ old('building_floor') }}"
                                   autocomplete="">

                            @error('building_floor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="floor">Floor</label>
                        <div class="form-group" style="width: 100px">
                            <input id="floor"
                                   type="number"
                                   class="form-control @error('floor') is-invalid @enderror"
                                   name="floor"
                                   value="{{ old('floor') }}"
                                   autocomplete="0">
                            @error('floor')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="furniture" class="col-md-4 col-form-label text-md-left">Furniture</label>
                        <div class="form-group">
                            <select id="furniture" name="furniture" class="form-control">
                                <option value="Furnished">Furnished</option>
                                <option value="Half-furnished">Half-furnished</option>
                                <option value="No furnished">No furnished</option>
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
                            Details of the property
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="bathroom">Bathroom</label>
                        <div class="form-group" style="width: 100px">
                            <input id="bathroom"
                                   type="number" step="1"
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
                        <label for="bedroom">Bedroom</label>
                        <div class="form-group" style="width: 100px">
                            <input id="bedroom"
                                   type="number" step="1"
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
                        <label for="dining_room">Dining-Room</label>
                        <div class="form-group" style="width: 100px">
                            <input id="dining_room"
                                   type="number" step="1"
                                   class="form-control @error('dining_room') is-invalid @enderror"
                                   name="dining_room"
                                   value="{{ old('dining_room') }}"
                                   autocomplete="dining_room">

                            @error('dining_room')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="kitchen">Kitchen</label>
                        <div class="form-group" style="width: 100px">
                            <input id="kitchen"
                                   type="number" step="1"
                                   class="form-control @error('kitchen') is-invalid @enderror"
                                   name="kitchen"
                                   value="{{ old('kitchen') }}"
                                   autocomplete="kitchen">

                            @error('kitchen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="living_room">Living room</label>
                        <div class="form-group" style="width: 100px">
                            <input id="living_room"
                                   type="number" step="1"
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
                        <label for="toilet">Toilet</label>
                        <div class="form-group" style="width: 100px">
                            <input id="toilet"
                                   type="number" step="1"
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
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="garage">Garage</label>
                        <div class="form-group" style="width: 100px">
                            <input type='radio'
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
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Extras</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="lift">Lift</label>
                            <input type='radio' id="lift" name="lift" value="1" autocomplete="0">
                            @error('lift')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group" style="width: 100px">
                        <label for="ac">A/C</label>
                        <input type='radio' id="ac" name="ac" value="1">
                        @error('ac')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group" style="width: 100px">
                        <label for="washing_machine">Washing machine</label>
                        <input type='radio' id="washing_machine" name="washing_machine" value="1" autocomplete="0">
                        @error('washing_machine')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group" style="width: 100px">
                        <label for="sea_view">Sea view</label>
                        <input type='radio' id="washing_machine" name="sea_view" value="1" autocomplete="0">
                        @error('sea_view')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group" style="width: 100px">
                        <label for="heating">Heating</label>
                        <input type='radio' id="washing_machine" name="heating" value="1" autocomplete="0">
                        @error('heating')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Payments</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="office_cost_of_renting">Cost/Month</label>
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
                        <label for="office_deposit">Deposit</label>
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
                        <label for="office_image" class="col-mod-4 col-form-label"><h2>Image</h2></label>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="office_image" name="office_image" multiple>
                            @error('office_image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary float-right">Submit your property</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

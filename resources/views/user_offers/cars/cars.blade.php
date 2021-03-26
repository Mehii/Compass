@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <h1>{{__('Publish your vehicle')}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <form action="/en/myprofile/items/car" enctype="multipart/form-data" method="POST" id="name_of_the_city">
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
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            {{__('Details of the vehicle')}}
                        </h2>
                    </div>
                </div>
                <div class="row">
{{--                        <div class="col-xs-12 col-md-4 col-xl-4">--}}
{{--                            <label for="type_of_it">City</label>--}}
{{--                            <div class="form-group" style="width: 300px">--}}
{{--                                <select class="car_type" name="type_of_it" form="type_of_it" id="type_of_it"  style="width: 150px">--}}
{{--                                    <option value="Big">Big</option>--}}
{{--                                    <option value="Small">Small</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="type_of_it">{{__('Type')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="type_of_it"
                                   type="text"
                                   class="form-control @error('type_of_it') is-invalid @enderror"
                                   name="type_of_it"
                                   value="{{ old('type_of_it') }}"
                                   autocomplete="">
                            @error('type_of_it')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="car_manufacturer">{{__('Vehicle manufacturer')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="car_manufacturer"
                                   type="text"
                                   class="form-control @error('car_manufacturer') is-invalid @enderror"
                                   name="car_manufacturer"
                                   value="{{ old('car_manufacturer') }}"
                                   autocomplete="">
                            @error('car_manufacturer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="type_of_gearbox">{{__('Gearbox')}}</label>
                        <div class="form-group">
                            <select id="type_of_gearbox" name="type_of_gearbox" >
                                <option value="Automatic">{{__('Automatic')}}</option>
                                <option value="Not_automatic">{{__('Not automatic')}}</option>
                            </select>
                            @error('type_of_gearbox')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="colour_of_car">{{__('Colour of the vehicle')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="colour_of_car"
                                   type="text"
                                   class="form-control @error('colour_of_car') is-invalid @enderror"
                                   name="colour_of_car"
                                   value="{{ old('colour_of_car')}}"
                                   autocomplete="">

                            @error('colour_of_car')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="number_of_doors">{{__('Number of doors')}}</label>
                        <div class="form-group" style="width: 100px">
                            <select id="number_of_doors" name="number_of_doors" class="form-control">
                                <option value="3">3</option>
                                <option value="5">5</option>
                            </select>
                            @error('number_of_doors')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="automatic_windows">{{__('Automatic windows')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input type='radio'
                                   id="automatic_windows"
                                   name="automatic_windows"
                                   value="1"
                                   autocomplete="">
                            @error('automatic_windows')
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

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="alarm">{{__('Alarm')}}</label>
                            <input type='radio'
                                   id="alarm"
                                   name="alarm"
                                   value="1"
                                   autocomplete="">
                            @error('alarm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="bluetooth">{{__('Bluetooth')}}</label>
                            <input type='radio'
                                   id="bluetooth"
                                   name="bluetooth"
                                   value="1"
                                   autocomplete="">
                            @error('bluetooth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="dashcam">{{__('Dashcam')}}</label>
                            <input type='radio'
                                   id="dashcam"
                                   name="dashcam"
                                   value="1"
                                   autocomplete="">
                            @error('dashcam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="back_radar">{{__('Backwards radar')}}</label>
                            <input type='radio'
                                   id="back_radar"
                                   name="back_radar" value="1"
                                   autocomplete="">
                            @error('back_radar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="air_condition">{{__('A/C')}}</label>
                            <input type='radio'
                                   id="air_condition"
                                   name="air_condition" value="1"
                                   autocomplete="">
                            @error('air_condition')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="abs">{{__('ABS')}}</label>
                            <input type='radio'
                                   id="abs"
                                   name="abs"
                                   value="1"
                                   autocomplete="">
                            @error('abs')
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
                        <label for="car_cost_of_renting">{{__('Cost/Week')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="car_cost_of_renting"
                                   type="number" step="50"
                                   class="form-control @error('car_cost_of_renting') is-invalid @enderror"
                                   name="car_cost_of_renting"
                                   value="{{old('car_cost_of_renting')}}">

                            @error('car_cost_of_renting')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="car_deposit">{{__('Deposit')}}</label>
                        <div class="form-group" style="width: 100px">
                            <input id="car_deposit"
                                   type="number" step="50"
                                   class="form-control @error('car_deposit') is-invalid @enderror"
                                   name="car_deposit"
                                   value="{{ old('car_deposit') }}">
                            @error('car_deposit')
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
                        <label for="car_image" class="col-mod-4 col-form-label"><h2>{{__('Image')}}</h2></label>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="car_image" name="car_image" multiple>
                            @error('car_image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary">{{__('Publish your vehicle')}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

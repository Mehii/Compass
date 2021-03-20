@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <h1>Edit your post</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <form action="/myprofile/items/car/{{$car->id}}" enctype="multipart/form-data" method="POST" id="name_of_the_city">
            @csrf
            @method('PATCH')

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Location</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <div class="col-xs-12 col-md-4 col-xl-4">
                            <label for="where_can_u_get_it">City</label>
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
{{--                    <div class="col-xs-12 col-md-4 col-xl-4">--}}
{{--                        <label for="street">Street</label>--}}
{{--                        <div class="form-group" style="width: 200px">--}}
{{--                            <input id="street"--}}
{{--                                   type="text"--}}
{{--                                   class="form-control @error('street') is-invalid @enderror"--}}
{{--                                   name="street"--}}
{{--                                   value="{{$office->street}}"--}}
{{--                                   autocomplete="">--}}
{{--                            @error('street')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                            @enderror--}}
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
                        <label for="car_manufacturer">Car manufacturer</label>
                        <div class="form-group" style="width: 100px">
                            <input id="car_manufacturer"
                                   type="text"
                                   class="form-control @error('car_manufacturer') is-invalid @enderror"
                                   name="car_manufacturer"
                                   value="{{$car->car_manufacturer}}"
                                   autocomplete="">
                            @error('car_manufacturer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="type_of_gearbox" class="col-md-4 col-form-label text-md-left">Gearbox</label>
                        <div class="form-group">
                            <select id="type_of_gearbox" name="gearbox" class="form-control">
                                <option value="Automatic">Furnished</option>
                                <option value="Not automatic">Half-furnished</option>
                            </select>
                            @error('type_of_gearbox')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="abs">ABS</label>
                        <div class="form-group" style="width: 100px">
                            <input type='radio'
                                   id="abs"
                                   name="abs" value="1"
                                   autocomplete="0">
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
                        <h2>
                            Details of the car
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="colour_of_car">Colour of the car</label>
                        <div class="form-group" style="width: 100px">
                            <input id="colour_of_car"
                                   type="text" step="1"
                                   class="form-control @error('colour_of_car') is-invalid @enderror"
                                   name="colour_of_car"
                                   value="{{ $car->colour_of_car}}"
                                   autocomplete="colour_of_car">

                            @error('colour_of_car')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="number_of_doors" class="col-md-4 col-form-label text-md-left">Number of doors</label>
                        <div class="form-group">
                            <select id="number_of_doors" name="doors" class="form-control">
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
                        <label for="automatic_windows">Automatic_windows</label>
                        <div class="form-group" style="width: 100px">
                            <input type='radio'
                                   id="automatic_windows"
                                   name="automatic_windows"
                                   value="1"
                                   autocomplete="0">
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
                        Extras
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="alarm">Alarm</label>
                            <input type='radio'
                                   id="alarm"
                                   name="alarm"
                                   value="1"
                                   autocomplete="0">
                            @error('alarm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="bluetooth">Bluetooth</label>
                            <input type='radio' id="bluetooth" name="bluetooth" value="1" autocomplete="0">
                            @error('bluetooth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="dashcam">Dashcam</label>
                            <input type='radio' id="dashcam" name="dashcam" value="1" autocomplete="0">
                            @error('dashcam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <div class="form-group" style="width: 100px">
                            <label for="back_radar">Backwards radar</label>
                            <input type='radio'
                                   id="back_radar"
                                   name="back_radar" value="1"
                                   autocomplete="0">
                            @error('back_radar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="air_condition">A/C</label>
                        <div class="form-group" style="width: 100px">
                            <input type='radio'
                                   id="air_condition"
                                   name="air_condition" value="1"
                                   autocomplete="0">
                            @error('air_condition')
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
                        <h2>Payments</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="car_cost_of_renting">Cost/Month</label>
                        <div class="form-group" style="width: 100px">
                            <input id="car_cost_of_renting"
                                   type="number" step="50"
                                   class="form-control @error('car_cost_of_renting') is-invalid @enderror"
                                   name="office_cost_of_renting"
                                   value="{{$car->car_cost_of_renting}}"
                                   autocomplete="office_cost_of_renting">

                            @error('car_cost_of_renting')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-xl-2">
                        <label for="car_deposit">Deposit</label>
                        <div class="form-group" style="width: 100px">
                            <input id="car_deposit"
                                   type="number" step="50"
                                   class="form-control @error('car_deposit') is-invalid @enderror"
                                   name="car_deposit"
                                   value="{{$car->car_deposit}}">
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
                    <div class="col-md-6">
                        <label for="car_image" class="col-mod-4 col-form-label"><h2>Image</h2></label>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="car_image" name="car_image" multiple>
                            @error('car_image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary float-right">Edit your property details</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

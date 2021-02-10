@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/myprofile/items/car" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <h1></h1>
                <div class="col-8 offset-2">

                    <div class="row"><h2>Details of the Car</h2></div><!-- select2 -->
                    <div class="form-group row">
                        <label for="where_can_u_get_it" class="col-md-4 col-form-label text-md-left">Shop</label>
                        <input id="where_can_u_get_it"
                               type="text"
                               class="form-control @error('where_can_u_get_it') is-invalid @enderror"
                               name="where_can_u_get_it"
                               value="{{ old('where_can_u_get_it') }}"
                               autocomplete="Valletta" autofocus>

                        @error('where_can_u_get_it')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="colour_of_car" class="col-md-4 col-form-label text-md-left">Colour</label>
                        <input id="colour_of_car"
                               type="text"
                               class="form-control @error('colour_of_car') is-invalid @enderror"
                               name="colour_of_car"
                               value="{{ old('colour_of_car') }}">

                        @error('colour_of_car')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="number_of_doors" class="col-md-4 col-form-label text-md-left">Number of doors</label>
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

                    <div class="form-group row">
                        <label for="automatic_windows" class="col-md-4 col-form-label text-md-left">Automatic windows</label>
                        <select id="automatic_windows" name="automatic_windows" class="form-control">
                            <option value="1">Automatic</option>
                            <option value="0">Not-automatic</option>
                        </select>

                        @error('automatic_windows')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="car_manufacturer" class="col-md-4 col-form-label text-md-left">Manufacturer</label>
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

                    <div class="form-group row">
                        <label for="type_of_gearbox" class="col-md-4 col-form-label text-md-left">Type of the gearbox</label>
                        <select id="type_of_gearbox" name="type_of_gearbox" class="form-control">
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                        </select>

                        @error('type_of_gearbox')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="air_condition" class="col-md-4 col-form-label text-md-left">Air condition</label>
                        <select id="air_condition" name="air_condition" class="form-control">
                            <option value="1">It has</option>
                            <option value="0">Dosnt has</option>
                        </select>

                        @error('air_condition')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="abs" class="col-md-4 col-form-label text-md-left">ABS</label>
                        <select id="abs" name="abs" class="form-control">
                            <option value="1">It has</option>
                            <option value="0">Dosnt has</option>
                        </select>

                        @error('abs')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="car_cost_of_renting" class="col-md-4 col-form-label text-md-left">Cost</label>
                        <input id="car_cost_of_renting"
                               type="number" step="1"
                               class="form-control @error('car_cost_of_renting') is-invalid @enderror"
                               name="car_cost_of_renting"
                               value="{{ old('car_cost_of_renting') }}"
                               autocomplete="car_cost_of_renting">

                        @error('car_cost_of_renting')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="car_deposit" class="col-md-4 col-form-label text-md-left">Deposit</label>
                        <input id="car_deposit"
                               type="number" step="1"
                               class="form-control @error('car_deposit') is-invalid @enderror"
                               name="car_deposit"
                               value="{{ old('car_deposit') }}">

                        @error('car_deposit')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="car_image" class="col-mod-4 col-form-label">Image</label>
                        <input type="file" class="form-control-file" id="car_image" name="car_image">

                        @error('car_image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Submit your Car</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

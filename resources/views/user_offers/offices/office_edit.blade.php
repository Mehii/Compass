@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/myprofile/items/office/{{$office->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-md-6 offset-2">
                    <div class="row"><h2>Details of the office</h2></div>
                    <div class="form-group row">
                        <label for="name_of_the_city" class="col-md-4 col-form-label text-md-left">City</label>
                        <input id="name_of_the_city"
                               type="text"
                               class="form-control @error('name_of_the_city') is-invalid @enderror"
                               name="name_of_the_city"
                               value="{{$office->name_of_the_city}}"
                               autocomplete="Valletta" autofocus>

                        @error('name_of_the_city')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="furniture" class="col-md-4 col-form-label text-md-left">Furniture</label>
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
                    <div class="form-group row">
                        <label for="building_floor" class="col-md-4 col-form-label text-md-left">Building floor</label>
                        <input id="building_floor"
                               type="number"
                               class="form-control @error('building_floor') is-invalid @enderror"
                               name="building_floor"
                               value="{{$office->building_floor}}"
                               autocomplete="">

                        @error('building_floor')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="floor" class="col-md-4 col-form-label text-md-left">Floor</label>
                        <input id="floor"
                               type="number"
                               class="form-control @error('floor') is-invalid @enderror"
                               name="floor"
                               value="{{$office->floor}}"
                               autocomplete="0">

                        @error('floor')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="number_of_rooms" class="col-md-4 col-form-label text-md-left">Number of rooms</label>
                        <input id="number_of_rooms"
                               type="number"
                               class="form-control @error('number_of_rooms') is-invalid @enderror"
                               name="number_of_rooms"
                               value="{{$office->number_of_rooms}}"
                               autocomplete="">

                        @error('number_of_rooms')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="square_meter" class="col-md-4 col-form-label text-md-left">Square meters</label>
                        <input id="square_meter"
                               type="number" step="0.1"
                               class="form-control @error('square_meter') is-invalid @enderror"
                               name="square_meter"
                               value="{{$office->square_meter}}"
                               autocomplete="">

                        @error('square_meter')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="office_cost_of_renting" class="col-md-4 col-form-label text-md-left">Cost</label>
                        <input id="office_cost_of_renting"
                               type="number" step="1"
                               class="form-control @error('office_cost_of_renting') is-invalid @enderror"
                               name="office_cost_of_renting"
                               value="{{$office->office_cost_of_renting}}"
                               autocomplete="office_cost_of_renting">

                        @error('office_cost_of_renting')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="office_deposit" class="col-md-4 col-form-label text-md-left">Deposit</label>
                        <input id="office_deposit"
                               type="number" step="1"
                               class="form-control @error('office_deposit') is-invalid @enderror"
                               name="office_deposit"
                               value="{{$office->office_deposit}}">

                        @error('office_deposit')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="office_image" class="col-mod-4 col-form-label">Image</label>
                        <input type="file" class="form-control-file" id="office_image" name="office_image">

                        @error('office_image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary">Save the changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

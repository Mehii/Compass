@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/myprofile/items/office" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 offset-2">
                    <div class="row"><h2>Details of the office</h2></div>
                    <div class="form-group row">
                        <label for="name_of_the_city" class="col-md-4 col-form-label text-md-left">City</label>
                        <input id="name_of_the_city"
                               type="text"
                               class="form-control @error('name_of_the_city') is-invalid @enderror"
                               name="name_of_the_city"
                               value="{{ old('name_of_the_city') }}"
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
                        <label for="Building_floors" class="col-md-4 col-form-label text-md-left">Building floors</label>
                        <input id="Building_floors"
                               type="number"
                               class="form-control @error('Building_floors') is-invalid @enderror"
                               name="Building_floors"
                               value="{{ old('Building_floors') }}"
                               autocomplete="">

                        @error('Building_floors')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="Floor" class="col-md-4 col-form-label text-md-left">Floor</label>
                        <input id="Floor"
                               type="number"
                               class="form-control @error('Floor') is-invalid @enderror"
                               name="Floor"
                               value="{{ old('Floor') }}"
                               autocomplete="0">

                        @error('Floor')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="Number_of_rooms" class="col-md-4 col-form-label text-md-left">Number of rooms</label>
                        <input id="Number_of_rooms"
                               type="number"
                               class="form-control @error('Number_of_rooms') is-invalid @enderror"
                               name="Number_of_rooms"
                               value="{{ old('Number_of_rooms') }}"
                               autocomplete="">

                        @error('Number_of_rooms')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="Square_meters" class="col-md-4 col-form-label text-md-left">Square meters</label>
                        <input id="Square_meters"
                               type="number" step="0.1"
                               class="form-control @error('Square_meters') is-invalid @enderror"
                               name="Square_meters"
                               value="{{ old('Square_meters') }}"
                               autocomplete="">

                        @error('Square_meters')
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
                               value="{{ old('office_cost_of_renting') }}"
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
                               value="{{ old('office_deposit') }}">

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
                        <button class="btn btn-primary">Submit your Office</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

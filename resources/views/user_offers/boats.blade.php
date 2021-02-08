@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/myprofile/items/boat" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row"><h2>Details of the office</h2></div>
                    <div class="form-group row">
                        <label for="Location" class="col-md-4 col-form-label text-md-left">Location</label>
                        <input id="Location"
                               type="text"
                               class="form-control @error('Location') is-invalid @enderror"
                               name="Location"
                               value="{{ old('Location') }}"
                               autocomplete="Valletta" autofocus>

                        @error('Location')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="Furniture" class="col-md-4 col-form-label text-md-left">Furniture</label>
                        <select id="Furniture" name="Furniture" class="form-control">
                            <option value="Furnished">Furnished</option>
                            <option value="Half_furnished">Half-furnished</option>
                            <option value="No_furnished">No furnished</option>
                        </select>

                        @error('Furniture')
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
                        <label for="Cost" class="col-md-4 col-form-label text-md-left">Cost</label>
                        <input id="Cost"
                               type="number" step="1"
                               class="form-control @error('Cost') is-invalid @enderror"
                               name="Cost"
                               value="{{ old('Cost') }}"
                               autocomplete="Cost">

                        @error('Cost')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-mod-4 col-form-label">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary ">Submit your Office</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection



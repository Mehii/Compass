@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/myprofile/items/boat/{{$boat->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row"><h2>Details of the office</h2></div>
                    <div class="form-group row">
                        <label for="where_can_u_get_it" class="col-md-4 col-form-label text-md-left">Location</label>
                        <input id="where_can_u_get_it"
                               type="text"
                               class="form-control @error('where_can_u_get_it') is-invalid @enderror"
                               name="where_can_u_get_it"
                               value="{{ $boat->where_can_u_get_it }}"
                               autocomplete="Valletta harbour" autofocus>

                        @error('where_can_u_get_it')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="boat_type" class="col-md-4 col-form-label text-md-left">type_of_boat</label>
                        <select id="boat_type" name="boat_type" class="form-control">
                            <option value="type1">type1</option>
                            <option value="type2">type2</option>
                            <option value="type3">type3</option>
                        </select>

                        @error('boat_type')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="colour_of_boat" class="col-md-4 col-form-label text-md-left">colour_of_boat</label>
                        <input id="colour_of_boat"
                               type="text"
                               class="form-control @error('colour_of_boat') is-invalid @enderror"
                               name="colour_of_boat"
                               value="{{$boat->colour_of_boat }}"
                               autocomplete="">

                        @error('colour_of_boat')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="boat_manufacturer" class="col-md-4 col-form-label text-md-left">boat_manufacturer</label>
                        <input id="boat_manufacturer"
                               type="text"
                               class="form-control @error('Floor') is-invalid @enderror"
                               name="boat_manufacturer"
                               value="{{$boat->boat_manufacturer }}"
                               autocomplete="0">

                        @error('boat_manufacturer')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="air_condition" class="col-md-4 col-form-label text-md-left">air_condition</label>
                        <input id="air_condition"
                               type="text"
                               class="form-control @error('air_condition') is-invalid @enderror"
                               name="air_condition"
                               value="{{$boat->air_condition}}"
                               autocomplete="">

                        @error('air_condition')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="boat_cost_of_renting" class="col-md-4 col-form-label text-md-left">boat_cost_of_renting</label>
                        <input id="boat_cost_of_renting"
                               type="number" step="0.1"
                               class="form-control @error('boat_cost_of_renting') is-invalid @enderror"
                               name="boat_cost_of_renting"
                               value="{{$boat->boat_cost_of_renting }}"
                               autocomplete="">

                        @error('boat_cost_of_renting')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="boat_deposit" class="col-md-4 col-form-label text-md-left">boat_deposit</label>
                        <input id="boat_deposit"
                               type="number" step="1"
                               class="form-control @error('Cost') is-invalid @enderror"
                               name="boat_deposit"
                               value="{{$boat->boat_deposit }}"
                               autocomplete="Cost">

                        @error('boat_deposit')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="boat_image" class="col-mod-4 col-form-label">Image</label>
                        <input type="file" class="form-control-file" id="boat_image" name="boat_image">

                        @error('boat_image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary ">Edit your boat</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection



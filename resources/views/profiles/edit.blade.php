@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/myprofile/{{$user->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row"><h2>Edit Profile</h2></div>
                    <div class="form-group row">
                        <label for="introduction" class="col-md-4 col-form-label text-md-left">Introduction</label>
                        <input id="introduction"
                               type="text"
                               class="form-control @error('introduction') is-invalid @enderror"
                               name="introduction"
                               value="{{$user->profile->introduction ??  old('introduction')}}"
                               autocomplete="introduction" autofocus>

                        @error('introduction')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label text-md-left">Any link where we can find u</label>
                        <input id="url"
                               type="text"
                               class="form-control @error('url') is-invalid @enderror"
                               name="url"
                               value="{{$user->profile->url ?? old('url') }}"
                               autocomplete="url" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-mod-4 col-form-label">Profile Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary ">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

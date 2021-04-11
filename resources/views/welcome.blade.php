@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row main">
                <div class="col-xl-12">
                    <h2>{{__('Welcome in my page')}}</h2>
                    <h4>{{__('Please search for sth')}}</h4>
                        <form class="d-flex" action=""  method="GET">
                            <input class="form-control me-2" name="query" id="query" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">{{__('Search')}}</button>
                        </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 pb-4">
                    ide a for
                </div>
            </div>
        </div>
    </div>

@endsection

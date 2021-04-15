@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="publish">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h1>{{__('Find what you looking for!')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('Content')}}</h2>
                </div>
                <div class="col-12">
                    <table id="customers">
                        <thead>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Posted boats')}}</th>
                            <th>{{__('Posted properties')}}</th>
                            <th>{{__('Posted cars')}}</th>
                            <th>{{__('Follow')}}</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}} </td>
                                    <td>{{$user->email}} </td>
                                    <td>{{$user->boats->count()}} </td>
                                    <td>{{$user->offices->count()}} </td>
                                    <td>{{$user->cars->count()}} </td>
                                    <td><a href="/en/myprofile/{{$user->id}}">{{__('Follow')}}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

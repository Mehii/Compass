<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoatsController extends Controller
{
    public function create()
    {
        return view('user_offers.boats');
    }
    public function store()
    {
        dd(\request()->all());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function create()
    {
        return view('user_offers.cars');
    }
}

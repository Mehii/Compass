<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficesController extends Controller
{
    public function create()
    {
        return view('user_offers.offices');
    }
}

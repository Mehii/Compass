<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficesController extends Controller
{
    public function create()
    {
        return view('user_offers.offices');
    }
    public function store()
    {
        #region Validating  form fields
        $data=request()->validate([
            'name_of_the_city'=>'required',
            'furniture'=>'required',
            'Building_floor'=>'required',
            'floor'=>'required',
            'square_meter'=>'required',
            'office_cost_of_renting'=>'required',
            'office_deposit'=>'required',
        ]);
        #endregion

        dd(request()->all());
    }
}

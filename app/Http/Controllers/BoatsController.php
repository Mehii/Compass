<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BoatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('user_offers.boats.boats');
    }
    public function store()
    {
        #region Validating  form fields
        $data=request()->validate([
            'where_can_u_get_it'=>'required',
            'boat_type'=>'required',
            'colour_of_boat'=>'',
            'boat_manufacturer'=>'required',
            'air_condition'=>'required',
            'boat_cost_of_renting'=>'required',
            'boat_deposit'=>'required',
            'boat_image'=>['required','image'],

        ]);
        #endregion

        #region image resize
        $boat_ImagePath = request('boat_image')->store('uploads/boats', 'public');
        $image = Image::make(public_path("storage/{$boat_ImagePath}"))->fit(1200, 1800);
        $image->save();
        #endregion

        #region storing
        auth()->user()->boats()->create([
            'where_can_u_get_it'=>$data['where_can_u_get_it'],
            'boat_type'=>$data['boat_type'],
            'colour_of_boat'=>$data['colour_of_boat'],
            'boat_manufacturer'=>$data['boat_manufacturer'],
            'air_condition'=>$data['air_condition'],
            'boat_cost_of_renting'=>$data['boat_cost_of_renting'],
            'boat_deposit'=>$data['boat_deposit'],
            'boat_image'=>$boat_ImagePath,
        ]);
        #endregion

        return redirect('/myprofile/' . auth()->user()->id);
    }

    public function show(Boat $boat)
    {
        return view('user_offers.boats.boat_show',compact('boat'));
    }
    public function edit(Boat $boat)
    {
        return view('user_offers.boats.boats_edit',compact('boat'));
    }

    public function update(int $boat)
    {
        $item=Boat::findOrFail($boat);

        $data=request()->validate([
            'where_can_u_get_it'=>'required',
            'boat_type'=>'required',
            'colour_of_boat'=>'',
            'boat_manufacturer'=>'required',
            'air_condition'=>'required',
            'boat_cost_of_renting'=>'required',
            'boat_deposit'=>'required',
            'boat_image'=>['','image'],
        ]);


        if (request('image'))
        {
            $boat_picture = request('image')->store('uploads/boats', 'public');
            $image = Image::make(public_path("storage/{$boat_picture}"))->fit(1000, 1000);
            $image->save();
            $image_array=['image'=>$boat_picture];

        }
        /*auth()->user()->cars->update(array_merge(

            $data,
            $image_array ?? [],
        ));*/

        $item->update($data);
        return redirect('/myprofile/items/boat/'.$item->id);//>with('success','Your Post has been updated');;
    }

    public function destroy(int $boat)
    {
        $item=Boat::findOrFail($boat);
        $item->destroy($item);
        $item->delete();
        return redirect('/myprofile/'.$item->user_id);
    }
}


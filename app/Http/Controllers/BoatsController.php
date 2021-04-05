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
    public function store(string $language)
    {
        #region Validating  form fields
        $data=request()->validate([
            'name_of_the_city'=>'required',
            'street'=>'required',

            'boat_type'=>'required',
            'boat_manufacturer'=>'required',
            'colour_of_boat'=>'',

            'rooms'=>'required',
            'survivability'=>'',

            'ac'=>'',
            'heating'=>'',
            'gps'=>'',
            'washing_machine'=>'',

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
            'name_of_the_city'=>$data['name_of_the_city'],
            'street'=>$data['street'],

            'boat_type'=>$data['boat_type'],
            'boat_manufacturer'=>$data['boat_manufacturer'],
            'colour_of_boat'=>$data['colour_of_boat'],

            'rooms'=>$data['rooms'],
            'survivability'=>$data['survivability'],

            'ac'=>$data['ac'],
            'heating'=>$data['heating'],
            'gps'=>$data['gps'],
            'washing_machine'=>$data['washing_machine'],
//
            'boat_cost_of_renting'=>$data['boat_cost_of_renting'],
            'boat_deposit'=>$data['boat_deposit'],
            'boat_image'=>$boat_ImagePath,
        ]);

        #endregion

        return redirect('/'.$language.'/myprofile/' . auth()->user()->id);

    }

    public function show(string $language,Boat $boat)
    {
        return view('user_offers.boats.boat_show',compact('boat'));
    }
    public function edit(string $language,Boat $boat)
    {
        $this->authorize('update',$boat);

        return view('user_offers.boats.boats_edit',compact('boat'));
    }

    public function update(string $language,int $boat)
    {
        $item=Boat::findOrFail($boat);

        $data=request()->validate([
            'name_of_the_city'=>'required',
            'street'=>'street',

            'boat_type'=>'required',
            'boat_manufacturer'=>'required',
            'colour_of_boat'=>'',

            'rooms'=>'required',
            'survivability'=>'',

            'ac'=>'',
            'heating'=>'',
            'gps'=>'',
            'washing_machine'=>'',

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

        $item->update($data);
        return redirect('/'.$language.'/myprofile/items/boat/'.$item->id);
    }

    public function destroy(string $language,int $boat)
    {
        $item=Boat::findOrFail($boat);
        $item->destroy($item);
        $item->delete();
        return redirect('/'.$language.'/myprofile/'.$item->user_id);
    }
}


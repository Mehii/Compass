<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Office;
use Intervention\Image\Facades\Image;

class OfficesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('user_offers.offices.offices');
    }
    public function store()
    {
        #region Validating  form fields
        $data=request()->validate([
            'name_of_the_city'=>'required',
            'furniture'=>'required',
            'building_floor'=>'',
            'floor'=>'required',
            'number_of_rooms'=>'required',
            'square_meter'=>'required',
            'office_cost_of_renting'=>'required',
            'office_deposit'=>'required',
            'office_image'=>['required','image'],
        ]);
        #endregion

                #region image resize
                $Office_ImagePath = request('office_image')->store('uploads/offices', 'public');
                $image = Image::make(public_path("storage/{$Office_ImagePath}"))->fit(1200, 1800);
                $image->save();
                #endregion

                #region storing
                auth()->user()->offices()->create([
                    'name_of_the_city'=>$data['name_of_the_city'],
                    'furniture'=>$data['furniture'],
                    'building_floor'=>$data['building_floor'],
                    'floor'=>$data['floor'],
                    'number_of_rooms'=>$data['number_of_rooms'],
                    'square_meter'=>$data['square_meter'],
                    'office_cost_of_renting'=>$data['office_cost_of_renting'],
                    'office_deposit'=>$data['office_deposit'],
                    'office_image'=>$Office_ImagePath,
                ]);
                #endregion

       return redirect('/myprofile/' . auth()->user()->id);
    }
    /* public function show(int $id)
     {
         $office= Office::findOrFail($id);
         //dd($user->cars);
         return view('user_offers.office_show',[
             'office'=>$office,
         ]);
    }*/
    public function show(Office $office)
    {
        return view('user_offers.offices.office_show',compact('office'));
    }

    public function edit(Office $office)
    {
        return view('user_offers.offices.office_edit',compact('office'));
    }

    public function update(int $office)
    {
        $item=Office::findOrFail($office);

        $data = request()->validate([
            'name_of_the_city' => 'required',
            'furniture' => 'required',
            'building_floor' => 'required',
            'floor' => 'required',
            'number_of_rooms' => 'required',
            'square_meter' => 'required',
            'office_cost_of_renting' => 'required',
            'office_deposit' => 'required',
            'office_image' => ['', 'image'],
        ]);
        if (request('image'))
        {
            $Office_picture = request('image')->store('uploads/offices', 'public');
            $image = Image::make(public_path("storage/{$Office_picture}"))->fit(1000, 1000);
            $image->save();
            $image_array=['image'=>$Office_picture];

        }
        /*auth()->user()->cars->update(array_merge(

            $data,
            $image_array ?? [],
        ));*/
        $item->update($data);
        return redirect('/myprofile/items/office/'.$item->id);//>with('success','Your Post has been updated');;
    }
    public function destroy(int $office)
    {
        $item=Office::findOrFail($office);
        $item->destroy($item);
        $item->delete();
        return redirect('/myprofile/'.$item->user_id);
    }

}

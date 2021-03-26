<?php

namespace App\Http\Controllers;

use App\Models\Office;
use http\Client\Request;
use Intervention\Image\Facades\Image;

class OfficesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function index()
//    {
//
//    }


    public function create()
    {
        return view('user_offers.offices.offices');
    }

    public function store()
    {
        #region Validating  form fields
        $data=request()->validate([
            'name_of_the_city'=>'required',
            'street'=>'required',
//          'type_of_property'=>'required',

            'square_meter'=>'required',
            'building_floor'=>'',
            'floor'=>'required',
            'furniture'=>'required',

            'bathroom'=>'required',
            'bedroom'=>'required',
            'dining_room'=>'required',
            'kitchen'=>'required',
            'living_room'=>'required',
            'toilet'=>'required',
            'garage'=>'required',


            'lift'=>'',
            'ac'=>'',
            'washing_machine'=>'',
            'sea_view'=>'',
            'heating'=>'',

            'office_cost_of_renting'=>'required',
            'office_deposit'=>'required',
            'office_image'=>['required','image'],
        ]);
        #endregion

        #region image resize
        $Office_ImagePath = request('office_image')->store('uploads/offices', 'public');
        $image = Image::make(public_path("storage/{$Office_ImagePath}"));
        $image->save();
        #endregion

        #region storing
        auth()->user()->offices()->create([
            'name_of_the_city'=>$data['name_of_the_city'],
            'street'=>$data['street'],
//          'type_of_property'=>$data['type_of_property'],

            'square_meter'=>$data['square_meter'],
            'building_floor'=>$data['building_floor'],
            'floor'=>$data['floor'],
            'furniture'=>$data['furniture'],

            'bathroom'=>$data['bathroom'],
            'bedroom'=>$data['bedroom'],
            'dining_room'=>$data['dining_room'],
            'kitchen'=>$data['kitchen'],
            'living_room'=>$data['living_room'],
            'toilet'=>$data['toilet'],
            'garage'=>$data['garage'],

            'lift'=>$data['lift'],
            'ac'=>$data['ac'],
            'washing_machine'=>$data['washing_machine'],
            'sea_view'=>$data['sea_view'],
            'heating'=>$data['heating'],

            'office_cost_of_renting'=>$data['office_cost_of_renting'],
            'office_deposit'=>$data['office_deposit'],
            'office_image'=>$Office_ImagePath,
        ]);
        #endregion

        return redirect('/'.$language.'/myprofile/' . auth()->user()->id);
    }
    /* public function show(int $id)
     {
         $office= Office::findOrFail($id);
         //dd($user->cars);
         return view('user_offers.office_show',[
             'office'=>$office,
         ]);
    }*/
    public function show(string $language,Office $office)
    {
        return view('user_offers.offices.office_show',compact('office'));
    }

    public function edit(string $language,Office $office)
    {
        $this->authorize('update',$office);

        return view('user_offers.offices.office_edit',compact('office'));
    }

    public function update(string $language,int $office)
    {

        $item=Office::findOrFail($office);

        $data = request()->validate([
            'name_of_the_city'=>'required',
            'street'=>'required',
//            'type_of_property'=>'required',

            'square_meter'=>'required',
            'building_floor'=>'',
            'floor'=>'required',
            'furniture'=>'required',

            'bathroom'=>'required',
            'bedroom'=>'required',
            'dining_room'=>'required',
            'kitchen'=>'required',
            'living_room'=>'required',
            'toilet'=>'required',
            'garage'=>'required',

            'lift'=>'',
            'ac'=>'',
            'washing_machine'=>'',
            'sea_view'=>'',
            'heating'=>'',

            'office_cost_of_renting' => 'required',
            'office_deposit' => 'required',
            'office_image' => ['', 'image'],
        ]);
        if (request('image'))
        {
            $Office_picture = request('image')->store('uploads/offices', 'public');
            $image = Image::make(public_path("storage/{$Office_picture}"));
            $image->save();
            $image_array=['image'=>$Office_picture];

        }
        $item->update($data);
        return redirect('/'.$language.'/myprofile/items/office/'.$item->id);//>with('success','Your Post has been updated');;
    }
    public function destroy(string $language,int $office)
    {
        $item=Office::findOrFail($office);
        $item->destroy($item);
        $item->delete();
        return redirect('/'.$language.'/myprofile/'.$item->user_id);
    }
}

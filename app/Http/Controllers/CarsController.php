<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Intervention\Image\Facades\Image;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {

        return view('user_offers.cars.cars');
    }
    public function store()
    {
        #region Validating form fields
        $data = request()->validate([
            'where_can_u_get_it' => 'required',
            'colour_of_car' => '',
            'number_of_doors' => 'required',
            'automatic_windows' => '',
            'car_manufacturer' => 'required',
            'type_of_gearbox' => '',
            'air_condition' => '',
            'abs' => 'required',
            'car_cost_of_renting' => 'required',
            'car_deposit' => 'required',
            'car_image' => ['required', 'image'],
        ]);

        #endregion

        // bejelentkezett user, aki rendelkezik postolási lehetőséggel tud createlni "postot"

        #region image resize
        $Car_ImagePath = request('car_image')->store('uploads/cars', 'public');
        $image = Image::make(public_path("storage/{$Car_ImagePath}"))->fit(1200, 1800);
        $image->save();
        #endregion

        #region storing
        auth()->user()->cars()->create([
            'where_can_u_get_it' => $data['where_can_u_get_it'],
            'colour_of_car' => $data['colour_of_car'],
            'number_of_doors' => $data['number_of_doors'],
            'automatic_windows' => $data['automatic_windows'],
            'car_manufacturer' => $data['car_manufacturer'],
            'type_of_gearbox' => $data['type_of_gearbox'],
            'air_condition' => $data['air_condition'],
            'abs' => $data['abs'],
            'car_cost_of_renting' => $data['car_cost_of_renting'],
            'car_deposit' => $data['car_deposit'],
            'car_image' => $Car_ImagePath,
        ]);
        return redirect('/myprofile/' . auth()->user()->id)->with('success','Car has been posted');
        #endregion

        //dd(request('car_image')->store('uploads/cars','public'));

    }

    /*public function show(int $id)
    {
        // lekérni az user_id-t
        $cars= Car::findOrFail($id);
        //dd($user->cars);
        return view('user_offers.cars_show',[
            'car'=>$cars,
        ]);
    }*/
    public function show(Car $car)
    {
        return view('user_offers.cars.cars_show',compact('car'));
    }
    public function edit(Car $car)
    {
        return view('user_offers.cars.cars_edit',compact('car'));
    }

    public function update(Car $car)
    {
        $item=Car::findOrFail($car);
        $data = request()->validate([
        'where_can_u_get_it' => 'required',
        'colour_of_car' => 'required',
        'number_of_doors' => 'required',
        'automatic_windows' => 'required',
        'car_manufacturer' => 'required',
        'type_of_gearbox' => 'required',
        'air_condition' => 'required',
        'abs' => 'required',
        'car_cost_of_renting' => 'required',
        'car_deposit' => 'required',
        'car_image' => ['', 'image'],
        ]);


        if (request('image'))
        {
            $Car_picture = request('image')->store('uploads/cars', 'public');
            $image = Image::make(public_path("storage/{$Car_picture}"))->fit(1000, 1000);
            $image->save();
            $image_array=['image'=>$Car_picture];

        }
        /*auth()->user()->cars->update(array_merge(

            $data,
            $image_array ?? [],
        ));*/

        $item->update($data);
        return redirect('/myprofile/items/car/'.$item->id);//>with('success','Your Post has been updated');;
    }

    public function destroy(Car $car)
    {
        $item=Car::findOrFail($car);
        $item->destroy($item);
        $item->delete();
        return redirect('/myprofile/'.$item->user_id);
    }
}

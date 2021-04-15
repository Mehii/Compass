<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Intervention\Image\Facades\Image;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_car(string $language){
        $follow=auth()->user()->following()->pluck('profiles.user_id');

        $car_post=Car::whereIn('user_id',$follow)->get();

        return view('follow/car_follow')->with('car_post',$car_post);
    }

    public function create()
    {
        return view('user_offers.cars.cars');
    }

    public function store()
    {
        #region Validating form fields
        $data = request()->validate([
            'name_of_the_city' => 'required',
            'type_of_it' => 'required',

            'car_manufacturer' => 'required',
            'type_of_gearbox' => '',
            'colour_of_car' => '',

            'number_of_doors' => 'required',
            'automatic_windows' => '',

            'alarm' => '',
            'bluetooth' => '',
            'dashcam' => '',
            'back_radar' => '',
            'air_condition' => '',
            'abs' => '',

            'car_cost_of_renting' => 'required',
            'car_deposit' => 'required',
            'car_image' => ['required', 'image'],
        ]);
        #endregion
        #region image resize
        $Car_ImagePath = request('car_image')->store('uploads/cars', 'public');
        $image = Image::make(public_path("storage/{$Car_ImagePath}"));
        $image->save();
        #endregion

        #region storing
        auth()->user()->cars()->create([
            'name_of_the_city' => $data['name_of_the_city'],
            'type_of_it' => $data['type_of_it'],

            'car_manufacturer' => $data['car_manufacturer'],
            'type_of_gearbox' => $data['type_of_gearbox'],
            'colour_of_car' => $data['colour_of_car'],

            'number_of_doors' => $data['number_of_doors'],
            'automatic_windows' => $data['automatic_windows'],
            'alarm' => $data['alarm'],
            'bluetooth' => $data['bluetooth'],
            'dashcam' => $data['dashcam'],

            'back_radar' => $data['back_radar'],
            'air_condition' => $data['air_condition'],
            'abs' => $data['abs'],

            'car_cost_of_renting' => $data['car_cost_of_renting'],
            'car_deposit' => $data['car_deposit'],
            'car_image' => $Car_ImagePath,
        ]);
        #endregion

        return redirect('/en/myprofile/' . auth()->user()->id);

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

    public function show(string $language,Car $car)
    {
        return view('user_offers.cars.cars_show',compact('car'));
    }

    public function edit(string $language,Car $car)
    {
        return view('user_offers.cars.cars_edit',compact('car'));
    }

    public function update(string $language,Car $car)
    {
        $item=Car::findOrFail($car);

        $data = request()->validate([
            'name_of_the_city' => 'required',
            'type_of_it' => 'required',

            'car_manufacturer' => 'required',
            'type_of_gearbox' => '',
            'colour_of_car' => '',

            'number_of_doors' => 'required',
            'automatic_windows' => '',

            'alarm' => '',
            'bluetooth' => '',
            'dashcam' => '',
            'back_radar' => '',
            'air_condition' => '',
            'abs' => '',

            'car_cost_of_renting' => 'required',
            'car_deposit' => 'required',
            'car_image' => ['', 'image'],

        ]);


        if (request('image'))
        {
            $Car_picture = request('image')->store('uploads/cars', 'public');
            $image = Image::make(public_path("storage/{$Car_picture}"));
            $image->save();
            $image_array=['image'=>$Car_picture];

        }
        /*auth()->user()->cars->update(array_merge(

            $data,
            $image_array ?? [],
        ));*/

        $item->update($data);

        return redirect('/'.$language.'/myprofile/items/car/'.$item->id);
    }

    public function destroy(string $language,int $car)
    {
        $item=Car::findOrFail($car);
        $item->destroy($item);
        $item->delete();
        return redirect('/'.$language.'/myprofile/'.$item->user_id);
    }
}

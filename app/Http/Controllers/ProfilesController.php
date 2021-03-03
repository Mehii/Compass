<?php

namespace App\Http\Controllers;

use App\Models\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        //$user=User::find($user);//Casual find, doesnt throw 404 not found exceptionTP
        //dd($user);
        //$user=User::findOrFail($user); //If user not existing throw an 404 exception lvl2
        return view('profiles.index', [
            'user'=>$user,
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);

        return view('profiles.edit',compact('user'));
    }
    public function update(User $user)
    {
        $this->authorize('update',$user->profile);

        $data=request()->validate([
            'introduction'=>'required',
            'url'=>'url',
            'image'=>'',
        ]);

        if (request('image'))
        {
            $Profile_picture = request('image')->store('uploads/profiles', 'public');
            $image = Image::make(public_path("storage/{$Profile_picture}"))->fit(1000, 1000);
            $image->save();

            $image_array=['image'=>$Profile_picture];
        }
        auth()->user()->profile->update(array_merge(
            $data,
            $image_array ?? [],
        ));

        return redirect('/myprofile/' . auth()->user()->id)->with('success','Your profile has been updated');
    }
}

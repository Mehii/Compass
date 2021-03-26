<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(string $language,User $user)
    {

        #region out of work
        //$user=User::find($user);//Casual find, doesnt throw 404 not found exceptionTP
        //dd($user);
        //$user=User::findOrFail($user); //If user not existing throw an 404 exception lvl2
        #endregion
        $follows= (auth()->user()) ? auth()->user()->following->contains($user->id):false;

        return view('profiles.index', compact('user','follows'));
    }

    public function edit(string $language,User $user)
    {
        $this->authorize('update',$user->profile);

        return view('profiles.edit',compact('user'));
    }
    public function update(string $language,User $user)
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
            $image = Image::make(public_path("storage/{$Profile_picture}"))->fit(800, 800);
            $image->save();

            $image_array=['image'=>$Profile_picture];
        }
        auth()->user()->profile->update(array_merge(
            $data,
            $image_array ?? [],
        ));

        return redirect('/'.$language.'/myprofile/' . auth()->user()->id);
    }
}

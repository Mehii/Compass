<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

        $data=\request()->validate([
            'introduction'=>'',
            'url'=>'url',
            'image'=>'image',
        ]);

        auth()->$user->profile->update($data);

        return redirect('/myprofile/' . auth()->user()->id);
    }
}

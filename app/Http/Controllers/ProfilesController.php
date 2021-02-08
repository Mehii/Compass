<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index(\App\Models\User $user)
    {
        //$user=User::find($user);//Casual find, doesnt throw 404 not found exceptionTP
        //dd($user);
        //$user=User::findOrFail($user); //If user not existing throw an 404 exception lvl2

        return view('profiles.index', [
            'user'=>$user,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(string $language,User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}

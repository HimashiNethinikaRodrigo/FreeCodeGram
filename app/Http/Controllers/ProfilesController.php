<?php

namespace App\Http\Controllers;


use App\Models\User;

class ProfilesController extends Controller
{
    public function show($user)
    {
        $user = User::findOrFail($user);

        return view('home',[
            'user'=> $user
        ]);
    }
}

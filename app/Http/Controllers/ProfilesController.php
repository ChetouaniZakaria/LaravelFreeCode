<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user_id)
    {
        $user = User::findOrFail($user_id); 
        // dd($user);
        return view('profiles.index', ['user'=> $user]);
    }

    public function edit(User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
        // return view('profiles.edit', compact('user'));
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'url',
            'image'=>''
        ]);

        // dd($data);

        auth()->user()->profile()->update($data);
         
        return redirect()->route('profile.show',$user->id);
    }
}

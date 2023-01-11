<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile');
    }

    public function update(Request $input){
        $input->validate([
            'nama' => 'required',
            'password_baru' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->name = $input->nama;
        $user->password = Hash::make($input->password_baru);
        $user->save();
        $input->session()->regenerate();
        return back();
    }
}

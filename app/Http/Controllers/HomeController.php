<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        $pengaduan = User::join('pengaduan', 'users.id', '=', 'pengaduan.users_id')
        ->get();
        return view('user.home', compact('pengaduan'));
    }
}

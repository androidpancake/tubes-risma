<?php

namespace App\Http\Controllers;

use App\Http\Requests\penemuanrequest;
use App\Models\Penemuan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\User;

class PenemuanController extends Controller
{
    public function index($id)
    {
        $pengaduan = Pengaduan::find($id);
        $data = Penemuan::with(['pengaduan'])->get();

        return view('penemuan.index', [
            // 'pengaduan' => $datapengaduan,
            'penemuan' => $data
        ]);
    }

    public function create($id)
    {
        $pengaduan = Pengaduan::find($id);
        // $penemuan = Penemuan::all();
        return view('penemuan.add', [
            'pengaduan' => $pengaduan
        ]);
    }

    public function store(penemuanrequest $request, $id)
    {

        $data = $request->all();

        $data['image'] = $request->file('image')->store(
            '/image', 'public'
        );

        $data = Pengaduan::find($id);

        // $data = Penemuan::create($data);
        $data->create($data);
        return redirect()->route('temukan.index');
    }
}

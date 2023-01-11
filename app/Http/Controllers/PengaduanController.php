<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mypengaduan(){
        // $pengaduans = DB::table('pengaduan')->where('users_id', Auth::id());
        $pengaduans = User::join('pengaduan', 'users.id', '=', 'pengaduan.users_id')
        ->where('users_id', Auth::id())
        ->get();
        return view('pengaduan.mypengaduan', compact('pengaduans'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::all();
        $pengaduans = User::join('pengaduan', 'users.id', '=', 'pengaduan.users_id')
        ->get();
        return view('pengaduan.daftar', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::join('pengaduan', 'users.id', '=', 'pengaduan.users_id')
        ->get();
        return view('pengaduan.buat', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'users_id'           => 'required',
            'image'             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jumlahBarang'      => 'required',
            'namaBarang'        => 'required',
            'lokasiTerakhir'    => 'required',
            'deskripsi'         => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());

        //create post
        Pengaduan::create([
            'users_id'       => $request->users_id,
            'image'          => $image->hashName(),
            'namaBarang'     => $request->namaBarang,
            'jumlahBarang'   => $request->jumlahBarang,
            'lokasiTerakhir' => $request->lokasiTerakhir,
            'kontak'         => $request->kontak,
            'deskripsi'      => $request->deskripsi
        ]);

        //redirect to index
        return redirect()->route('pengaduan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan, User $user)
    {
        // $pengaduan = Pengaduan::all();
        // $pengaduans = User::join('pengaduan', 'users.id', '=', 'pengaduan.users_id')->where('users_id', $pengaduan->users_id)->get();
        // $pengaduan = User::join('pengaduan', 'users.id', '=', 'pengaduan.users_id')->get();

        Pengaduan::join('users','users.id','=','pengaduan.users_id')
        ->where('users_id', $pengaduan->users_id)
        ->get();
        return view('pengaduan.detail', compact('pengaduan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //validate form
        $this->validate($request, [
            'image'             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jumlahBarang'      => 'required',
            'namaBarang'        => 'required',  
            'lokasiTerakhir'    => 'required',
            'deskripsi'         => 'required'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$pengaduan->image);

            //update post with new image
            $pengaduan->update([
                'image'     => $image->hashName(),
                'namaBarang'     => $request->namaBarang,
                'jumlahBarang'   => $request->jumlahBarang,
                'lokasiTerakhir' => $request->lokasiTerakhir,
                'kontak'         => $request->kontak,
                'deskripsi'      => $request->deskripsi
            ]);

        } else {

            //update post without image
            $pengaduan->update([
                'namaBarang'     => $request->namaBarang,
                'jumlahBarang'   => $request->jumlahBarang,
                'lokasiTerakhir' => $request->lokasiTerakhir,
                'kontak'         => $request->kontak,
                'deskripsi'      => $request->deskripsi
            ]);
        }

        //redirect to index
        return redirect()->route('pengaduan.show', $pengaduan->id)->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //delete image
        Storage::delete('public/posts/'. $pengaduan->image);

        //delete post
        $pengaduan->delete();

        //redirect to index
        return redirect()->route('pengaduan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

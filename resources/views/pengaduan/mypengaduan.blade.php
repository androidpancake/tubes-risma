@extends('layouts.header')
@section('content')

<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          <p></p>
          <h1>Daftar Pengaduan {{ Auth::user()->name }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Nama barang</th>
                        <th scope="col">Lokasi Terakhir</th>
                        <th>Pemilik</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pengaduans as $data)
                    <tr class="">
                        
                        <td scope="row">{{ $data->namaBarang }}</td>
                        <td>{{ $data->lokasiTerakhir }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->telephone }}</td>
                        <td>
                            <a class="btn btn-primary d-inline" href="{{ route('pengaduan.show', $data->id) }}">Detail</a>
                            <!-- <button class="btn btn-outline-danger">Hapus</button> -->
                            <form class="d-inline" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengaduan.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger d-inline">HAPUS</button>
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- FAB -->
    <div class="dropup position-absolute bottom-0 end-0 rounded-circle m-5">
        <a type="button" href="{{ route('pengaduan.create') }}" class="btn btn-success btn-circle btn-lg">
            <i class="fa fa-plus"></i>
            <span class="visually-hidden">Add Category</span>
        </a>

    </div>
</div>
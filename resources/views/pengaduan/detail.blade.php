@extends('layouts.header')
@section('content')
<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          <p></p>
          <h1>Detail Pengaduan {{ $pengaduan->namaBarang }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<img src="{{ Storage::url('public/image/').$pengaduan->image }}" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					          <h3><span class="orange-text">{{ $pengaduan->namaBarang }}</span></h3>
                    <h4>{{ $pengaduan->users_id }} Test</h4>
                    <p>{{ $pengaduan->telephone }}</p>
                    <div class="fs-6">Lokasi terakhir : {{ $pengaduan->lokasiTerakhir }}</div>
                    <div class="text">Deskripsi : {{ $pengaduan->deskripsi }}</div>
                    <!--Countdown Timer-->
                  <a href="{{ route('temukan.create', $pengaduan->id) }}" class="cart-btn">Saya menemukan</a>
                	<a href="https://wa.me/{{ $pengaduan->telephone }}" class="btn btn-outline-primary"><i class="fa fa-phone"></i> Hubungi</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->
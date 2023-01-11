@extends('layouts.header')
@section('content')

<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          <p></p>
          <h1>Lapor Penemuan</h1>
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
                    <h4>{{ $pengaduan->users_id }}</h4>
                    <p>{{ $pengaduan->id }}</p>
                    <p>{{ $pengaduan->telephone }}</p>
                    <div class="fs-6">Lokasi terakhir : {{ $pengaduan->lokasiTerakhir }}</div>
                    <div class="text">Deskripsi : {{ $pengaduan->deskripsi }}</div>
                    <!--Countdown Timer-->
                    <a href="{{ route('temukan.index', $pengaduan->id) }}" class="cart-btn">List penemuan</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->
	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
      <div id="form_status"></div>
      <div class="contact-form">
        <form action="{{ route('temukan.store', $pengaduan->id) }}" method="POST" id="fruitkha-contact" enctype="multipart/form-data">
          @csrf
          <input type="text" name="pengaduan_id" class="form-control" readonly value="{{ $pengaduan->id }}">
          <p>
            <input type="text" placeholder="Lokasi Terakhir" name="lokasiTerakhir">
          </p>
          <p><textarea cols="30" rows="10" placeholder="Pesan" name="pesan"></textarea></p>
          <div class="form-group">
            <input type="file" class="form-control" name="image">
          </div>
          <p><button class="btn btn-primary" type="submit" value="Submit">Menemukan</button></p>
        </form>
      </div>

    </div>
  </div>

  <script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>

@include('layouts.footer')
@endsection
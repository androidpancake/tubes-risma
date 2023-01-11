@extends('layouts.header')
@section('content')

<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          <p></p>
          <h1>Penemuan</h1>
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
                    	<img src="{{ Storage::url('public/image/').$data->pengaduan->image }}" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">{{ $data->pengaduan->namaBarang }}</span></h3>
                    <!-- <h4>{{ $pengaduan->users_id }}</h4>
                    <p>{{ $pengaduan->telephone }}</p>
                    <div class="fs-6">Lokasi terakhir : {{ $pengaduan->lokasiTerakhir }}</div>
                    <div class="text">Deskripsi : {{ $pengaduan->deskripsi }}</div> -->
                    <!--Countdown Timer-->
                    <a href="{{ route('temukan.create', $pengaduan->id) }}" class="cart-btn">Saya menemukan</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->
    <div class="container">
            <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Pesan</th>
                                <th scope="col">Lokasi Terakhir</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($penemuan as $data)
                            <tr class="">
                                
                                <td scope="row">{{ $data->pesan }}</td>
                                <td>{{ $data->lokasi }}</td>
                                <td>{{ $data->image }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
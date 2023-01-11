@extends('layouts.header')
@section('content')
	
	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<h1>(Heal)ang Pengaduan</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- Berita Pengaduan -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">
			@auth
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="section-title">	
							<h3><span class="orange-text">Berita</span> Pengaduan</h3>
							<p>Silahkan isi formulir pengaduan kehilangan barang kamu di sini, lengkapi data dengan lengkap agar dapat mempermudah orang lain membantu menemukan barang berharga kamu. 

								Kadang, kamu harus kehilangan barang agar menyadari bahwa kamu perlu menggunakan platform ini :)</p>
						</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($pengaduan as $data)
					<div class="col-lg-4 col-md-6">
						<div class="single-latest-news">
							
								<!-- image -->
								<a href="{{ route('pengaduan.show', $data->id) }}">
								<div class="news-text-box">
									<img src="{{ Storage::url('public/image/').$data->image }}" alt="">
									<h3>{{ $data->namaBarang }}</h3>
									<p class="blog-meta">
										<span class="author"><i class="fas fa-phone"></i>{{ $data->telephone }}</span>
										<span class="date"><i class="fas fa-map-marker"></i>{{ $data->lokasiTerakhir }}</span>
									</p>
									<p class="excerpt">{{ $data->deskripsi }}</p>
									<a href="{{ route('pengaduan.show', $data->id) }}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
								</div>
								</a> 
						</div>
					</div>
					@endforeach
					{{-- batas bawah --}}
					</div>
						<div class="row">
						<div class="col-lg-12 text-center">
							<a href="#" class="boxed-btn">More News</a>
						</div>
				</div>

			@endauth

			@guest
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Berita</span> Pengaduan</h3>
						<p>Silahkan isi formulir pengaduan kehilangan barang kamu di sini, lengkapi data dengan lengkap agar dapat mempermudah orang lain membantu menemukan barang berharga kamu. 

							Kadang, kamu harus kehilangan barang agar menyadari bahwa kamu perlu menggunakan platform ini :)</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h3>Login Untuk Melanjutkan</h3>
				</div>
			@endguest
		</div>
	</div>
	<!-- end latest news -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
		
	@endsection
	
	
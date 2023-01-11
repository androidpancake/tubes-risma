<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Healang</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<!-- google font -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ url('css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ url('css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ url('css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ url('css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ url('css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ url('css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ url('css/responsive.css')}}">
	<!-- custom CSS -->
	<link rel="stylesheet" href="{{ url('css/custom.css')}}">
    <!-- jquery -->
	<script src="{{ url('js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{ url('bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{ url('js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{ url('js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{ url('js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{ url('js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{ url('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{ url('js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{ url('js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{ url('js/main.js')}}"></script>


</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	@auth
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="img/..." alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="/">Home</a></li>
								@if(Auth::user()->role == 'USER')
								<li><a href="{{ route('pengaduan.mypengaduan') }}">Pengaduan</a></li>
								@else
								<li><a href="{{ route('pengaduan.index') }}">Pengaduan</a></li>
								@endif
								<li><a href="pelaporan/create">Penemuan</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="#"><i class="fa fa-user"></i></a>
										<ul class="sub-menu">
											<li><a href="{{ route('user.profil') }}">{{ Auth::user()->name }}</a></li>
											@if(Auth::user()->role == 'ADMIN')
											<li><a href="/">Admin page</a></li>
											@endif
											<form action="{{ route('logout') }}" method="POST">
												@csrf
												<li><button class="btn" type="submit">Logout</button></li>
											</form>
										</ul>
									</div>
								</li>
							</ul>
							
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	@endauth



	@guest
		<div class="top-header-area" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<div class="main-menu-wrap">
							<!-- logo -->
							<div class="site-logo">
								<a href="index.html">
									<img src="img/..." alt="">
								</a>
							</div>
							<!-- logo -->

							<!-- menu start -->
							<nav class="main-menu">
								<ul>
									<li class="current-list-item"><a href="/">Home</a>
									</li>
									<li>
										<div class="header-icons">
											<a class="shopping-cart" href="login"><i class="fas fa-user"></i></a>
										</div>
									</li>
								</ul>
							</nav>
							<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
							<div class="mobile-menu"></div>
							<!-- menu end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- end header -->
	@endguest

    @yield('content')
	
</body>
</html>
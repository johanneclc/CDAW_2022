<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>ImtFlix</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/img/icone.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{route('accueil')}}">
								<img src="{{asset('assets/img/Logo.png')}}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>

								<li ><a href="{{route('films')}}">Film</a>
									{{-- <ul class="sub-menu">
										<li><a href="films">Film  {{ $userRole["role"] }}</a></li>
									</ul> --}}
								{{-- </li>
								<li ><a href="serie.html">S??rie</a>
									<ul class="sub-menu">
										<li><a href="series">Serie</a></li>
									</ul>
								</li>
								<li ><a href="manga.html">Anim??s</a>
									<ul class="sub-menu">
										<li><a href="animes">Anim??s</a></li>
									</ul>
								</li> --}}
								{{-- <li><a href="dessinanime.html">Dessin Anim??</a>
									<ul class="sub-menu">
										<li><a href="dessinanime.html">Dessin Anim??</a></li>
									</ul>
								</li> --}}
								@if($userRole["role"]==1 || $userRole["role"]==2 || $userRole["role"]==3)
                                <li ><a href="{{route('playlists')}}">Playlists</a>
								</li>
								@endif
                                @if($userRole["role"]==1)
								<li> <a >Admin</a>
									<ul class="sub-menu">
										<li><a href="{{ route('users.index') }}">Gestion Utilisateurs</a></li>
                                        <li><a href="{{ route('medias.index') }}">Gestion des M??dias</a></li>									</ul>
								</li>
                                @endif
								<li> <a href="login">Se Connecter</a>
									<ul class="sub-menu">
										@if($userRole["role"]==0)
											<li><a href="{{route('login')}}">Connexion</a></li>
											<li><a href="{{route('register')}}">Inscription</a></li>
										@else
											<li><a href="{{route('mon_profil')}}">Mon Profil</a></li>
											<li><a href="{{route('deconnexion')}}">Deconnexion</a></li>
										@endif
									</ul>
								</li>
								@if($userRole["role"]!=0)
									<span class="text-white">
										{{ $userRole["name"] }}
										@if($userRole["role"]==4)
											(Bloqu??)
										@endif
									</span>
								@endif
								<li>
									<div class="header-icons">
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
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

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->



	<header class="py-5 bg-image-full" style="background-image: url('https://panthea.com/wp-content/uploads/2019/05/Panthea-Theater.jpg')">
		<div class="text-center my-5">

			 <!-- hero area -->


		  <!-- Content section | connexion-->

		  <section class="py-5">
			  <div class="container my-5">
				  <div class="row justify-content-center">
					  <div class="col-lg-6">
						  <div class="mb-3">


							<div class="col-lg-8 offset-lg-2 text-center">
								<div class="breadcrumb-text">
                                    @yield('content')

								</div>
							</div>
						</div>


					  </div>
				  </div>
			  </div>
		  </section>
		  </div>
		  </header>
	<!-- logo carousel -->
	<div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
							@yield("logo carousel")

                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!-- end logo carousel -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						@yield("product section titre")
					</div>
				</div>
			</div>

			<div class="row">
				@yield("product section content")

			</div>
		</div>
	</div>
	<!-- end product section -->



	<!-- testimonail-section -->
	<div class="py-5 bg-image-full" style="background-image: url('https://panthea.com/wp-content/uploads/2019/05/Panthea-Theater.jpg')">

		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					@yield("testimonail-section title")
				</div>
			</div>
		</div>
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						@yield("testimonail-section content")
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<br>
	<br>
	<!-- end testimonail-section -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						@yield("latest news title")
					</div>
				</div>
			</div>

			<div class="row">
				@yield("latest news content")
			</div>
		</div>
	</div>
	<!-- end latest news -->



	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Qui sommes nous?</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Pour nous contacter</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Acceuil</a></li>
							<li><a href="film.html">Film</a></li>
							<li><a href="serie.html">S??rie</a></li>
							<li><a href="manga.html">Manga</a></li>
							<li><a href="Connexion.html">Connexion</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">S'inscrire </h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>

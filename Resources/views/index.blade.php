<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>{{$data['info']['title']}}</title>	

		<meta name="keywords" content="Madu Murni, Wimala Madu, Madu Asli, Sari Lemon" />
		<meta name="description" content="{{$data['info']['description']}}">
		<meta name="author" content="apkit.co.id">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('css/demos/demo-one-page-agency.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('css/skins/skin-one-page-agency.css')}}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">
		<link rel="stylesheet" href="{{asset('modules/wimalamadu/css/wimalamadu.css')}}">

		<!-- Head Libs -->
        <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>

	</head>
	<body data-spy="scroll" data-target=".wrapper-spy" data-offset="100">

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-container container-fluid px-0">
						<div class="header-row">
							<div class="header-column custom-divider-1">
								<div class="header-row">
									<div class="header-logo px-4">
										<a href="wimalamadu">
											<img alt="Porto One Page Agency" width="101" src="modules/wimalamadu/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-center w-100">
								<div class="header-row">
									<div class="header-nav justify-content-center">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="wrapper-spy collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link active" href="#home" data-hash>
															Beranda
														</a>
													</li>
													<li>
														<a class="nav-link" href="#apa-itu" data-hash data-hash-offset="32">
															Apa Itu?
														</a>
													</li>
													<li>
														<a class="nav-link" href="#khasiat" data-hash data-hash-offset="32">
															Khasiat
														</a>
													</li>
													<li>
														<a class="nav-link" href="#produk" data-hash data-hash-offset="32">
															Produk
														</a>
													</li>
													<li>
														<a class="nav-link" href="#cara-beli" data-hash data-hash-offset="32">
															Cara Beli
														</a>
													</li>
													<li>
														<a class="nav-link" href="#hubungi-kami" data-hash data-hash-offset="32">
															Hubungi Kami
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<div class="header-column custom-divider-1 _left justify-content-end">
								<div class="header-row px-4">
									<ul class="social-icons custom-social-icons-style-1 d-none d-md-flex">
										<li class="social-icons-instagram">
											<a href="http://www.instagram.com/{{$data['social_media']['instagram']}}" class="text-color-quaternary" target="_blank" title="Instaram">
												<i class="fab fa-instagram"></i>
											</a>
										</li>
										<li class="social-icons-whatsapp">
											<a href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}" class="text-color-quaternary" target="_blank" title="Whatsapp">
												<i class="fab fa-whatsapp"></i>
											</a>
										</li>
									</ul>
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div role="main" class="main">


				<div id="home" class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider manual rev_slider" data-version="5.4.8">
						<ul>
							<li data-transition="fade">
								<img src="modules/wimalamadu/img/slide/slide-1.jpg"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

								<h1 class="tp-caption text-color-dark font-weight-bold"
									data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
									data-y="center" data-voffset="-55"
									data-start="500"
									data-fontsize="80"
									data-transform_in="y:[-300%];opacity:0;s:500;">WIMALA</h1>

								<div class="tp-caption text-color-dark"
									data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
									data-y="['center','center','center','center']" data-voffset="['-10','-10','-10','0']"
									data-start="1500"
									data-fontsize="['18','18','18','25']"
									data-whitespace="nowrap"
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;">Madu Murni & Sari Lemon</div>

								<div class="tp-caption"
									data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
									data-y="['center','center','center','center']" data-voffset="['15','15','15','35']"
									data-start="2000"
									data-fontsize="['12','12','12','19']"
									data-transform_in="y:[100%];opacity:0;s:500;">Madu asli dari peternak, langsung diolah murni tanpa campuran</div>

							</li>
							<li data-transition="fade">
								<img src="modules/wimalamadu/img/slide/slide-2.jpg"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

								<h1 class="tp-caption text-color-dark font-weight-bold"
									data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
									data-y="center" data-voffset="-55"
									data-start="500"
									data-fontsize="80"
									data-transform_in="y:[-300%];opacity:0;s:500;">MADU MURNI</h1>

								<div class="tp-caption text-color-dark"
									data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
									data-y="['center','center','center','center']" data-voffset="['-10','-10','-10','0']"
									data-start="1500"
									data-fontsize="['18','18','18','25']"
									data-whitespace="nowrap"
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;">100% Murni Tanpa Campuran</div>

								<div class="tp-caption"
									data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
									data-y="['center','center','center','center']" data-voffset="['15','15','15','35']"
									data-start="2000"
									data-fontsize="['12','12','12','19']"
									data-transform_in="y:[100%];opacity:0;s:500;">Meningkatkan sistem imun agar tetap FIT</div>

							</li>
						</ul>
					</div>
				</div>

				<section id="apa-itu" class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>APA ITU?</h2>
								<p class="custom-section-sub-title">WIMALA MADU MURNI & SARI LEMON</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<p>
									<strong class="font-weight-semibold text-color-dark">Madu Murni 100% dengan nektar randu</strong><br>
                                    Wimala madu merupakan produk madu berkualitas tinggi dan kaya akan antioksidan. Tidak pernah basi dan bisa bertahan hingga 3.000 tahun. 
                                    Wimala juga mempersembahkan produk terbaru Sari Lemon untuk detox alami dan menjaga daya tahan tubuh agar tetap fit dan terjaga.
                                    Jaga kondisi kesehatan anda dengan mengkonsumsi Wimala Madu setiap harinya.
								</p>
							</div>
							<div class="col-lg-6 custom-margin-3 custom-height text-center">
								<svg id="curved-line-1" class="d-none d-md-block" x="0px" y="0px" width="545px" height="305px" viewBox="0 0 545 305" enable-background="new 0 0 545 305" xml:space="preserve">
									<circle class="circle appear-animation" data-appear-animation="circle-anim" fill="none" stroke="#231F20" stroke-miterlimit="10" stroke-dasharray="2.0106,1.0053" cx="10.206" cy="9.91" r="8.167"/>
									<circle class="circle-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" cx="10.206" cy="9.91" r="8.167"/>
									<path class="path appear-animation" data-appear-animation="line-anim" data-appear-animation-delay="800" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2.0024,2.0024" d="M11.469,21.046
										c3.191,19.81,32.779,130.736,292.756,87.863c280.979-46.337,240.717,145.948,212.215,185.401"/>
									<path class="path-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" d="M11.469,21.046
											c3.191,19.81,32.779,130.736,292.756,87.863c280.979-46.337,240.717,145.948,212.215,185.401"/>
								</svg>
								<img src="modules/wimalamadu/img/apa-itu/1.jpg" alt class="custom-image-style-1 _left" data-appear-animation="zoomIn" data-appear-animation-delay="1300" />
								<img src="modules/wimalamadu/img/apa-itu/2.jpg" alt class="custom-image-style-1 _middle" data-appear-animation="zoomIn" data-appear-animation-delay="1800" />
								<img src="modules/wimalamadu/img/apa-itu/3.jpg" alt class="custom-image-style-1 _right" data-appear-animation="zoomIn" data-appear-animation-delay="2300" />
							</div>
						</div>
					</div>
				</section>

				<section class="section parallax section-parallax section-no-border custom-z-index m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="modules/wimalamadu/img/parallax/1.jpg">
					<div class="container">
						<div class="row counters custom-counters">
							<div class="col-lg-3 col-sm-6">
								<div class="counter">
									<i class="fas fa-users text-color-secondary"></i>
									<strong class="text-color-light" data-to="1000" data-append="+">0</strong>
	   								<label>PELANGGAN</label>
	   							</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="counter">
									<i class="fas fa-map text-color-secondary"></i>
									<strong class="text-color-light" data-to="100" data-append="+">0</strong>
	   								<label>KOTA</label>
	   							</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="counter">
									<label class="text-color-light">Kami telah dipercaya lebih dari 1000 pelanggan dan produk kami telah tersebar lebih dari 100 kota di indonesia</label>
									<strong>Segera Order</strong>
									<label>Dan Rasakan Khasiatnya</label>   
	   							</div>
							</div>
						</div>
					</div>
				</section>

				<section id="khasiat" class="section section-no-border bg-color-light m-0 pb-0">
					<div class="container custom-pos-rel">
						<svg id="curved-line-2" class="d-none d-lg-block" x="0px" y="0px" width="132px" height="225px" viewBox="0 0 132 225" enable-background="new 0 0 132 225" xml:space="preserve">
							<circle class="circle" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="circle-anim" data-appear-animation-delay="1200" cx="120.888" cy="214.023" r="7.688"/>
							<circle class="circle-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" cx="120.888" cy="214.023" r="7.688"/>
							<path class="path" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="line-anim-2" d="M113.812,209.406c0,0-193-54.125-72.5-206.125"/>
							<path class="path-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" d="M113.812,209.406c0,0-193-54.125-72.5-206.125"/>
						</svg>
						<div class="row text-center">
							<div class="col">
								<h2>KHASIAT</h2>
								<p class="custom-section-sub-title">BERBAGAI MANFAAT MENGKONSUMSI WIMALA MADU</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="pr-4">
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Mencegah Kanker & Penyakit Jantung</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Sebagai Anti Bakteri & Jamur</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Mengurangi Iritasi Batuk & Tenggorokan</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Pengatur Gula Darah</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Probiotik</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Perkuat Sistem Kekebalan Tubuh</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Mampu Menjadi Sumber Energi Bagi Tubuh</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Mengontrol Berat Badan Berlebih</h4>
											<p></p>
										</div>
		 							</div>
									<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
		 								<div class="feature-box-info">
		  									<h4 class="mb-0"><i class="fa fa-circle text-color-secondary"></i> Menjaga Kulit Tampak Lebih Sehat</h4>
											<p></p>
										</div>
		 							</div>
		 							
		 							<a class="btn custom-btn-style-1 custom-margin-1 text-color-dark" href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}" target="_BLANK">BELI SEKARANG</a>
		 						</div>
							</div>
							<div class="col-lg-6">
								<img src="modules/wimalamadu/img/khasiat/2.jpg" alt class="custom-image-style-2 _big" data-appear-animation="fadeIn" data-appear-animation-delay="1500" data-appear-animation-duration="100" />
								<img src="modules/wimalamadu/img/khasiat/1.jpg" alt class="custom-image-style-2 _small" data-appear-animation="fadeInUp" data-appear-animation-delay="1900" data-appear-animation-duration="100" data-plugin-options="{'accY': 100}" />
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-tertiary m-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>Testimoni</h2>
								<p class="custom-section-sub-title">DARI PELANGGAN</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col">
								<div class="owl-carousel mb-0" data-plugin-options="{'items': 1, 'loop': true, 'dots': true, 'nav': true}">
									@foreach ($data['content']['testimonials'] as $item)	
									<div class="row justify-content-center">
										<div class="col-lg-8">
											<div class="testimonial testimonial-with-quotes testimonial-style-2 custom-testimonial-style-1 text-center mb-0">
												<blockquote>
													<p>{{$item['message']}}</p>
												</blockquote>
												<div class="testimonial-author">
													<p>
														<strong class="font-weight-semibold">{{$item['name']}}</strong>
													</p>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="produk" class="section section-no-border bg-color-light m-0 pb-4">
					<div class="container">
						<div class="row text-center">
							<div class="col pb-4">
								<h2>Produk</h2>
								{{-- <p class="custom-section-sub-title"></p> --}}
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="isotope-item col-sm-6 col-lg-4 website">
								<div class="image-gallery-item mb-0">
									<a href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}&text=[ORDER FROM WEBSITE] *WIMALA MADU*" target="_BLANK" class="lightbox-portfolio">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
											<span class="thumb-info-wrapper">
												<img src="modules/wimalamadu/img/produk/produk-2.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">WIMALA MADU</span>
													<span class="thumb-info-type">BELI SEKARANG</span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="isotope-item col-sm-6 col-lg-4 brands">
								<div class="image-gallery-item mb-0">
									<a href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}&text=[ORDER FROM WEBSITE] *FRESH LEMONICE*" target="_BLANK" class="lightbox-portfolio">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
											<span class="thumb-info-wrapper">
												<img src="modules/wimalamadu/img/produk/produk-1.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">FRESH LEMONICE</span>
													<span class="thumb-info-type">BELI SEKARANG</span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="container">
							<div id="LoadMoreBtnWrapper" class="row text-center mt-4 pt-4 mb-4">
								<div class="col">
									<div id="loadMoreLoader" class="load-more-loader">
										<div class="bounce-loader">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div>
									<a href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}" id="loadMore" type="button" class="btn custom-btn-style-1 text-color-dark">ORDER SEKARANG</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="cara-beli" class="section section-primary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 mb-5 mb-lg-0">
								<img src="modules/wimalamadu/img/cara-beli/carabeli.jpg" alt class="img-fluid" />
							</div>
							<div class="col-lg-5">
								<h2 class="text-color-dark">Cara Beli</h2>
								<p class="custom-section-sub-title text-color-dark"></p>
								<p class="text-color-dark">Pemesanan sangat mudah, cukup hubungi kami via whatsapp, kami akan segera proses pesanan anda</p>
								<a href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}" target="_BLANK" class="btn custom-btn-style-1 _color-2 text-color-dark mt-4">BELI SEKARANG</a>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map m-0 custom-contact-pos">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.7776179245316!2d111.70254241392806!3d-8.124109883560948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791a30533d5d45%3A0x8de01093092de2c6!2sAPKIT%20INNOVATION!5e0!3m2!1sen!2sid!4v1591858092317!5m2!1sen!2sid" width="100%" height="618" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!--Contact-->
				<section class="section section-no-border bg-color-quaternary m-0 p-0">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-md-6 col-lg-5 custom-contact-box custom-contact-pos bg-color-quaternary" style="height: 618px" id="hubungi-kami">
								<h2 class="text-color-light">Hubungi Kami</h2>
								<div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-4">
									<div class="feature-box-icon">
										<i class="icon-call-in icons text-color-secondary"></i>
									</div>
									<div class="feature-box-info">
										<h6 class="mb-0 text-2">Telepon</h6>
										<a href="tel:{{$data['info']['phone']}}" class="text-color-light text-decoration-none">{{$data['info']['phone']}}</a>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-4">
									<div class="feature-box-icon">
										<i class="fab fa-whatsapp text-color-secondary"></i>
									</div>
									<div class="feature-box-info">
										<h6 class="mb-0 text-2">Whatsapp</h6>
										<a href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}" class="text-color-light text-decoration-none">{{$data['info']['phone']}}</a>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-4">
									<div class="feature-box-icon">
										<i class="icon-location-pin icons text-color-secondary"></i>
									</div>
									<div class="feature-box-info">
										<h6 class="mb-0 text-2">Alamat</h6>
										<p class="tall text-color-light">{{$data['info']['address']}}</p>
									</div>
								</div>
								{{-- <h5 class="text-color-light">SEND A MESSAGE</h5>
								<form class="contact-form custom-contact-form-style-1" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>

									<input type="hidden" name="subject" value="Contact Message Received" />
									<div class="form-row _divider">
										<div class="form-group col-sm-6">
											<input type="text" value=""  maxlength="100" class="form-control" name="name" placeholder="YOUR NAME" required>
										</div>
										<div class="form-group col-sm-6">
											<input type="text" value="" maxlength="100" class="form-control" name="phone" id="phone" placeholder="PHONE" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="EMAIL ADDRESS" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="5000" rows="5" class="form-control custom-textarea-style" name="message" id="message" placeholder="COMMENT" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="col">
											<input type="submit" value="SUBMIT" class="btn btn-primary custom-btn-style-2 text-color-light custom-margin-2 float-right mt-2" data-loading-text="Loading...">
										</div>
									</div>
								</form> --}}
							</div>
						</div>
					</div>
				</section>

		</div>
		<footer id="footer" class="m-0 p-0">
			<div class="footer-copyright bg-color-light py-4">
				<div class="container">
					<div class="row">
						<div class="col-sm-9 mb-1">
							<p>© Copyright 2020. APKIT INNOVATION. All Rights Reserved.</p>
						</div>
						<div class="col-sm-3 text-sm-right">
							<ul class="social-icons custom-social-icons-style-2">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/wimala.madu" class="text-color-quaternary" target="_blank" title="Instagram">
										<i class="fab fa-instagram"></i>
									</a>
                                </li>
                                <li class="social-icons-whatsapp">
                                    <a href="https://api.whatsapp.com/send?phone={{$data['social_media']['whatsapp']}}" class="text-color-quaternary" target="_blank" title="Whatsapp">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Vendor -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('vendor/common/common.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('vendor/vivus/vivus.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('js/theme.js')}}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('js/views/view.contact.js')}}"></script>

		<!-- Demo -->
		<script src="{{asset('js/demos/demo-one-page-agency.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('js/theme.init.js')}}"></script>


		{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEX-aTfMwFllOXVcaoRc7KuIzqVYmbVgM"></script> --}}
		{{-- <script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>Porto One Page Agency</strong><br>New York, NY 10017",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			var mapRef = $('#googlemaps').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

			// Change text-center Position
			if( $(window).width() > 767 ) {
				if( $('html[dir="rtl"]').get(0) ) {
					mapRef.panBy(250,0);
				} else {
					mapRef.panBy(-250,0);
				}
			}

		</script> --}}


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js')}}','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>

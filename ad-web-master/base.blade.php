<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ in_array(app()->getLocale(), ['ar', 'az', 'dv', 'fa', 'he', 'ku', 'ur']) ? 'rtl' : 'ltr' }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Security-Policy" content="default-src 'self' 'nonce-{{ app( 'aimeos.context' )->get()->nonce() }}' https://cdn.jsdelivr.net; style-src 'unsafe-inline' 'self' https://cdn.jsdelivr.net; img-src 'self' data: https://cdn.jsdelivr.net https://aimeos.org; frame-src https://www.youtube.com">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		@yield('aimeos_header')

		<title>{{ config('app.name', 'Aimeos') }}</title>

		<link rel="icon" href="{{ asset( 'aimeos/' . ( app( 'aimeos.context' )->get()->getLocale()->getSiteItem()->getIcon() ?: '../vendor/shop/themes/default/media/aimeos-icon.png' ) ) }}"/>

		<link rel="preload" href="/vendor/shop/themes/default/fonts/roboto-condensed-v19-latin/roboto-condensed-v19-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="/vendor/shop/themes/default/fonts/roboto-condensed-v19-latin/roboto-condensed-v19-latin-700.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="/vendor/shop/themes/default/fonts/bootstrap-icons.woff2" as="font" type="font/woff2" crossorigin>

		<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="{{ asset('vendor/shop/themes/default/aimeos.css') }}" />
	    <link rel="stylesheet" href="{{ asset('storage/css/styles.css') }}">
		<link rel="stylesheet" href="{{ asset('storage/css/cart.css') }}">

		@yield('aimeos_styles')

	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-light navbar-top navbar_aimeos">
			<!-- <a class="navbar-brand" href="/" title="Logo">
				<img src="{{ asset( 'aimeos/' . ( app( 'aimeos.context' )->get()->getLocale()->getSiteItem()->getLogo() ?: '../vendor/shop/themes/default/media/aimeos.png' ) ) }}" height="40" title="Logo">
			</a> -->
			<a href="home"><img src="{{ asset('storage/images/logo.png') }}" height="68" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				@yield('aimeos_nav')

				<ul class="navbar-nav">
					@if (Auth::guest() && config('app.shop_registration'))
						<li class="nav-item register"><a class="nav-link" href="{{ airoute( 'register' ) }}" title="{{ __( 'Register' ) }}"><span class="name">{{ __('Register') }}</span></a></li>
					@endif
					</ul>

				@yield('aimeos_head')
			</div>
		</nav>

		<div class="content">
			@yield('aimeos_stage')
			@yield('aimeos_body')
			@yield('content')
		</div>


		<footer class="footer-section">
  <div class="container">
  <div class="footer-cta pt-5 pb-5">
    <div class="heading text-center">
      <h1 class="">
        Get in touch
      </h1>
    </div>
    <div class="row">
      <div class="col-xl-4 col-md-4 mb-30">
        <div class="single-cta">
          <i class="fas fa-map-marker-alt"></i>
          <div class="cta-text">
            <h4>Find us</h4>
            <span>Ringstrasse 11                              
              8107 Buchs Zurich Switzerland</span>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-4 mb-30">
        <div class="single-cta">
          <div class="cta-text">
            <h4>Call us</h4>
            <span>Tel: +41 (0)44 844 44 77</span>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-4 mb-30">
        <div class="single-cta">
          <div class="cta-text">
            <h4>Mail us</h4>
            <span> <a href="mailto:contact@amstaddigital.com" style="color: #d2d2d2;">contact@amstaddigital.com</a> </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-content pt-5 pb-5">
    <div class="row">
      <div class="col-xl-3 col-lg-3 mb-50">
        <div class="footer-widget">
          <div class="footer-logo footer-logo-center">
            <a href="home"><img src="{{ asset('storage/images/footer.png') }}" class="img-fluid" alt="logo"></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3  col-md-6 mb-30">
        <div class="footer-widget">
          <div class="footer-widget-heading">
            <h3>Useful Links</h3>
          </div>
          <ul>
            <li class="links"><a href="home">Home</a></li>
            <li class="links"><a href="b2b-consulting">B2B & Consulting</a></li>
            <li class="links"><a href="media">Media</a></li>
             <li class="links"><a href="ad-store">AD Store</a></li>
            <li class="links"><a href="contact">Contact</a></li>
            <li class="links"><a href="blog">Blog</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3  col-md-6 mb-30">
        <div class="footer-widget">
          <div class="footer-widget-heading">
            <h3>About</h3>
          </div>
          <p style="color: #d2d2d2;">contact@amstaddigital.com<br/>
            Tel: +41 (0)44 844 44 77<br/>                              
            Ringstrasse 11                              
            8107 Buchs Zurich Switzerland
          </p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3  col-md-6 mb-50">
        <div class="footer-widget py-80">
          <div class="footer-widget-heading">
            <h3>Follow us</h3>
          </div>
          <ul class="social-network social-circle">
          <a class="social-button social-button-facebook" rel="noopener" href="http://www.facebook.com/AmstadDigital" title="facebook" target="_blank"></a>
            <li><a href="http://www.facebook.com/AmstadDigital" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>

            <li><a href="https://www.youtube.com/channel/UCdDm1DfvZSE5du9gTZ4OXNQ" target="_blank" class="icoLinkedin" title="youtube"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.twitter.com/AmstadDigital" target="_blank" class="icoLinkedin" title="twitter"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->



		<a id="toTop" class="back-to-top" href="#" title="{{ __( 'Back to top' ) }}">
			<div class="top-icon">
				<i class="bi">arrow-up-short</i>
			</div>
		</a>

		<!-- Scripts -->
		<script src="https://cdn.jsdelivr.net/combine/npm/jquery@3,npm/bootstrap@4"></script>
		<script src="{{ asset('vendor/shop/themes/default/aimeos.js') }}"></script>
		@yield('aimeos_scripts')
	</body>
</html>

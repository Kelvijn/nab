<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Nabucco') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
</head>

<body>
	<div id="wrapper">

		@include('inc.nav')
		<div class="container">
			<div class="row">
			@include('inc.messages') @yield('content')
			</div>
			
		</div>
		



		
	</div>
	

                      
      <!--Footer-->
      <footer class="page-footer font-small unique-color-dark pt-0">
			
				<div style="background-color: #843418;">
					<div class="container">
						<!--Grid row-->
						<div class="row py-4 d-flex align-items-center">
			
							<!--Grid column-->
							<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
								<h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
							</div>
							<!--Grid column-->
			
							<!--Grid column-->
							<div class="col-md-6 col-lg-7 text-center text-md-right">
								<!--Facebook-->
								<a class="fb-ic ml-0"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
								<!--Twitter-->
								<a class="tw-ic"><i class="fa fa-twitter white-text mr-lg-4"> </i></a>
								<!--Google +-->
								<a class="gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4"> </i></a>
								<!--Linkedin-->
								<a class="li-ic"><i class="fa fa-linkedin white-text mr-lg-4"> </i></a>
								<!--Instagram-->
								<a class="ins-ic"><i class="fa fa-instagram white-text mr-lg-4"> </i></a>
							</div>
							<!--Grid column-->
			
						</div>
						<!--Grid row-->
					</div>
				</div>
			
				<!--Footer Links-->
				<div class="container mt-5 mb-4 text-center text-md-left">
					<div class="row mt-3">
			
						<!--First column-->
						<div class="col-md-8 ">
							<div >
								<ul  class="footer_img">
									<li>
											<a href="http://kuleuven.be"><img src="http://nabucco.arts.kuleuven.be/nabucco/themes/Nabucco/images/logo_kuleuven.png" alt=""></a> 
											
									</li>
									<li>
											<a href="http://www.univie.ac.at"><img src="http://nabucco.arts.kuleuven.be/nabucco/themes/Nabucco/images/wien_logo.jpg" alt=""></a> 
											
									</li>
									<li>
											<a href="https://www.belspo.be"><img src="http://nabucco.arts.kuleuven.be/nabucco/themes/Nabucco/images/belspo_logo.jpeg" alt=""></a>
											
									</li>
									<li>
											<a href="http://libis.be"><img src="http://nabucco.arts.kuleuven.be/nabucco/themes/Nabucco/images/libis_logo.jpg" alt=""></a>
											
									</li>
								</ul>
								</div>
						</div>
						<!--/.First column-->
			
						
			
						<!--Fourth column-->
						<div class="col-md-4 col-lg-3 col-xl-3">
								<div id="footer-text">
										Blijde inkomststraat 21, POB 3318<br>B-3000 Leuven<br>tel: +32(0)16-324938<br><a href="mailto:kathleen.abraham@arts.kuleuven.be">kathleen.abraham@arts.kuleuven.be</a><br><a href="mailto:michael.jursa@univie.ac.at">michael.jursa@univie.ac.at</a><br><a href="mailto:shygordin@gmail.com">shygordin@gmail.com</a></div>
						</div>
						<!--/.Fourth column-->
			
					</div>
				</div>
				<!--/.Footer Links-->
			
				<!-- Copyright-->
				<div class="footer-copyright py-3 text-center">
					<div class="container-fluid">
						© 2017 Copyright: <a href=""><strong>Nabucco</strong></a>
					</div>
				</div>
				<!--/.Copyright -->
			
			</footer>
			<!--/.Footer-->
							
						
	 

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'article-ckeditor' );
	</script>
</body>

</html>
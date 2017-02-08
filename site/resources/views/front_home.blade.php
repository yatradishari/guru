<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>@yield('title') | {{ settings('SITE_NAME') }}</title>
        <meta name="description" content="{{ settings('META_DESCRIPTIONS') }}">
        <meta name="keywords" content="{{ settings('META_KEYWORDS') }}">
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet" type="text/css">
		<link href="{{ asset('/site_assets/front/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('/site_assets/front/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/site_assets/front/style.css') }}">
		
		<!--[if lt IE 9]>
		<script src="{{ asset('/site_assets/front/js/ie-support/html5.js') }}"></script>
		<script src="{{ asset('/site_assets/front/js/ie-support/respond.js') }}"></script>
		<![endif]-->

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-91090073-1', 'auto');
            ga('send', 'pageview');

        </script>
	</head>

	<body class="slider-collapse">
		
		<div id="site-content">			
			@include('includes.header_home')
			<main class="content">
                @include('includes.banner')
				<div class="fullwidth-block features-section">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft" data-wow-delay=".3s">
									<i class="icon-ticket"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Laborum expedita fugiat et quas quia! Odio dignissimos beatae aspernatur in vero culpa excepturi consequatur!</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft">
									<i class="icon-plane"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lectetur recusandae quasi repellendus accusamus ipsa sed quibusdam officia aspernatur natus itaque, asperiores impedit numquam dolorum.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight">
									<i class="icon-jetski"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>L culpa ex dolorum ipsa, maxime soluta repudiandae officia corrupti. Doloribus iste voluptatibus nostrum?</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight" data-wow-delay=".3s">
									<i class="icon-shuttelcock"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lam sit, facere dicta libero ipsa. Repellat deleniti dignissimos, excepturi minima voluptatibus mollitia adipisci iusto.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- popular destination -->
                @include('destination.popular')
				<!-- //popular destination -->
                
                <!-- popular destination -->
                @include('destination.testimonial')
				<!-- //popular destination -->
				
			</main> <!-- .content -->

			<footer class="site-footer wow fadeInUp">
				<!-- site-footer-bottom -->
				@include('includes.footer_top')
                <!-- //site-footer-bottom -->	
				
                <!-- site-footer-bottom -->
				@include('includes.footer')
                <!-- //site-footer-bottom -->
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="{{ asset('/site_assets/front/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('/site_assets/front/js/min/plugins-min.js') }}"></script>
		<script src="{{ asset('/site_assets/front/js/min/app-min.js') }}"></script>
		
	</body>

</html>
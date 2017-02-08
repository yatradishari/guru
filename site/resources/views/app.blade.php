<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>@yield('title') | {{ settings('SITE_NAME') }}</title>
        <meta name="description" content="{{ settings('META_DESCRIPTIONS') }}">
        <meta name="keywords" content="{{ settings('META_KEYWORDS') }}">
        
        <!-- Open Graph data for social share -->
        @yield('social_share')
        <!-- //Open Graph data for social share -->
        
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700" rel="stylesheet" type="text/css">
		<link href="{{ asset('/site_assets/front/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('/site_assets/front/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/site_assets/front/style.css') }}">
		
        @yield('style')
        
		<!--[if lt IE 9]>
		<script src="{{ asset('/site_assets/front/js/ie-support/html5.js') }}"></script>
		<script src="{{ asset('/site_assets/front/js/ie-support/respond.js') }}"></script>
		<![endif]-->
        
        <script src="{{ asset('/site_assets/front/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('/site_assets/front/js/min/plugins-min.js') }}"></script>
		<script src="{{ asset('/site_assets/front/js/min/app-min.js') }}"></script>	
        
        @yield('script')        
        
	</head>

	<body>		
		<div id="site-content">			
			<!-- site-header -->
                @include('includes.header')
            <!-- //site-header -->
			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
						@yield('content')
					</div>
				</div>				
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
			
	</body>

</html>
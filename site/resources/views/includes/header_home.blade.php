<header class="site-header wow fadeInDown">
    <div class="container">
        <div class="header-content">
            <div class="branding">
                <img src="{{ URL::to('/site_assets/front/images/logo.png') }}" alt="{{ settings('COMPANY_NAME') }}" class="logo">
                <h1 class="site-title"><a href="{{ url('/') }}">{{ settings('COMPANY_NAME') }}</a></h1>
                <small class="site-description">{{ settings('COMPANY_TAGLINE') }}</small>
            </div>
            
            <nav class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">                    
                    <li class="menu-item active"><a class="hover" href="{{ url('/destinations') }}">Destinations</a></li>
                    <li class="menu-item"><a href="{{ url('/holidayhomes') }}">Holiday Homes</a></li>
                    <li class="menu-item"><a href="{{ url('/contactus') }}">Contact</a></li>
                    <li class="menu-item"><a href="{{ url('/touroperators') }}">Our Partners</a></li>
                    <li class="menu-item"><a href="javascript:void(0);">Blog</a></li>
                    <li class="menu-item"><a href="{{ url('/member/logout') }}">Logout</a></li>
                    
                        <li class="menu-item"><a href="{{ url('/member') }}">Login</a></li>
                </ul>
            </nav>
            
            <div class="social-links">
                <a href="{{ settings('FACEBOOK_URL') }}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="{{ settings('TWITTER_URL') }}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="{{ settings('GOOGLE_URL') }}" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a>
				<a href="{{ settings('SITE_NAME') }}" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</header> <!-- .site-header -->
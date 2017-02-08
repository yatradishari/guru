<div class="footer-bottom">
    <div class="container">
        <div class="branding pull-left">
            <img src="{{ URL::to('/site_assets/front/images/logo-footer.png') }}" alt="{{ settings('COMPANY_NAME') }}" class="logo">
            <h1 class="site-title"><a href="{{ url('/') }}">{{ settings('COMPANY_NAME') }}</a></h1>
            <small class="site-description">Tagline goes here</small>
        </div>

        <div class="contact-links pull-right">
            <a href="https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i> {{ settings('CONTACT_ADDRESS') }}</a>
            <a href="tel:+134453455345"><i class="fa fa-phone"></i> {{ settings('CONTACT_PHONE') }}</a>
            <a href="mailto:{{ settings('CONTACT_EMAIL') }}"><i class="fa fa-envelope"></i> {{ settings('CONTACT_EMAIL') }}</a>
        </div>
    </div>
</div>
<div class="colophon">
    <div class="container">
        <p class="copy">Copyright {{date("Y")}} {{ settings('COMPANY_NAME') }}, Designed by Themezy, All right reserved.</p>
    </div>
</div>
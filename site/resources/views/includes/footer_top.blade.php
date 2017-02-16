<div class="container">
    <div class="footer-top">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3 class="widget-title">About us</h3>
                    <p>
                        {{ settings('ABOUT_US_SHORT') }}
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3 class="widget-title">Helpful Links</h3>
                    <ul class="list-arrow">                        
                        <li><a href="{{ url('/popular-destinations') }}">Popular Destinations</a></li>
                        <li><a href="{{ url('/offbeat-destinations') }}">Offbeat Destinations</a></li>                        
                        <li><a href="{{ url('/holidayhomes') }}">Holiday Home</a></li>                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3 class="widget-title">Helpful Links</h3>
                    <ul class="list-arrow">
                        <li><a href="javascript:void(0);">Tour Operators</a></li>
                        <li><a href="{{ url('/member') }}">Submit Your Location</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-customer-info">
                    <h3 class="widget-title">Customer Service</h3>
                    <img src="{{ URL::to('/site_assets/front/dummy/footer-customer-service.jpg') }}" alt="" class="pull-left">
                    <div class="cs-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptates pariatur vero.</p>
                        <p>
                            {{ settings('CONTACT_PHONE') }} <br> 
                            <a href="mailto:{{ settings('CONTACT_EMAIL') }}">{{ settings('CONTACT_EMAIL') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
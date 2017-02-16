@section('title') {{ $destinations[0]->location_name}} @stop
@section('social_share')
<meta property="og:title" content="European Travel Destinations">
<meta property="og:description" content="Offering tour packages for individuals or groups.">
<meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">
<meta property="og:url" content="http://euro-travel-example.com/index.htm">
@stop
@extends('app_no_animate')
@section('content')
<div class="row">
    <div class="col-md-12 wow"> 
        <div class="wow">  
            <div class="details">
                <span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>
                <figure class="details-image" > 
                    @if($destinations[0]->primary_image->image_name=="")
                        <img src="{{ URL::to('/site_assets/default_icon/no_photo.jpg') }}" alt="{{$destinations[0]->location_name}}">
                    @else
                        <img src="{{ URL::to('/site_assets/uploads/destination/'.$destinations[0]->primary_image->image_name) }}" alt="{{$destinations[0]->location_name}}">
                    @endif
                </figure>
                <div class="">                      
                     <button type="button" class="btn btn-primary active"><i class="fa fa-facebook left"></i> Going There</button>
                     <button type="button" class="btn btn-primary active"><i class="fa fa-comments left"></i> Review</button>
                </div>
            </div>
            <p> 
                {!! get_location($destinations[0]->id) !!}            
            </p>
            <p>
                <div class="row">
                    <div class="container">                    
                        @include('includes.destination_sub_menu')
                        <div id="tab-1" class="tab-content current">
                            {{ $destinations[0]->description }}
                        </div>
                    </div><!-- container -->        
                </div>
            </p>  
        </div> 
        
    </div>    
</div>

@endsection
@section('script')
<!-- bxSlider Javascript file -->
<script src="{{ asset('/site_assets/front/slider/jquery.bxslider.js') }}"></script>
<!-- bxSlider CSS file -->
<link href="{{ asset('/site_assets/front/slider/jquery.bxslider.css') }}" rel="stylesheet" />

<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            auto: false,
            autoControls: true
        });
    });
</script>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "4ccd9b08-a097-4534-82e1-99edc4633bcd", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
@endsection
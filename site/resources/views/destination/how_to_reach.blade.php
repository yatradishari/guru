@section('title') {{ $destinations[0]->location_name}} @stop
@section('social_share')
@stop
@extends('app_no_animate')
@section('content')
<div class="row">
    <div class="col-md-12 wow"> 
        <div class="wow">  
            <div class="details">
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
                            {{ $destinations[0]->how_to_reach }}
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
@endsection
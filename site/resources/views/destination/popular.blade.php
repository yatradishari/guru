<div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
    <div class="container">           
        <h2 class="section-title">Popular Destination</h2>
        <div class="row">
            @foreach($data as $destination)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="offer wow bounceIn">
                    <figure class="featured-image">
                        @if($destination->primary_image['image_name']=="")
                            <img src="{{ URL::to('/site_assets/default_icon/no_photo.jpg') }}" alt="{{$data[0]->location_name}}">
                        @else
                            <img src="{{ URL::to('/site_assets/uploads/destination/'.$destination->primary_image['image_name']) }}" alt="{{$data[0]->location_name}}">
                        @endif
                    </figure>
                    <h2 class="entry-title"><a href="">{{ $destination->location_name}}</a></h2>
                    <p>{{ short($destination->description ) }}</p>
                    <a href="{{ url('/site_assets/destinations/details/'.$destination->title_meta_tag) }}" class="button">See details</a>
                </article>
            </div>
            @endforeach  
        </div>
    </div>
</div> 
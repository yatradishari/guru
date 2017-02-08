@section('title') Destination @stop
@extends('app')

@section('content')
    <!-- <div class="filter-links filterable-nav">
        <select class="mobile-filter">
            <option value="*">Show all</option>
            <option value=".south-america">Popular</option>
            <option value=".asia">Offbeat</option>            
        </select>
        <a href="#" class=" current wow fadeInRight" data-filter="*">Show all</a>
        <a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".south-america">Popular</a>
        <a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".asia">Offbeat</a>        
    </div> -->
    <div class="filterable-items">
        @foreach($data as $destination)
        <div class="filterable-item {{ ($destination->id == 5) ? ' asia' : 'south-america' }}">
            <article class="offer-item">
                <figure class="featured-image">
                    @if($destination->primary_image['image_name']=="")
                        <img src="{{ URL::to('/site_assets/default_icon/no_photo.jpg') }}" alt="{{$data[0]->location_name}}">
                    @else
                        <img src="{{ URL::to('/site_assets/uploads/destination/'.$destination->primary_image['image_name']) }}" alt="{{$data[0]->location_name}}">
                    @endif
                    
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/'.$destination->title_meta_tag) }}">{{ $destination->location_name}}</a></h2>
                <p>{{ short($destination->description ) }}</p>
                <div class="price"> 
                    {!! get_location($destination->id) !!}
                </div>
            </article>
        </div>
        @endforeach        
    </div>

    <!--Pagination Start--> 
    @include('pagination.default', ['paginator' => $data]) 
    <!--Pagination End-->     
@endsection

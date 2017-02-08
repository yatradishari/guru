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
            <a href="{{ url('/holidayhomes/'.$destination->state_name->id) }}">
            <article class="offer-item">
                <figure class="featured-image radius-20">
                    @if($destination->state_name->image=="")
                        <img src="{{ URL::to('/site_assets/default_icon/no_photo.jpg') }}" alt="{{$destination->state_name->name}}">
                    @else
                        <img src="{{ URL::to('/site_assets/uploads/state/'.$destination->state_name->image) }}" alt="{{$destination->state_name->name}}">
                    @endif
                    
                </figure>
                <h2 class="entry-title"><a href="javascript:void(0);">{{ $destination->state_name->name }}</a></h2>
                <p></p>
               
            </article>
            </a>
        </div>
        @endforeach        
    </div>

    <!--Pagination Start--> 
    @include('pagination.default', ['paginator' => $data]) 
    <!--Pagination End-->     
@endsection

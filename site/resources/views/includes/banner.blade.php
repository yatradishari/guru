<div class="slider">
    <ul class="slides">
        @foreach($banners as $banner)
        <li data-background="{{ URL::to('/site_assets/uploads/banners/'.$banner->banners_name) }}">
            <div class="container">
                <div class="slide-caption col-md-4">
                    <h2 class="slide-title">{{$banner->image_title}}</h2>
					<p>{{$banner->image_description}}</p>
                </div>
            </div>
        </li>
        @endforeach        
    </ul>
    <div class="flexslider-controls">
        <div class="container">
            <ol class="flex-control-nav">
                @for($i=1; $i<=count($banners); $i++)
				<li><a>{{$i}}</a></li>
				@endfor	
            </ol>
        </div>
    </div>
</div>
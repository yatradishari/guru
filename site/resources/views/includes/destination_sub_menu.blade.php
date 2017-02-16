<ul class="tabs">    
    <li class="tab-link @if($page=='overview') current @endif" >
        <a class="remove_style" href="{{ url('/destinations/'.$destinations[0]->title_meta_tag) }}" >
            Overview
        </a>
    </li>
    <li class="tab-link @if($page=='how-to-reach') current @endif" >
        <a class="remove_style" href="{{ url('/destinations/'.$destinations[0]->title_meta_tag.'/how-to-reach') }}" >
            How to Reach
        </a>
    </li>
    <li class="tab-link @if($page=='when-to-visit') current @endif" >
        <a class="remove_style" href="{{ url('/destinations/'.$destinations[0]->title_meta_tag.'/when-to-visit') }}" >
            When to Visit
        </a>
    </li> 
    <li class="tab-link @if($page=='what-to-eat') current @endif" >
        <a class="remove_style" href="{{ url('/destinations/'.$destinations[0]->title_meta_tag.'/what-to-eat') }}" >
            What to Eat
        </a>
    </li>     
    <li class="tab-link" data-tab="tab-4">Accommodation</li>
    
    <li class="tab-link" data-tab="tab-6">Photo</li>    
</ul>
<style>    
    .container{
        margin: 0 auto;
    }
    ul.tabs{
        margin: 0px;
        padding: 0px;
        list-style: none;
    }
    ul.tabs li{
        background: none;
        color: #222;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
    }

    ul.tabs li.current{
        background: #ededed;
        color: #222;
    }

    .tab-content{
        display: none;
        background: #ededed;
        padding: 15px;
    }

    .tab-content.current{
        display: inherit;
    }
</style>

<?php namespace App\Http\Controllers;
use App\Model\Destination;
use App\Model\State;
use App\Model\Destinationimage;
use Input;
class DestinationController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');        
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{ 
        
        $search = '';
        //$email = '';
       // $status = '';

        if(!empty(Input::get('search')))
        {
            $search = Input::get('search');
        }
       // if(!empty(Input::get('email')))
       // {
       //     $email = Input::get('email');
       // }
       // if(!empty(Input::get('status')))
       // {
       //     $status = Input::get('status');
       // }
            
       // dd($search);
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)		
                            ->where('location_name','LIKE','%'.$search.'%')                            
							->with('state_name','primary_image')	
							->orderBy('location_name','ASC')
                            ->paginate(env('PER_PAGE'));
        $destinations->setPath('destinations');
		return view('destination.list', [ 'data' => $destinations]);        
	}
    
    public function getDetails($title_meta_tag)
	{       
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->where('title_meta_tag',$title_meta_tag)
							->with('state_name','primary_image')								
							->get();	
			

		$destinationimage=Destinationimage::where('destination_id',$destinations[0]->id)
							->where('status',1)
							->where('deleted',0)
							->orderBy('id','DESC')
							->get();
        
            
		return view('destination.details', [ 'destinations' => $destinations, 'destinationimage' => $destinationimage, 'page' => 'overview']);
	}
    
    public function getPopular()
	{ 
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)		
                            ->where('type',2)                            
							->with('state_name','primary_image')	
							->orderBy('location_name','ASC')
                            ->paginate(env('PER_PAGE'));
        $destinations->setPath('popular-destinations');
		return view('destination.list', [ 'data' => $destinations]);            
	}
    
    public function getOffbeat()
	{  
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)		
                            ->where('type',1)                            
							->with('state_name','primary_image')	
							->orderBy('location_name','ASC')
                            ->paginate(env('PER_PAGE'));
        $destinations->setPath('offbeat-destinations');
		return view('destination.list', [ 'data' => $destinations]);      
	}
    
    public function getHowtoreach($title_meta_tag)
    {
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->where('title_meta_tag',$title_meta_tag)
							->with('state_name','primary_image')								
							->get();	
			
       // dd($destinations->toArray());
		$destinationimage=Destinationimage::where('destination_id',$destinations[0]->id)
							->where('status',1)
							->where('deleted',0)
							->orderBy('id','DESC')
							->get();
        
            
		return view('destination.how_to_reach', [ 'destinations' => $destinations, 'destinationimage' => $destinationimage, 'page' => 'how-to-reach']);
    }
    
    public function getWhentovisit($title_meta_tag)
    {       
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->where('title_meta_tag',$title_meta_tag)
							->with('state_name','primary_image')								
							->get();	
			

		$destinationimage=Destinationimage::where('destination_id',$destinations[0]->id)
							->where('status',1)
							->where('deleted',0)
							->orderBy('id','DESC')
							->get();
        
            
		return view('destination.when_to_visit', [ 'destinations' => $destinations, 'destinationimage' => $destinationimage, 'page' => 'when-to-visit']);  
    }
    
    public function getWhattoeat($title_meta_tag)
    {       
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->where('title_meta_tag',$title_meta_tag)
							->with('state_name','primary_image')								
							->get();	
			

		$destinationimage=Destinationimage::where('destination_id',$destinations[0]->id)
							->where('status',1)
							->where('deleted',0)
							->orderBy('id','DESC')
							->get();
        
            
		return view('destination.what_to_eat', [ 'destinations' => $destinations, 'destinationimage' => $destinationimage, 'page' => 'what-to-eat']);  
    }

}

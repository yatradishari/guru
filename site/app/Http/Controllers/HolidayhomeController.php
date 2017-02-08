<?php namespace App\Http\Controllers;
use App\Model\Destination;
use App\Model\Holidayhome;
use App\Model\State;
//use App\Model\Destinationimage;

class HolidayhomeController extends Controller {

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
	public function getIndex($state_id=0)
	{ 
    
        //if(!empty(Input::get('search')))
        //{
        //    $search = Input::get('search');
        //}
      
        /*$holidayhomes=Holidayhome::where('visibility',1)						 
                                ->where('deleted',0)		
                               // ->where('state_id',$state_id)                                
                                ->with('state_name')                              
                                //->paginate(env('PER_PAGE'));
                                ->get();*/
       // $holidayhomes->setPath('holidayhomes');
       // return view('holidayhome.list', [ 'data' => $holidayhomes]);      
        if($state_id>0)
        {           
            $holidayhomes=Holidayhome::where('visibility',1)						 
                                ->where('deleted',0)		
                                ->where('state_id',$state_id)                                
                                ->with('state_name')                              
                                ->paginate(env('PER_PAGE'));
                 
            $holidayhomes->setPath('holidayhomes');
            return view('holidayhome.home_list', [ 'data' => $holidayhomes]);      
        }
        else
        {
            $holidayhomes=Holidayhome::where('visibility',1)						 
                                ->where('deleted',0)       
                                ->with('state_name')
                                ->groupBy('state_id')
                                ->paginate(env('PER_PAGE'));
            $holidayhomes->setPath('holidayhomes');
            return view('holidayhome.list', [ 'data' => $holidayhomes]);      
        }
          
	}
    
    public function getDetails($id)
	{  
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->where('id',$id)
							->with('state_name','primary_image')								
							->get();	
							
		$destinationimage=Destinationimage::where('destination_id',$id)
							->where('status',1)
							->where('deleted',0)
							->orderBy('id','DESC')
							->get();
        
            
		return view('destination.details', [ 'destinations' => $destinations, 'destinationimage' => $destinationimage]);
	}

}

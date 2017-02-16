<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\DashboardRepository;
Use Visitor ; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Model\State;
use App\Model\Destination;
use App\Model\Destinationimage;
use Illuminate\Support\Facades\Input;

class DestinationController extends Controller {

	//protected $dashboard;
	
	//public function __construct( DashboardRepository $dashboard )
	//{
		//$this->dashboard = $dashboard;
	//}	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function getState()
	{
        dd("X");
		$destination=Destination::where('deleted',0)
					->with('state_name','primary_image')
					->orderBy('location_name','ASC')
					->get();		
		return View('admin.destination.index', [		
					'destinations' => $destination,
				]);
		
	}
	
	public function getCreate()
	{
		$state=State::where('status',1)
					->orderBy('name','ASC')
					->get();	
		return View('admin.destination.create', [		
					'states' => $state,
				]);
	}
	
	public function postStore(Request $request)
	{
		$state_id=$request->get('state_id');
		$location_name=$request->get('location_name');
		$description=$request->get('description');
		$how_to_reach=$request->get('how_to_reach');
		$when_to_visit=$request->get('when_to_visit');
		$status=1;
		
		$destination = new Destination();
		$destination->state_id = $state_id;
		$destination->location_name = $location_name;
		$destination->description = $description;
		$destination->how_to_reach = $how_to_reach;
		$destination->when_to_visit = $when_to_visit;
		$destination->status = $status;		
		$destination->save();
		
		return redirect('admin/destination');
		
	}

	public function getEdit($id)
	{
		$destination=Destination::where('id',$id)->first();
		
		$state=State::where('status',1)
					->orderBy('name','ASC')
					->get();
		
		return View('admin.destination.edit', [		
					'destination' => $destination,
					'states' => $state,
					'id' => $id,
				]);
	}
	
	public function postUpdate(Request $request)
	{
		$id=$request->get('id');
		$state_id=$request->get('state_id');
		$location_name=$request->get('location_name');
		$description=$request->get('description');
		$how_to_reach=$request->get('how_to_reach');
		$when_to_visit=$request->get('when_to_visit');
		$visibility=$request->get('visibility');
		$type=$request->get('type');
		
		$destination = Destination::find($id);
		$destination->state_id = $state_id;
		$destination->location_name = $location_name;
		$destination->description = $description;
		$destination->how_to_reach = $how_to_reach;
		$destination->when_to_visit = $when_to_visit;
		$destination->visibility = $visibility;		
		$destination->type = $type;		
		$destination->save();
		
		return redirect('admin/destination');
	}
	
	public function getDelete($id)
	{		
		$destination = Destination::find($id);
		$destination->deleted = 1;		
		$destination->save();
		
		return redirect('admin/destination');
	}
	
	public function getImage()
	{
		$destinationimage=Destinationimage::where('status',1)->where('deleted',0)->get();
		
		return View('admin.destination.image_list', [		
					'destinationimages' => $destinationimage,					
				]);
	}
	public function getUploadimage($id='')
	{		
		$destination=Destination::where('deleted',0)
					->with('state_name')
					->orderBy('location_name','ASC')
					->get();		
		return View('admin.destination.uploadimage', [		
					'destinations' => $destination,
					'id' =>$id,
				]);				
			
	}
	
	public function getDeleteimage($id)
	{	
	//	dd($id);
		$destination = Destinationimage::find($id);
		$destination->deleted = 1;		
		$destination->save();
		
		return redirect('admin/destination/image');
	}
	
	public function postStroreimage(Request $request)
	{
		
		$input = Input::all();
		$destination_id=Input::get('destination_id');
		
		$file = array_get($input,'destination_image');
		
		$destinationPath = env('UPLOADS');
		// GET THE FILE EXTENSION
		$image_ext = $file->getClientOriginalExtension();
		// RENAME THE UPLOAD WITH RANDOM NUMBER
		$image_only_name=time().rand(1,11111);
		//$image_ext = $request->file('destination_image')->getClientOriginalExtension();
		$final_image_name=$image_only_name.".".$image_ext;
		// MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
		$upload_success = $file->move($destinationPath, $final_image_name);
		
				
		$destinationimage = new Destinationimage();
		$destinationimage->image_name = $final_image_name;
		$destinationimage->destination_id = $destination_id;
		$destinationimage->status = 1;		
		$destinationimage->save();
		
		$destination_primary = Destination::where('primary_image_id','>','0')
								->where('id',$destination_id)
								->count();
		//dd($destination_primary);	
		if($destination_primary==0)
		{
			$destination = Destination::find($destination_id);
			$destination->primary_image_id = $destinationimage->id;			
			$destination->save();
		}
		
		return redirect('admin/destination');
	}
}

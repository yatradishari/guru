<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Model\User;
use Hash;
use Auth;

class MemberController extends Controller {

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
        
            return view('member.index');      
       
          
	}
    
    public function postSignin(Request $request)
	{
        
       //dd("X");
		$username = $request->get('username');
		$password = $request->get('password');
        
        $userdata = array(
            'username' => $username,
            'password' => $password
        );
		
        //dd($username);
        if (Auth::validate($userdata)) {
            if (Auth::attempt($userdata)) {
               // return Redirect::intended('/');
              // dd("X");
               return Redirect::to('member/myaccount');
            }
        }
		
		
	}

	public function getLogout()
	{
		Auth::logout();
dd("a");
		return Redirect::to('/auth')
		->withInput()
		->with('message', 'You have logout successfully.');
	}
    
    public function getRegister()
    {
        return view('member.register');    
    }
    
    public function postRegister(Request $request)
    {
       // dd("X");
        $rules = array(
            'name' => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required'
        );

        $validator = \Validator::make($request->all(), $rules);
       ;
        if ($validator->fails()) 
        {
            $messages = $validator->messages();
            // redirect our user back to the form with the errors from the validator
            return redirect()->back()
                ->withInput($request->only('name', 'email', 'username'))
                ->withErrors($validator);
        } 
        else 
        {            
            $input           = $request->all();
            $input['approve']   = "0";
            $input['username']   = $request->get('email');
            $input['password']   = Hash::make($request->get('password'));
          
            User::create($input);

            return Redirect::to('member/myaccount')
                ->withMessage('User added successfully.');
        }  
    }
    
    public function getMyaccount()
	{
        $uuu=Auth::User();
        dd($uuu);
        return view('member.myaccount',['uuu'=>$uuu]);    
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

<?php namespace App\Http\Controllers;
use App\Model\State;
use App\Model\Operator;
class OperatorController extends Controller {

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
        $operator=Operator::where('display',1)
                  ->orderBy('member_type','DESC')
                  ->orderBy('agent_name','ASC')
                  ->get();
		return view('operator.list', [ 'data' => $operator]);
	}

}

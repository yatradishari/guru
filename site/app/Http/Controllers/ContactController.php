<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller {

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
		return view('contact.index');
	}
    
    public function postSend(Request $request)
	{ 
        $user_name=$request->get('user_name');
        $user_email=$request->get('user_email');
        $user_phone=$request->get('user_phone');
        $user_message=$request->get('message');
		$mail_body='<table width="25%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td colspan="2">Dear Administrator,</td>
            </tr>
            <tr>
                <td colspan="2">A user has contact you with following details:</td>
            </tr>
            <tr>
                <td>Name :</td>
                <td>'.$user_name.'</td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>'.$user_email.'</td>
            </tr>
            <tr>
                <td>Phone :</td>
                <td>'.$user_phone.'</td>
            </tr>
            <tr>
                <td>Message :</td>
                <td>'.$user_message.'</td>
            </tr>
        </table>';
        $admin_email = "haripal.uday@gmail.com";
        $admin_name = env('MAIL_NAME');

        $data = array(
                    'mail_body' => $user_message
                );
                
        Mail::send('emails.common', $data, function ($message) use ($user_email, $admin_email, $admin_name, $user_name) {

            $message->from($user_email, $user_name);

            $message->to($admin_email)->subject('Reset Your Password');

        });
	}

}

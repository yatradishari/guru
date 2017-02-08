<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

//use App\Presenters\DatePresenter;

class User extends Model  {

	//use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $table = "users";
    protected $fillable = [
        'username',
        'name',
        'email',        
        'password',        
        'user_type',
        'approve',
    ];

    protected $hidden = [           
        'remember_token'
    ];

 	
    
}
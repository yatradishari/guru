<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Operatorservice extends Model  {

	//use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'operator_service';
    
    public function service_name()
	{
	  return $this->hasOne('App\Model\Service', 'id', 'service_id');
	}
   
}
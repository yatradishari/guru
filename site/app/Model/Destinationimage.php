<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Destinationimage extends Model  {

	//use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'destination_image';

 	
    public function state_name()
	{
	  return $this->hasOne('App\Model\State', 'id', 'state_id');
	}
	
	public function primary_image()
	{
	  return $this->hasOne('App\Model\State', 'id', 'state_id');
	}
}
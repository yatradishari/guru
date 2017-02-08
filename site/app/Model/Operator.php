<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Operator extends Model  {

	//use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tour_operator';

 	
    public function state_name()
	{
	  return $this->hasOne('App\Model\State', 'id', 'state_id');
	}
	
	public function primary_image()
	{
	  return $this->hasOne('App\Model\Destinationimage', 'id', 'primary_image_id');
	}
}
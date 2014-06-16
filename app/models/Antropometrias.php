<?php

class Antropometrias extends Eloquent {
	protected $guarded = array();
	protected $table = 'antropometrias';
	public static $rules = array();

	public function usuarios()
	{
        return $this->belongsTo('User');
    }
}

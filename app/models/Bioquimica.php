<?php

class Bioquimica extends Eloquent {
	protected $guarded = array();
	protected $table = 'bioquimicas';
	public static $rules = array();

	public function usuarios()
	{
        return $this->belongsTo('User');
    }
}

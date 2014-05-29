<?php

class Group extends \Eloquent {

    /**
     * @var string
     */
    protected $primaryKey = 'wbid';
    /**
     * @var bool
     */
    public $incrementing = false;

    // Don't forget to fill this array
    /**
     * @var array
     */
    protected $fillable = array('name');

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

}
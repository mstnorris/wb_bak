<?php

class Group extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';
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
    protected $fillable = array('name', 'type', 'wbid', 'module_wbid');

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

    public function module() {
        return $this->belongsTo('Module', 'module_wbid', 'wbid');
    }

    public function materials() {
        return $this->hasMany('Material', 'group_wbid', 'wbid');
    }

}
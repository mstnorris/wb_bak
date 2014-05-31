<?php

class Material extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'materials';

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
    protected $fillable = array('wbid', 'name', 'description', 'type', 'group_wbid');

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

    public function group() {
        return $this->belongsTo('Group', 'group_wbid', 'wbid');
    }

}
<?php

class University extends \Eloquent {

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schools() {
        return $this->hasMany('School', 'university_wbid', 'wbid');
    }

    public function mdbid() {
        return $this->hasOne('Wbid', 'wbid', 'wbid');
    }

}
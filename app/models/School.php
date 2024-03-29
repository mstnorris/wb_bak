<?php

class School extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function university() {
        return $this->belongsTo('University', 'university_wbid', 'wbid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses() {
        return $this->hasMany('Course', 'school_wbid', 'wbid');
    }
}
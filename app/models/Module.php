<?php

class Module extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function course() {
        return $this->belongsTo('Course', 'course_wbid', 'wbid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups() {
        return $this->hasMany('Group', 'group_wbid', 'wbid');
    }
}
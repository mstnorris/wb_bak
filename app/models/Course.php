<?php

class Course extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function school() {
        return $this->belongsTo('School', 'school_wbid', 'wbid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modules() {
        return $this->hasMany('Module', 'module_wbid', 'wbid');
    }

}
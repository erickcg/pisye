<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
	use SoftDeletes;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'level_id', 'semester_id'
	];

	/**
	* The attributes that should be mutated to dates
	*
	* @var array
	*/
	protected $dates = [
		'deleted_at'
	];

	public function level() {
		return $this->belongsTo('App\Model\Level');
	}

	public function teachers() {
		return $this->belongsToMany('App\Model\User', 'group_teacher');
	}

	public function subject() {
		return $this->belongsTo('App\Model\Subject');
	}

	public function semester() {
		return $this->belongsTo('App\Model\Semester');
	}

	public function students() {
		return $this->belongsToMany('App\Model\User', 'group_student');
	}
}

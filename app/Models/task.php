<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'task';
	protected $primaryKey = 'task_id';

    protected $casts = [
		'task_id' => 'int',
		'task_actual_hour' => 'int',
		'task_user_stories_id' => 'int',
		'task_users_id' => 'int'
	];

	protected $fillable = [
        'task_id ',
		'task_title',
		'task_des',
		'task_status',
		'task_estimated_hour',
		'task_actual_hour',
		'task_user_stories_id',
		'task_users_id ',
		'created_at',
	];

	public function users()
	{
		return $this->belongsTo(users::class, 'task_users_id');
	}

    public function stories()
	{
		return $this->belongsTo(user_stories::class, 'task_user_stories_id');
	}
}

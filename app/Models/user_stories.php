<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_stories extends Model
{
    protected $table = 'user_stories';
	protected $primaryKey = 'user_stories_id';

    protected $casts = [
		'user_stories_id' => 'int',
		'sprint_id' => 'int',
	];

	protected $fillable = [
        'user_stories_id ',
		'user_stories_title',
		'user_stories_des',
		'sprint_id',
		'created_at',
	];

	public function sprint()
	{
		return $this->belongsTo(sprints::class, 'sprint_id');
	}

}

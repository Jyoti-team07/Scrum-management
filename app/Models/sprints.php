<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sprints extends Model
{
    protected $table = 'sprints';
	protected $primaryKey = 'sprints_id';

    protected $casts = [
		'sprints_id' => 'int',
		'sprints_start_date' => 'date',
		'sprints_end_date' => 'date'
	];

	protected $fillable = [
        'sprints_id',
		'sprints_name',
		'sprints_start_date',
		'sprints_end_date',
		'sprints_status',
		'created_at',
	];
}

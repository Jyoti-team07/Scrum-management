<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
	protected $primaryKey = 'users_id ';

    protected $casts = [
		'users_id ' => 'int',
	];

	protected $fillable = [
        'users_id',
		'users_name',
		'users_role',
		'create_at ',
	];

}

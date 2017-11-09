<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
	/*
	 * Define table
	 */
	protected $table = 'data';

	/*
	 * Define columns of table
	 */
    protected $fillable = [
        'date', 'temp', 'pH'
    ];
    
    public $timestamps = false;

    const DATA_LIMIT = 10;
}

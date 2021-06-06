<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_Details extends Model
{
	protected $fillable = [
        'step', 'title', 'content', 'thumbnail', 'idService',
    ];
    //
}

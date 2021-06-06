<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public function users_comment () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
	}

	public function emp_comment () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idEmp', ownerKey:'id');
	}
    //
}

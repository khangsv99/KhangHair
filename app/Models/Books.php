<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
	public function users_book () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
	}

	public function emp_book () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idEmp', ownerKey:'id');
	}
    //
}

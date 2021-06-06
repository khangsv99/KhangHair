<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

	protected $fillable = [
        'idPro', 'idUser', 'amount',
    ];

	public function products () {
		return $this->belongsTo(related: 'App\Models\Products', foreignKey:'idPro', ownerKey:'idPro');
	}

	public function users () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
	}
    //
}

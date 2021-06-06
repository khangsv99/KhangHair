<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
        'idOrder', 'vnp_Amount', 'vnp_BankCode', 'vnp_BankTranNo', 'vnp_CardType', 'vnp_OrderInfo', 'vnp_PayDate', 'vnp_ResponseCode', 'vnp_TmnCode', 'vnp_TransactionNo', 'vnp_TxnRef', 'vnp_SecureHashType', 'vnp_SecureHash', 
    ];

	public function payer () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
	}

	public function order () {
		return $this->belongsTo(related: 'App\Models\Order', foreignKey:'idOrder', ownerKey:'idOrder');
	}
    //
}

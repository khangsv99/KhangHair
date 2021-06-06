<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'user';
    protected $fillable = [
        'name', 'phone', 'email', 'password', 'token', 'human_rights',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

    public function cart(){
        return $this->hasMany(related: 'App\Models\Cart', foreignKey: 'idUser', localKey: 'id');
    }

    public function user_book(){
        return $this->hasMany(related: 'App\Models\Books', foreignKey: 'idUser', localKey: 'id');
    }

    public function Emp_book(){
        return $this->hasMany(related: 'App\Models\Books', foreignKey: 'idEmp', localKey: 'id');
    }

    public function user_comment(){
        return $this->hasMany(related: 'App\Models\Comment', foreignKey: 'idUser', localKey: 'id');
    }

    public function emp_comment(){
        return $this->hasMany(related: 'App\Models\Comment', foreignKey: 'idEmp', localKey: 'id');
    }

    public function payer(){
        return $this->hasMany(related: 'App\Models\Payments', foreignKey: 'payer', localKey: 'id');
    }
}

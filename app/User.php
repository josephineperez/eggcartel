<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //https://laravel.com/docs/5.3/eloquent-relationships
    public function orders()
    {
        return $this->hasMany('App\Order');
    }


    // public function scopeOrderStuff($query)
    // {
    //     return $query->with('orders.');
    // }


}

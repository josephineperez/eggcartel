<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];

    

    //https://laravel.com/docs/5.3/eloquent-relationships
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   	public function items()
    {
        return $this->hasMany('App\Item');
    }


}

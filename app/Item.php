<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'for_person',
        'base_id',
        'order_id',
        'egg_id'

    ]; 

    
    public function order()
    {
        return $this->belongsToOne('App\Order');
    }

    public function eggs()
    {
        return $this->belongsToMany('App\Egg');
    }

    public function base()
    {
        return $this->belongsTo('App\Base');
    }

    public function cheeses()
    {
        return $this->belongsToMany('App\Cheese');
    }

    public function meats()
    {
        return $this->belongsToMany('App\Meat');
    }

    public function toppings()
    {
        return $this->belongsToMany('App\Topping');
    }

}

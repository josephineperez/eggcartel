<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    protected $fillable = [
    	'name'
    ]; 

    public function item()
    {
        return $this->belongsToMany('App\Topping');
    }
}

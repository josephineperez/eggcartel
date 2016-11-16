<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $fillable = [
    	'name',
    	'price'
    ]; 

    public function item()
    {
    	return $this->hasMany('App\Item');
    }
}

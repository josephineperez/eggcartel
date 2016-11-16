<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    
     protected $fillable = [
    	'style'
    ]; 

    public function item()
    {
        return $this->belongsToMany('App\Egg');
    }


}

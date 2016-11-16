<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    
    protected $fillable = [
    	'name',
    	'description',
    ]; 

    //https://laravel.com/docs/5.3/eloquent-relationships
	public function cats()
    {
       return $this->belongsToMany('App\Cat');
    }



}

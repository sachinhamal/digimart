<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable=['title'];

    public function OrmScreen(){
    	return $this->hasMany('App\ScreenLocator','location_id');
    }
}

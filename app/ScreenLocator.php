<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreenLocator extends Model
{
    protected $table='screen_locator';
    protected $fillable=['title','description','image','status','location_id'];

    public function orm_location(){
    	return $this->belongsTo('App\Location','location_id');
    }
}

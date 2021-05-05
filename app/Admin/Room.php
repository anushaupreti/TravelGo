<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    public function getFeaturedAttribute($featured)
	{
		return asset($featured);
	}
    public function hotel()
    {
        return $this->belongsTo('App\Admin\Hotel','hotel_id');
    }
     public function facilities()
     {
         return $this->belongsToMany('App\Admin\Facility','facility_rooms');
     }

     public function roomimages()
     {
         return $this->hasMany('App\Admin\Roomimage');
     }


    public function roommanagement()
    {
        return $this->belongsTo('App\Admin\RoomManagement','room_id');
    }

}

<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class RoomManagement extends Model
{

    public function rooms()
    {
        return $this->belongsTo('App\Admin\Room','room_id');
    }

}

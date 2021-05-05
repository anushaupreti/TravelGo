<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{

    protected $fillable=['name'];
    public function rooms()
    {
        return $this->belongsToMany('App\Admin\Room','facility_rooms');
    }
}

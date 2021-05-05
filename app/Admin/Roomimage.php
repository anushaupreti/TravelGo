<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Roomimage extends Model
{
    protected $fillable=['room_id',"images"];

    public function rooms()
    {
      return $this->belongsToMany('App\Admin\Room');
    }
}

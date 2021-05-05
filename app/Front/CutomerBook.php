<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class CutomerBook extends Model
{

    protected $fillable=["room_id","fullname","address","phone","checkin","checkout","arrival"];

}

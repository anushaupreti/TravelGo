<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['check_in','check_out'];
}

<?php

namespace App\Admin;
use App\Admin\Hotel;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class,'category_hotels');
    }
}

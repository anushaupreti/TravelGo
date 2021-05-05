<?php

namespace App\Admin;
use App\Admin\Category;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{

    protected $fillable=['name','type','state','location','city'];

    public function rooms()
    {
        return $this->hasMany('App\Admin\Room','hotel_id');
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_hotels')->withPivot(['name']);;
    }
}

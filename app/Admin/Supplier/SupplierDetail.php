<?php

namespace App\Admin\Supplier;

use Illuminate\Database\Eloquent\Model ;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class SupplierDetail extends Model implements AuthenticatableContract
{
     use Authenticatable;
    protected $fillable=['fullname','email','phone','address','password'];
}

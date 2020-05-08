<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as userModel;

class User extends userModel
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
//    protected $guarded = [];
    protected $fillable = ['id','username','password','created_at','updated_at','deleted_at'];
}

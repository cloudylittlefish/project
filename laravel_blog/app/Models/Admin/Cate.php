<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cate extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
//    protected $guarded = [];
    protected $fillable = ['id','cate_name','keywords','description','created_at','updated_at','deleted_at'];
}

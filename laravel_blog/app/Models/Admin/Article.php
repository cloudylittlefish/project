<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
//    protected $guarded = [];
    protected $fillable = ['id','title','pic','keywords','description','created_at','updated_at','deleted_at','content','click','cate_id'];

    //模型关联
    public function cate(){
        return $this->hasOne(Cate::class,'id','cate_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_sanpham extends Model
{
    use HasFactory;
    protected $table="sanpham";
    protected $primaryKey="ID_sanpham";
    public $incrementing = false;
    public function danhmuc(){
        return $this->belongsToMany(Model_danhmuc::class, "ID_danhmuc", "ID_danhmuc");
    }
    public function chitietsanpham(){
        return $this->hasOne(Model_chitietsanpham::class, "ID_sanpham","ID_sanpham");
    }
    public function danhgia(){
        return $this->hasMany(Model_danhgia::class, "ID_sanpham","ID_sanpham");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_danhmuc extends Model
{
    use HasFactory;
    protected $table="danhmuc";
    protected $primaryKey="ID_category";
    public function sanpham(){
        return $this->hasMany(Model_sanpham::class, "ID_category", "ID_category");
    }
}

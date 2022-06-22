<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_nhanvien extends Model
{
    use HasFactory;
    protected $table="nhanvien";
    protected $primaryKey="ID_nhanvien";
    public function login(){
        return $this->hasOne(Model_login::class, "ID_nhanvien","ID_nhanvien");
    }
    public function giohang(){
        return $this->hasMany(Model_giohang::class, "ID_nhanvien","ID_nhanvien");
    }
}

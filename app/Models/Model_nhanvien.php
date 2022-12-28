<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_nhanvien extends Model
{
    use HasFactory;
    protected $table="nhanvien";
    protected $primaryKey="ID_staff";
    public function login(){
        return $this->hasOne(Model_login::class, "ID_staff","ID_staff");
    }
    public function giohang(){
        return $this->hasMany(Model_giohang::class, "ID_staff","ID_staff");
    }
}

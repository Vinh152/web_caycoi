<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_giohang extends Model
{
    use HasFactory;
    protected $table="giohang";
    public function chitietgiohang(){
        return $this->hasOne(Model_chitietgiohang::class, "ID_giohang","ID_giohang");
    }
}

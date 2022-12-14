<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_giohang extends Model
{
    use HasFactory;
    protected $table="giohang";
    protected $primaryKey="ID_cart";
    public $incrementing = false;
    public function chitietgiohang(){
        return $this->hasMany(Model_chitietgiohang::class, "ID_cart","ID_cart");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_chitietgiohang extends Model
{
    use HasFactory;
    protected $table="chitietgiohang";
    public function giohang(){
        return $this->belongsToMany(Model_giohang::class, "ID_cart","ID_cart");
    }
}

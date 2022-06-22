<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_danhgiasanpham extends Model
{
    use HasFactory;
    protected $table="danhgiasanpham";
    public function sanpham(){
        return $this->belongsToMany(Model_sanpham::class, "ID_sanpham", "ID_sanpham");
    }
}

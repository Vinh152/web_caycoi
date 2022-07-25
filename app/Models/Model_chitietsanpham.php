<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_chitietsanpham extends Model
{
    use HasFactory;
    protected $table="chitietsanpham";
    protected $primaryKey = 'ID_sanpham';
    public function sanpham(){
        return $this->belongsTo(Model_sanpham::class, "ID_sanpham", "ID_sanpham");
    }
}

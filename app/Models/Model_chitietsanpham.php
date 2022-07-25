<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_chitietsanpham extends Model
{
    use HasFactory;
    protected $table="chitietsanpham";
    public $primaryKey = '_id';
    public function sanpham(){
        return $this->belongsTo(Model_sanpham::class, "ID_sanpham", "ID_sanpham");
    }
}

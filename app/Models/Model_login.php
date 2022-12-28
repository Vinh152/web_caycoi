<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_login extends Model
{
    use HasFactory;
    protected $table="loginnhanvien";
    public function chitietsanpham(){
        return $this->belongsTo(Model_nhanvien::class, "ID_staff","ID_staff");
    }
    
}

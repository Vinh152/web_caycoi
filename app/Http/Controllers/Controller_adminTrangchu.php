<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_nhanvien;
use App\Models\Model_sanpham;
use App\Models\Model_giohang;
use App\Models\Model_tintuc;
class Controller_adminTrangchu extends Controller
{
    public function index(){
        $count_nhanvien=Model_nhanvien::all();
        $count_sanpham=Model_sanpham::all();
        $count_giohang=Model_giohang::all();
        $count_tintuc=Model_tintuc::all();
        return view("admin.trangchu", compact('count_nhanvien', 'count_sanpham', 'count_giohang', 'count_tintuc'));
    }
}

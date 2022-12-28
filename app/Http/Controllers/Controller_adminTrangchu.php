<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_nhanvien;
use App\Models\Model_sanpham;
use App\Models\Model_giohang;
use App\Models\Model_tintuc;
use App\Models\Model_doanhthu;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Month;

class Controller_adminTrangchu extends Controller
{
    public function index(){
        $count_nhanvien=Model_nhanvien::all();
        $count_sanpham=Model_sanpham::all();
        $count_giohang=Model_giohang::all();
        $count_tintuc=Model_tintuc::all();
        $date = getdate();
        $year=$date['year'];
        $thang1=Model_giohang::whereMonth ('created_at', 1)->whereYear('created_at', $year)->sum("total");
        $thang2=Model_giohang::whereMonth ('created_at', 2)->whereYear('created_at', $year)->sum("total");
        $thang3=Model_giohang::whereMonth ('created_at', 3)->whereYear('created_at', $year)->sum("total");
        $thang4=Model_giohang::whereMonth ('created_at', 4)->whereYear('created_at', $year)->sum("total");
        $thang5=Model_giohang::whereMonth ('created_at', 5)->whereYear('created_at', $year)->sum("total");
        $thang6=Model_giohang::whereMonth ('created_at', 6)->whereYear('created_at', $year)->sum("total");
        $thang7=Model_giohang::whereMonth ('created_at', 7)->whereYear('created_at', $year)->sum("total");
        $thang8=Model_giohang::whereMonth ('created_at', 8)->whereYear('created_at', $year)->sum("total");
        $thang9=Model_giohang::whereMonth ('created_at', 9)->whereYear('created_at', $year)->sum("total");
        $thang10=Model_giohang::whereMonth ('created_at', 10)->whereYear('created_at', $year)->sum("total");
        $thang11=Model_giohang::whereMonth ('created_at', 11)->whereYear('created_at', $year)->sum("total");
        $thang12=Model_giohang::whereMonth ('created_at', 12)->whereYear('created_at', $year)->sum("total");
        return view("admin.trangchu", compact('count_nhanvien', 'count_sanpham', 'count_giohang', 'count_tintuc', 'thang1',"thang2","thang3","thang4","thang5","thang6","thang7","thang8","thang9","thang10","thang11","thang12", "year"));
        // return view("admin.trangchu", compact('count_nhanvien', 'count_sanpham', 'count_giohang', 'count_tintuc', "test","year"));
    }
}

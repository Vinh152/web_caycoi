<?php

namespace App\Http\Controllers;

use App\Models\Model_doanhthu;
use App\Models\Model_giohang;
use Illuminate\Http\Request;
use MicrosoftAzure\Storage\Common\Internal\Validate;
use App\Exports\Doanhthu_export;
use Maatwebsite\Excel\Facades\Excel;
class Controller_doanhthu extends Controller
{
    public function index(){
        $date = getdate();
        $month=$date['mon'];
        $year=$date['year'];
        $doanhthu=Model_giohang::whereMonth ('created_at', $month)->whereYear('created_at', $year)->get();
        $tongdoanhthu=0;
        foreach($doanhthu as $row)
        {
            $tongdoanhthu=$tongdoanhthu+$row->tong_don_hang;
        };
        session()->put("tongdoanhthu", $tongdoanhthu);
        session()->put("thang", $month);
        session()->put("nam", $year);
        return view("admin.doanhthu_donhang", compact('doanhthu'));
    }

    public function show(Request $request)
    {
        $request->validate([
            "thang"=>"required",
            "nam"=>"required",
        ],[
            "thang.required"=>"Mời bạn nhập tháng",
            "nam.required"=>"Mời bạn nhập năm",
        ]);
        $month=$request->thang;
        $year=$request->nam;
        $doanhthu=Model_giohang::whereMonth ('created_at', $month)->whereYear('created_at', $year)->get();
        $tongdoanhthu=0;
        foreach($doanhthu as $row)
        {
            $tongdoanhthu=$tongdoanhthu+$row->tong_don_hang;
        };
        session()->put("tongdoanhthu", $tongdoanhthu);
        session()->put("thang", $month);
        session()->put("nam", $year);
        return view("admin.doanhthu_donhang", compact('doanhthu'));
    }

    public function save(){
        $thang=session()->get("thang");
        $nam=session()->get("nam");
        $tongdoanhthu=session()->get("tongdoanhthu");
        $doanhthu=new Model_doanhthu();
        $tendoanhthu="Doanh thu tổng đơn hàng của tháng ".$thang." năm ".$nam;
        $doanhthu->revenue=$tendoanhthu;
        $doanhthu->month=$thang;
        $doanhthu->year=$nam;
        $doanhthu->total=$tongdoanhthu;
        $doanhthu->save();
        return redirect()->route("doanhthu.index");
    }

    public function index_doanhthu(){
        $doanhthu=Model_doanhthu::all();
        return view("admin.doanhthu", compact("doanhthu"));
    }

    public function export(){
        return Excel::download(new Doanhthu_export, 'users.xlsx');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Model_danhmuc;
class Controller_danhmuc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Model_danhmuc::all();
        return view('admin.danhmuc', compact("datas"));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        if (View::exists('admin.danhmuc_them')) {
            return view('admin.danhmuc_them');
        }
        else{
            echo "không";
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "tendanhmuc"=>"required",
            "icon"=>"required",
        ],[
            "tendanhmuc.required"=>"Mời bạn điền tên danh mục",
            "icon.required"=>"Mời bạn điền icon danh mục(lên google search font awesome để lấy icon)",
        ]);
        $danhmuc=new Model_danhmuc();
        $danhmuc->ten_danh_muc=$request->tendanhmuc;
        $danhmuc->icon_danh_muc=$request->icon;
        $danhmuc->save();
        return redirect()->route('admin_danhmuc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Model_danhmuc::where("Id_danhmuc", $id)->first();
        return view("admin.danhmuc_sua", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $danhmuc= Model_danhmuc::where("ID_danhmuc", $id)->first();
        $request->validate([
            "tendanhmuc"=>"required",
            "icon"=>"required",
        ],[
            "tendanhmuc.required"=>"Mời bạn điền tên danh mục",
            "icon.required"=>"Mời bạn điền icon danh mục(lên google search font awesome để lấy icon)",
        ]);
        $danhmuc->ten_danh_muc=$request->tendanhmuc;
        $danhmuc->icon_danh_muc=$request->icon;
        $danhmuc->save();
        return redirect()->route('admin_danhmuc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $danhmuc= Model_danhmuc::where("ID_danhmuc", $id)->first();
        $danhmuc->delete();
        return redirect()->route('admin_danhmuc.index');
    }
}

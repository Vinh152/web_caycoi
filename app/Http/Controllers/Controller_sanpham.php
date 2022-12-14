<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Model_danhmuc;
use App\Models\Model_sanpham;
use App\Models\Model_chitietsanpham;
use Illuminate\Support\Facades\File;

class Controller_sanpham extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= Model_sanpham::all();
        return view("admin.sanpham", compact("datas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas_danhmuc=Model_danhmuc::all();
        return view("admin.sanpham_them", compact("datas_danhmuc"));
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
            "tensanpham"=>"required",
            "anh1"=>"required",
            "anh2"=>"required",
            "anh3"=>"required",
            "anh4"=>"required",
            "giatien"=>"required",
            "soluong"=>"required",
            "ID_danhmuc"=>"required",
            "mota"=>"required",
        ],[
            "tensanpham.required"=>"Mời bạn điền thông tin",
            "anh1.required"=>"Mời bạn điền thông tin",
            "anh2.required"=>"Mời bạn điền thông tin",
            "anh3.required"=>"Mời bạn điền thông tin",
            "anh4.required"=>"Mời bạn điền thông tin",
            "giatien.required"=>"Mời bạn điền thông tin",
            "soluong.required"=>"Mời bạn điền thông tin",
            "ID_danhmuc.required"=>"Mời bạn điền thông tin",
            "mota.required"=>"Mời bạn điền thông tin",
        ]);

        if($request->has('anh1'))
        {
            $file=$request->anh1;
            $file_name_anh1=$file->getClientOriginalName();
            $file->move(\public_path('img_sanpham'), $file_name_anh1);
        }
        if($request->has('anh2'))
        {
            $file=$request->anh2;
            $file_name_anh2=$file->getClientOriginalName();
            $file->move(\public_path('img_sanpham'), $file_name_anh2);
        }
        if($request->has('anh3'))
        {
            $file=$request->anh3;
            $file_name_anh3=$file->getClientOriginalName();
            $file->move(\public_path('img_sanpham'), $file_name_anh3);
        }
        if($request->has('anh4'))
        {
            $file=$request->anh4;
            $file_name_anh4=$file->getClientOriginalName();
            $file->move(public_path('img_sanpham'), $file_name_anh4);
        }
        $sanpham=new Model_sanpham();
        $ID_sanpham=rand();
        $sanpham->ID_product=$ID_sanpham;
        $sanpham->ID_category=$request->ID_danhmuc;
        $sanpham->product_name=$request->tensanpham;
        $sanpham->img=$file_name_anh1;
        $sanpham->money=$request->giatien;
        $sanpham->save();
        $chitiet=new Model_chitietsanpham();
        $chitiet->ID_product=$ID_sanpham;
        $chitiet->img1=$file_name_anh1;
        $chitiet->img2=$file_name_anh2;
        $chitiet->img3=$file_name_anh3;
        $chitiet->img4=$file_name_anh4;
        $chitiet->count=$request->soluong;
        $chitiet->text=$request->mota;
        $chitiet->save();
        return redirect()->route('admin_sanpham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data=Model_chitietsanpham::where('ID_sanpham',$id)->first();
        $data=Model_sanpham::find($id)->chitietsanpham;
        return view('admin.chitietsanpham', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_sanpham=Model_sanpham::where('ID_product',$id)->first();
        $data_chitiet=$data_sanpham->chitietsanpham;
        $datas_danhmuc=Model_danhmuc::all();
        return view('admin.sanpham_sua', compact('data_sanpham', 'data_chitiet', 'datas_danhmuc'));
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
        $sanpham=Model_sanpham::find($id);
        $request->validate([
            "tensanpham"=>"required",
            "giatien"=>"required",
            "soluong"=>"required",
            "mota"=>"required",
        ],[
            "tensanpham.required"=>"Mời bạn điền thông tin",
            "giatien.required"=>"Mời bạn điền thông tin",
            "soluong.required"=>"Mời bạn điền thông tin",
            "mota.required"=>"Mời bạn điền thông tin",
        ]);
        if($request->has('anh1') && $request->has('anh2') && $request->has('anh3') && $request->has('anh4'))
        {
            $file=$request->anh1;
            $file_name_anh1=$file->getClientOriginalName();
            $file->move(\public_path('img_sanpham'), $file_name_anh1);
            $file=$request->anh2;
            $file_name_anh2=$file->getClientOriginalName();
            $file->move(\public_path('img_sanpham'), $file_name_anh2);
            $file=$request->anh3;
            $file_name_anh3=$file->getClientOriginalName();
            $file->move(\public_path('img_sanpham'), $file_name_anh3);
            $file=$request->anh4;
            $file_name_anh4=$file->getClientOriginalName();
            $file->move(public_path('img_sanpham'), $file_name_anh4);
            if($request->ID_danhmuc!=$sanpham->ID_danhmuc)
            {
                $sanpham->ID_category=$request->ID_danhmuc;
                $sanpham->product_name=$request->tensanpham;
                $sanpham->img=$file_name_anh1;
                $sanpham->money=$request->giatien;
            }
            else{
                $sanpham->product_name=$request->tensanpham;
                $sanpham->img=$file_name_anh1;
                $sanpham->money=$request->giatien; 
            }
        $sanpham->chitietsanpham->img1=$file_name_anh1;
        $sanpham->chitietsanpham->img2=$file_name_anh2;
        $sanpham->chitietsanpham->img3=$file_name_anh3;
        $sanpham->chitietsanpham->img4=$file_name_anh4;
        $sanpham->chitietsanpham->count=$request->soluong;
        $sanpham->chitietsanpham->text=$request->mota;
        $sanpham->save();
        $sanpham->chitietsanpham->save();
        }


        else{
                if($request->ID_danhmuc!=$sanpham->ID_category)
                {
                    $sanpham->ID_category=$request->ID_danhmuc;
                    $sanpham->product_name=$request->tensanpham;
                    $sanpham->money=$request->giatien;
                }
                else{
                    $sanpham->product_name=$request->tensanpham;
                    $sanpham->money=$request->giatien;
                }
                $sanpham->chitietsanpham->count=$request->soluong;
                $sanpham->chitietsanpham->text=$request->mota;
                $sanpham->save();
                $sanpham->chitietsanpham->save();
        }
        return redirect()->route('admin_sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data_sanpham=Model_sanpham::find($id);
        // $anh=public_path('img_sanpham/'.$data_sanpham->anh);
        $anh='img_sanpham/'.$data_sanpham->img;
        $anh1='img_sanpham/'.$data_sanpham->chitietsanpham->img1;
        $anh2='img_sanpham/'.$data_sanpham->chitietsanpham->img2;
        $anh3='img_sanpham/'.$data_sanpham->chitietsanpham->img3;
        $anh4='img_sanpham/'.$data_sanpham->chitietsanpham->img4;
        // if(is_file($anh) && is_file($anh1) && is_file($anh2) && is_file($anh3) && is_file($anh4))
        if(File::exists($anh, $anh1, $anh2, $anh3, $anh4))
        {
            File::delete($anh, $anh1, $anh3, $anh4);
        }
        $data_sanpham->delete();
        return redirect()->route('admin_sanpham.index');
    }
}

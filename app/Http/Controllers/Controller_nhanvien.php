<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_nhanvien;
class Controller_nhanvien extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= Model_nhanvien::all();
        return view('admin.nhanvien', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nhanvien_them');
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
            'hoten'=>"required",
            'ngaysinh'=>"required",
            'email'=>"required",
            'gioitinh'=>"required",
            'chucvu'=>"required",
            'avatar'=>"required",
        ],[
            'hoten.required'=>"Mời bạn điền thông tin",
            'ngaysinh.required'=>"Mời bạn điền thông tin",
            'email.required'=>"Mời bạn điền thông tin",
            'gioitinh.required'=>"Mời bạn điền thông tin",
            'chucvu.required'=>"Mời bạn điền thông tin",
            'avatar.required'=>"Mời bạn điền thông tin",
        ]);

        if($request->has('avatar'))
        {
            $file=$request->avatar;
            $file_name=$file->getClientOriginalName();
            $file->move(public_path('avatar'), $file_name);
        }
        $nhanvien= new Model_nhanvien();
        $nhanvien->curname=$request->hoten;
        $nhanvien->birth=$request->ngaysinh;
        $nhanvien->email=$request->email;
        $nhanvien->sex=$request->gioitinh;
        $nhanvien->position=$request->chucvu;
        $nhanvien->save();
        return redirect()->route('admin_nhanvien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Model_nhanvien::find($id);
        return view('admin.nhanvien_sua', compact('data'));
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
        $request->validate([
            'hoten'=>"required",
            'ngaysinh'=>"required",
            'email'=>"required",
            'gioitinh'=>"required",
            'chucvu'=>"required",
        ],[
            'hoten.required'=>"Mời bạn điền thông tin",
            'ngaysinh.required'=>"Mời bạn điền thông tin",
            'email.required'=>"Mời bạn điền thông tin",
            'gioitinh.required'=>"Mời bạn điền thông tin",
            'chucvu.required'=>"Mời bạn điền thông tin",
        ]);
        $nhanvien=Model_nhanvien::find($id);
        if($request->has('avatar'))
        {
            $file=$request->avatar;
            $file_name=$file->getClientOriginalName();
            $file->move(public_path('avatar'), $file_name);
            $nhanvien->curname=$request->hoten;
            $nhanvien->birth=$request->ngaysinh;
            $nhanvien->email=$request->email;
            $nhanvien->sex=$request->gioitinh;
            $nhanvien->position=$request->chucvu;
        }
        else{
            $nhanvien->curname=$request->hoten;
            $nhanvien->birth=$request->ngaysinh;
            $nhanvien->email=$request->email;
            $nhanvien->sex=$request->gioitinh;
            $nhanvien->position=$request->chucvu;
        }
        $nhanvien->save();
        return redirect()->route('admin_nhanvien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhanvien=Model_nhanvien::find($id)->delete();
        return redirect()->route('admin_nhanvien.index');
    }
}

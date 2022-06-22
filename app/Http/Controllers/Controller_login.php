<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_login;
use App\Models\Model_nhanvien;
use Illuminate\Support\Facades\Hash;
class Controller_login extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function create()
    {
        return view('admin.admin_dangky');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>"required",
            'password'=>"required",
        ],[
            'email.required'=>"Mời bạn nhập thông tin",
            'password.required'=>"Mời bạn nhập thông tin",
        ]);
        $login= Model_login::where('email', $request->email)->first();
        if($login)
        {
            if(Hash::check($request->password, $login->password))
            {
                $nhanvien= Model_nhanvien::find($login->ID_nhanvien);
                $request->session()->put('ten_nhanvien', $nhanvien->ho_ten);
                return redirect()->route('admin.home');
            }
            else{
                return back()->with('fail', 'Sai mật khẩu mời đăng nhập lại');
            }
        }
        else{
            return back()->with('fail', 'Đăng nhập không thành công');
        }
    }


    public function dangky(Request $request)
    {
        $request->validate([
            'ID_nhanvien'=>'required',
            'email'=>'required',
            'password'=>'required',
            'nhaplai_password'=>'required',
        ],
    [
        'ID_nhanvien.required'=>'Mời bạn nhập thông tin vào',
            'email.required'=>'Mời bạn nhập thông tin vào',
            'password.required'=>'Mời bạn nhập thông tin vào',
            'nhaplai_password.required'=>'Mời bạn nhập thông tin vào',
    ]);
    $dangky= new Model_login();
    $nhanvien= Model_nhanvien::find($request->ID_nhanvien);
    if($nhanvien)
    {
        if($request->password==$request->nhaplai_password)
    {
    $dangky->ID_nhanvien=$request->ID_nhanvien;
    $dangky->email=$request->email;
    $dangky->password=Hash::make($request->password);
    $dangky->cau_hoi='hello bạn';
    $dangky->tra_loi='yo xin chào';
    $dangky->save();
    return redirect()->route('admin_login.index');
    }
    else{
        return back()->with('fail', "Mật khẩu không khớp với mật khẩu nhập lại");
    }
    }
    else{
        return back()->with('fail', "Bạn không phép đăng ký");
    }
    }

    public function logout()
    {
        if(session()->has('ten_nhanvien')){
            session()->pull('ten_nhanvien');
             return redirect()->route('login');
    }
}
}

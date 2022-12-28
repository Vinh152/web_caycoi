<?php

namespace App\Http\Controllers;

use App\Models\Model_chitietgiohang;
use Illuminate\Http\Request;
use App\Models\Model_sanpham;
use App\Models\Model_tintuc;
use App\Models\Model_danhmuc;
use App\Models\Model_giohang;
use Illuminate\Database\Eloquent\Model;
use Cart;
class Controller_client extends Controller
{
    public function index(){
        $sanphams=Model_sanpham::all();
        $tintucs=Model_tintuc::all();
        $bonsais=Model_danhmuc::where("category_name", 'Bonsai')->first();
        $phongthuys=Model_danhmuc::where("category_name", 'Cây cảnh phong thủy')->first();
        $sendas=Model_danhmuc::where("category_name", 'Cây cảnh sen đá')->first();
        $vanphongs=Model_danhmuc::where("category_name", 'Cây cảnh văn phòng')->first();
        $danhmucs=Model_danhmuc::all();
        // session()->put($d)
        return view("client.index", compact("sanphams","tintucs", "bonsais", "phongthuys", "sendas", "danhmucs","vanphongs"));
    }

    public function sanpham()
    {   
        $sanphams=Model_sanpham::orderBy('money', 'asc')->paginate(20);
        $danhmucs=Model_danhmuc::all();
        $sanpham_5=Model_sanpham::offset(0)->limit(5)->get();
        return view("client.product", compact("sanphams", "danhmucs", "sanpham_5"));
    }

    public function filter_sanpham($danhmuc)
    {
        
        $danhmucs=Model_danhmuc::all();
        $sanpham_5=Model_sanpham::offset(0)->limit(5)->get();
        $sanphams=Model_sanpham::where("ID_category","=",$danhmuc)->orderBy('money', 'asc')->paginate(5);
        return view("client.product", compact("sanphams", "danhmucs", "sanpham_5"));
    }

    public function sanpham_info($id)
    {
        $danhmucs=Model_danhmuc::all();
        $sanpham_5=Model_sanpham::offset(0)->limit(5)->get();
        $sanphams=Model_sanpham::find($id);
        return view("client.product_info", compact("sanphams", "danhmucs", "sanpham_5"));
    }
    public function price_sanpham(Request $request){
        // dd($request->all());
        $max= $request->Price_max;
        $min= $request->Price_min;
        $danhmucs=Model_danhmuc::all();
        $sanpham_5=Model_sanpham::offset(0)->limit(5)->get();
        $sanphams=Model_sanpham::where('money', '>', $min)->where('money', '<', $max)->paginate(5);
        return view("client.product", compact("sanphams", "danhmucs", "sanpham_5")); 
    }

    public function search_sanpham(Request $request){
        $keywork=$request->sanpham_search;
        $danhmucs=Model_danhmuc::all();
        $sanpham_5=Model_sanpham::offset(0)->limit(5)->get();
        $sanphams=Model_sanpham::where("product_name", 'like', '%'.$keywork .'%')->paginate(5);
        return view("client.product", compact("sanphams", "danhmucs", "sanpham_5")); 
    }

    public function tintuc(){
        $tintucs= Model_tintuc::all();
        $tintuc_5= Model_tintuc::offset(0)->limit(5)->get();
        $danhmucs=Model_danhmuc::all();
        return view("client.news", compact("danhmucs", "tintucs", "tintuc_5"));
    }

    public function tintuc_info($id){
        $tintucs= Model_tintuc::find($id);
        $tintuc_5= Model_tintuc::offset(0)->limit(5)->get();
        $danhmucs=Model_danhmuc::all();
        return view("client.news_info", compact("danhmucs","tintuc_5", "tintucs"));
    }

    //lam phan mua hang
    public function cart(){
        $danhmucs=Model_danhmuc::all();
        return view("client.cart", compact("danhmucs"));
    }
    public function cart_buy($id){
        $sanpham=Model_sanpham::find($id);
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        $data['id']=$id;
        $data['qty']=1;
        $data['name']=$sanpham->product_name;
        $data['price']=$sanpham->money;
        $data['weight']=12;
        $data['options']['img']=$sanpham->img;
        Cart::add($data);
        $danhmucs=Model_danhmuc::all();
        return view("client.cart", compact("danhmucs"));
    }
    public function cart_remove($id){
        $rowId=$id;
        Cart::update($rowId, 0);
        $danhmucs=Model_danhmuc::all();
        return view("client.cart", compact("danhmucs"));
    }
    public function cart_tang($id, $soluong){
        $rowId=$id;
        $soluong=$soluong+1;
        Cart::update($rowId, $soluong);
        $danhmucs=Model_danhmuc::all();
        return view("client.cart", compact("danhmucs"));
    }

    public function cart_giam($id, $soluong){
        $rowId=$id;
        $soluong=$soluong-1;
        Cart::update($rowId, $soluong);
        $danhmucs=Model_danhmuc::all();
        return view("client.cart", compact("danhmucs"));
    }

    public function cart_info(){
        $danhmucs=Model_danhmuc::all();
        return view("client.cart_info", compact("danhmucs"));
    }

    public function thanhtoan(Request $request){
        $ID=rand(1111,9999);
        $request->validate([
            "ho"=>"required",
            "ten"=>"required",
            "quocgia"=>"required",
            "diachi"=>"required",
            "thanhpho"=>"required",
            "sdt"=>"required",
            "email"=>"required",
            "ghichu"=>"required",
        ],[
            "ho.required"=>"Mời bạn nhập thông tin",
            "ten.required"=>"Mời bạn nhập thông tin",
            "quocgia.required"=>"Mời bạn nhập thông tin",
            "diachi.required"=>"Mời bạn nhập thông tin",
            "thanhpho.required"=>"Mời bạn nhập thông tin",
            "sdt.required"=>"Mời bạn nhập thông tin",
            "email.required"=>"Mời bạn nhập thông tin",
            "ghichu.required"=>"Mời bạn nhập thông tin",
        ]);
        // $tongdonhang=number_format(Cart::subtotal(),'.','');
        $so=(int)Cart::subtotal();
        $giohang= new Model_giohang();
        $giohang->ID_cart=$ID;
        $giohang->curname=$request->ho;
        $giohang->name=$request->ten;
        $giohang->country=$request->quocgia;
        $giohang->city=$request->thanhpho;
        $giohang->location=$request->diachi;
        $giohang->phonenumber=$request->sdt;
        $giohang->email=$request->email;
        $giohang->note=$request->ghichu;
        $tongdonhang=$so.'000';
        $giohang->total=$tongdonhang;
        $giohang->status="Thanh toán tiền mặt";
        $giohang->save();
        $content=Cart::content();
        foreach($content as $row)
        {
            $chitietgiohang=new Model_chitietgiohang();
            $chitietgiohang->ID_cart=$ID;
            $chitietgiohang->ID_product=$row->id;
            $chitietgiohang->product_name=$row->name;
            $chitietgiohang->money=$row->price;
            $chitietgiohang->count=$row->qty;
            $chitietgiohang->total=$row->price*$row->qty;
            $chitietgiohang->save();
        }
        Cart::destroy();
        $danhmucs=Model_danhmuc::all();
        return view("client.cart",)->with('danhmucs', $danhmucs)->with("thanhcong1","Mua hàng thành công rồi");
    }
    
}

@extends("client.layout.layout")
@section('main')
<link rel="stylesheet" href="/css/cart_infomation.css">
 <!-- làm phần main -->
 <div class="main">
    <div class="container">
        <form class="main_frame" action="{{route("client.thanhtoan")}}" method="POST">
            @csrf
            <div class="main-left">
                <h2 class="main_tittle">Thông tin thanh toán</h2>
                    <div class="main_row">
                        <div class="mainL_item mainL_item-half">
                            <p class="main_text main_text-long">Họ *</p>
                            <input type="text" class="mainL_info" name="ho" value="{{old("ho")}}">
                            <p class="error_input">@error('ho')
                                {{$message}}
                            @enderror</p>
                        </div>
                        <div class="mainL_item mainL_item-half">
                            <p class="main_text main_text-long">Tên *</p>
                            <input type="text" class="mainL_info" name="ten" value="{{old("ten")}}">
                            <p class="error_input">@error('ten')
                                {{$message}}
                            @enderror</p>
                        </div>
                    </div>

                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Quốc gia *</p>
                            <select name="quocgia" id="" class="mainL_info">
                                <option value="">Mời bạn chọn quốc gia</option>
                                <option value="vietnam">Việt Nam</option>
                            </select>
                            <p class="error_input">@error('quocgia')
                                {{$message}}
                            @enderror</p>
                        </div>
                    </div>


                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Địa chỉ *</p>
                            <input type="text" class="mainL_info" name="diachi" value="{{old("diachi")}}">
                            <p class="error_input">@error('diachi')
                                {{$message}}
                            @enderror</p>
                        </div>
                    </div>

                   

                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Tỉnh / thành phố *</p>
                            <input type="text" class="mainL_info" name="thanhpho" value="{{old("thanhpho")}}">
                            <p class="error_input">@error('thanhpho')
                                {{$message}}
                            @enderror</p>
                        </div>
                    </div>

                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Số điện thoại *</p>
                            <input type="text" class="mainL_info" name="sdt" value="{{old("sdt")}}">
                            <p class="error_input">@error('sdt')
                                {{$message}}
                            @enderror</p>
                        </div>
                    </div>


                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Email *</p>
                            <input type="email" class="mainL_info" name="email" value="{{old("email")}}">
                            <p class="error_input">@error('email')
                                {{$message}}
                            @enderror</p>
                        </div>
                    </div>
                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Ghi chú về đơn hàng *</p>
                            <textarea name="ghichu" class="mainL_info" id="" cols="30" rows="5" value="{{old("ghichu")}}"></textarea>
                            <p class="error_input">@error('ghichu')
                                {{$message}}
                            @enderror</p>
                        </div>
                    </div>
            </div>
            <!-- làm phần main bên phải  -->
            <div class="main-right">
                <h2 class="main_tittle">ĐƠN HÀNG CỦA BẠN</h2>
                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">sản phẩm</p>
                    <p class="main_text main_text-half text-uppercase">Giá</p>
                </div>

                <div class="main_show_product">
                    @php
                        $content=Cart::content();
                    @endphp
                    @foreach ($content as $row)
                    <div class="main_row">
                        <p class="main_text main_text-half text-opacity text-fontWeight text-fontWeight-500">{{$row->name}} <span>x</span> <span>{{$row->qty}}</span></p>
                        <p class="main_text main_text-half text-uppercase">{{number_format($row->price*$row->qty)}}đ</p>
                    </div>
                    @endforeach
                </div>

                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">Tổng cộng</p>
                    <p class="main_text main_text-half text-uppercase">{{Cart::subtotal();}}đ</p>
                </div>


                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">Giao hàng</p>
                    <p class="main_text main_text-half text-uppercase">Free</p>
                </div>


                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">Tổng cộng</p>
                    <p class="main_text main_text-half text-uppercase">{{Cart::subtotal();}}đ</p>
                </div>

                <button class="main_btn">Đặt hàng</button>
            </div>
        </form>
    </div>
</div>
<!-- hết làm phần main -->
@endsection
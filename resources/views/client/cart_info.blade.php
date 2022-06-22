@extends("client.layout.layout")
@section('main')
<link rel="stylesheet" href="/css/cart_infomation.css">
 <!-- làm phần main -->
 <div class="main">
    <div class="container">
        <form class="main_frame">
            <div class="main-left">
                <h2 class="main_tittle">Thông tin thanh toán</h2>
                    <div class="main_row">
                        <div class="mainL_item mainL_item-half">
                            <p class="main_text main_text-long">Họ *</p>
                            <input type="text" class="mainL_info" name="ho">
                        </div>
                        <div class="mainL_item mainL_item-half">
                            <p class="main_text main_text-long">Tên *</p>
                            <input type="text" class="mainL_info" name="ho">
                        </div>
                    </div>

                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Quốc gia *</p>
                            <select name="" id="" class="mainL_info">
                                <option value="">Việt Nam</option>
                            </select>
                        </div>
                    </div>


                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Địa chỉ *</p>
                            <input type="text" class="mainL_info" name="ho">
                        </div>
                    </div>

                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Mã bưu điện *</p>
                            <input type="text" class="mainL_info" name="ho">
                        </div>
                    </div>

                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Tỉnh / thành phố *</p>
                            <input type="text" class="mainL_info" name="ho">
                        </div>
                    </div>

                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Số điện thoại *</p>
                            <input type="text" class="mainL_info" name="ho">
                        </div>
                    </div>


                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Email *</p>
                            <input type="email" class="mainL_info" name="ho">
                        </div>
                    </div>
                    <div class="main_row">
                        <div class="mainL_item mainL_item-long">
                            <p class="main_text main_text-long">Ghi chú về đơn hàng *</p>
                            <textarea name="" class="mainL_info" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
            </div>
            <!-- làm phần main bên phải  -->
            <div class="main-right">
                <h2 class="main_tittle">ĐƠN HÀNG CỦA BẠN</h2>
                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">sản phẩm</p>
                    <p class="main_text main_text-half text-uppercase">sản phẩm</p>
                </div>

                <div class="main_show_product">
                    <div class="main_row">
                        <p class="main_text main_text-half text-opacity text-fontWeight text-fontWeight-500">Tùng la hán <span>x</span> <span>15</span></p>
                        <p class="main_text main_text-half text-uppercase">450.000.000đ</p>
                    </div>
                </div>

                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">Tổng cộng</p>
                    <p class="main_text main_text-half text-uppercase">450.000.000đ</p>
                </div>


                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">Giao hàng</p>
                    <p class="main_text main_text-half text-uppercase">15.000đ</p>
                </div>


                <div class="main_row">
                    <p class="main_text main_text-half text-uppercase">Tổng cộng</p>
                    <p class="main_text main_text-half text-uppercase">450.000.000đ</p>
                </div>

                <button class="main_btn">Đặt hàng</button>
            </div>
        </form>
    </div>
</div>
<!-- hết làm phần main -->
@endsection
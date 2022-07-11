@extends("client.layout.layout")
@section('main')
<link rel="stylesheet" href="/css/cart.css">
 <!-- làm phần main -->
 <div class="main">
    <div class="container">
        @if (!empty($thanhcong1))
        <h1 class="thanhtoan_thanhcong">{{$thanhcong1}}</h1>
        @endif
        <div class="main_frame">
        <div class="main-left">
                <table class="main_table">
                    <thead class="main_table_row main_table_row-header">
                          <th class="main_table_header main_table_column-center" colspan="3" >sản phẩm</th>
                          <th class="main_table_header table_display-none">Giá</th>
                          <th class="main_table_header main_table_column-center">số lượng</th>
                          <th class="main_table_header main_table_column-right table_display-none">tổng cộng</th>
                    </thead>

                    @php
                        $content=Cart::content();
                    @endphp
                    @foreach ($content as $row)
                    <tr class="main_table_row">
                      <td class="main_table_column main_table_column-20"><a href="{{route("client.cart_remove", $row->rowId)}}" class="main_table_column_delete">X</a></td>
                      <td class="main_table_column main_table_column-70"><img class="main_table_column_img" src="/img_sanpham/{{$row->options->img}}" alt=""></td>
                      <td class="main_table_column ">{{$row->name}}</td>
                      <td class="main_table_column main_table_column-fontweight table_display-none">{{number_format($row->price)}}đ</td> 
                      <td class="main_table_column"><div class="main_table_column_row"><a href="{{route('client.cart_tang', ['id'=>$row->rowId, 'soluong'=>$row->qty])}}" class="main_table_column_tanggiam main_table_column_tanggiam-active">+</a>  <p class="main_table_column_tanggiam">{{$row->qty}}</p>  <a href="{{route('client.cart_giam', ['id'=>$row->rowId, 'soluong'=>$row->qty])}}" class="main_table_column_tanggiam main_table_column_tanggiam-active">-</a></div></td>
                      <td class="main_table_column main_table_column-right main_table_column-fontweight table_display-none">{{number_format($row->price*$row->qty)}}đ</td>
                  </tr>
                  @endforeach
                  <!-- <tr class="main_table_row">
                      <td class="main_table_empty" colspan="6">Không có sản phẩm trong giỏ hàng</td>
                  </tr> -->
                </table>
              <a href="{{route("client.sanpham")}}" class="main_left_return"><i class="fas fa-long-arrow-alt-left"></i> Tiếp tục xem sản phẩm</a>
        </div>

        <div class="main-line"></div>

        <!-- làm phần main bên phải  -->
        <div class="main-right">
            <h2 class="mainR_tittle">Tổng số lượng</h2>
            <div class="mainR_row">
                <p class="mainR_text">Tổng cộng</p>
                <p class="mainR_price">{{Cart::subtotal();}}</p>
            </div>

            <div class="mainR_row">
              <p class="mainR_text">Giao hàng</p>
              <div class="mainR_row-right">
                  <p class="mainR_text">Phí giao hàng</p>
                  <p class="mainR_price">Free</p>
              </div>
            </div>
            <div class="mainR_row">
              <p class="mainR_text">Tổng cộng</p>
              <p class="mainR_price">{{Cart::subtotal();}}</p>
          </div>
          <div class="mainR_row @php
          $so=(int)Cart::subtotal();
          if($so==0)
          {
            echo "thanhtoan_not";
          }
          else{
            echo " ";
          }
          @endphp">
              <a href="{{route("client.cart_info")}}" class="mainR_btn">tiến hành thanh toán</a>
          </div>

        </div>
        </div>
    </div>
</div>
<!-- hết làm phần main -->
@endsection
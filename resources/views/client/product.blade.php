@extends("client.layout.layout")
@section('main')
<link rel="stylesheet" href="/css/product.css">
<div class="main">
    <div class="main_modal mobile"></div>
    <div class="main_close mobile" onclick="Mainleft_toggle()">
        <i class="fas fa-times"></i>
    </div>
    <div class="container">
        <div class="main_tittle">
            <div class="main_tittle_item main_tittle_item-left">
                <p><a href="" class="text-uppercase text-opacity">Cửa hàng</a>/ <span><a href="" class="text-uppercase">Sản phẩm</a></span></p>
            </div>
            <div class="mobile main_tittle_item main_tittle_item-center text-uppercase" onclick="Mainleft_toggle()">
               <i class="fas fa-bars"></i> lọc
            </div>
        </div>

        <div class="mainFrame">

            <div class="mainFrame-left">
               <div class="mainLeft_item">
                <h3 class="mainFrame_tittle text-uppercase">Danh mục sản phẩm</h3>
                <ul class="mainFrame_menu">
                    @foreach ($danhmucs as $danhmuc)
                    <li class="mainFrame_menu_item">
                        <a href="{{route('client.filter_sanpham', ['danhmuc' => $danhmuc->ID_danhmuc])}}"><img src="/icon/bonsai-1-24x24.png" alt="">{{$danhmuc->ten_danh_muc}}</a></li>
                    @endforeach
                </ul>
               </div>

               <div class="mainLeft_item">
                <form action="{{route('client.price_sanpham')}}" class="mainFrameL_priceRange" method="GET">
                  
                    <h3 class="PriceRange_tittle text-uppercase">Lọc theo giá</h3>
                    <div class="Frame_PriceRange">
                        <div class="PriceRange_line"></div>
                        <input type="range" min="0" max="1000000000" value="1000000" id="PriceRange_min" class="PriceRange_input PriceRange-min" name="Price_min" oninput="slideOne()">
                        <input type="range" min="0" max="1000000000" value="600000000" id="PriceRange_max" class="PriceRange_input PriceRange-max" name="Price_max" oninput="slideTwo()"> 
                    </div>
                    <div class="PriceRange_fillter">
                        <button class="PriceRange_fillter_btn text-uppercase">Lọc</button>
                        <p class="PriceRange_fillter_show">Giá: <span class="PriceRange_fillter_show-min" id="min">40.000</span>đ — <span class="PriceRange_fillter_show-max" id="max">520.000.000</span>đ</p>
                    </div>
                </form>
               </div>
               
               <div class="mainLeft_item">
                <h3 class="mainFrame_tittle text-uppercase">sản phẩm</h3>
                <div class="mainLeft_Frame_product">
                @foreach ($sanpham_5 as $sanpham5)
                    <div class="mainLeft_product">
                        <a href="{{route('client.sanpham_info', $sanpham5->ID_sanpham)}}" class="mainLeft_product_img"><img src="/img_sanpham/{{$sanpham5->anh}}" alt=""></a>
                        <div class="mainLeft_product_text">
                            <p class="mainLeft_product_text_tittle"><a href="{{route('client.sanpham_info', $sanpham5->ID_sanpham)}}">{{$sanpham5->ten_san_pham}}</a></p>
                            <p class="mainLeft_product_text_price">{{number_format($sanpham5->gia_tien)}}đ</p>
                        </div>
                    </div>
                    @endforeach
                </div>
               </div>



               <div class="mainLeft_item">
                <h3 class="mainFrame_tittle text-uppercase">Bài viết mới nhất</h3>
                <div class="mainLeft_Frame_news">
                    <div class="mainLeft_news">
                        <a href="" class="mainLeft_news_img"><img src="./news/332-1-300x196.jpg" alt="">
                            <p class="mainLeft_news_time">23 Th3</p>
                        </a>
                        <div class="mainLeft_news_text">
                            <p class="mainLeft_news_text_tittle"><a href="">Tác dụng của cây lưỡi hổ trong việc chữa bệnh</a></p>
                        </div>
                    </div>

                    <div class="mainLeft_news">
                        <a href="" class="mainLeft_news_img"><img src="./news/332-1-300x196.jpg" alt="">
                            <p class="mainLeft_news_time">23 Th3</p>
                        </a>
                        <div class="mainLeft_news_text">
                            <p class="mainLeft_news_text_tittle"><a href="">Tác dụng của cây lưỡi hổ trong việc chữa bệnh</a></p>
                        </div>
                    </div>


                    <div class="mainLeft_news">
                        <a href="" class="mainLeft_news_img"><img src="./news/332-1-300x196.jpg" alt="">
                            <p class="mainLeft_news_time">23 Th3</p>
                        </a>
                        <div class="mainLeft_news_text">
                            <p class="mainLeft_news_text_tittle"><a href="">Tác dụng của cây lưỡi hổ trong việc chữa bệnh</a></p>
                        </div>
                    </div>



                    <div class="mainLeft_news">
                        <a href="" class="mainLeft_news_img"><img src="./news/332-1-300x196.jpg" alt="">
                            <p class="mainLeft_news_time">23 Th3</p>
                        </a>
                        <div class="mainLeft_news_text">
                            <p class="mainLeft_news_text_tittle"><a href="">Tác dụng của cây lưỡi hổ trong việc chữa bệnh</a></p>
                        </div>
                    </div>


                    <div class="mainLeft_news">
                        <a href="" class="mainLeft_news_img"><img src="./news/332-1-300x196.jpg" alt="">
                            <p class="mainLeft_news_time">23 Th3</p>
                        </a>
                        <div class="mainLeft_news_text">
                            <p class="mainLeft_news_text_tittle"><a href="">Tác dụng của cây lưỡi hổ trong việc chữa bệnh</a></p>
                        </div>
                    </div>


                    <div class="mainLeft_news">
                        <a href="" class="mainLeft_news_img"><img src="./news/332-1-300x196.jpg" alt="">
                            <p class="mainLeft_news_time">23 Th3</p>
                        </a>
                        <div class="mainLeft_news_text">
                            <p class="mainLeft_news_text_tittle"><a href="">Tác dụng của cây lưỡi hổ trong việc chữa bệnh</a></p>
                        </div>
                    </div>
                </div>
               </div>

            </div>
            <div class="mainFrame-right">
                <div class="mainRframe_product">
                @foreach ($sanphams as $sanpham)
                    <div class="productR">
                        <div class="productR_img_frame">
                            <a href="{{route('client.sanpham_info', $sanpham->ID_sanpham)}}"><img class="productR_img" src="/img_sanpham/{{$sanpham->anh}}" alt=""></a>
                            <a href="{{route('client.sanpham_info', $sanpham->ID_sanpham)}}"><img class="productR_img_hover" src="/img_sanpham/{{$sanpham->chitietsanpham->anh2}}" alt=""></a>
                        </div>
                        <div class="prouductR_text">
                            <p class="prouductR_text_type"><a href="">Bonsai</a></p>
                            <p class="prouductR_text_name"><a href="{{route('client.sanpham_info', $sanpham->ID_sanpham)}}">{{$sanpham->ten_san_pham}}</a></p>
                            <p class="productR_text_price">{{number_format($sanpham->gia_tien)}}đ</p>
                            <a class="productR_btn" href="">Thêm vào giỏ</a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- làm phần đánh số trang và chuyển trang -->
               
               
                    {{-- <p class="pagipage_number"><a href="">1</a></p>
                    <p class="pagipage_number"><a href="">1</a></p>
                    <p class="pagipage_number"><a href="">1</a></p>
                    <p class="pagipage_number"><a href=""><i class="fas fa-chevron-right"></i></a></p> --}}
                     {{$sanphams->links('client.layout.paginate')}}
                
            </div>
        </div>
    </div>
</div>
<script src="/js/mainLeft.js"></script>
<script src="/PriceRange/priceRange.js"></script>
@endsection
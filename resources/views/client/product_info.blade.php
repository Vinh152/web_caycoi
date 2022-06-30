@extends("client.layout.layout")
@section('main')
<link rel="stylesheet" href="/css/product_information.css">
<div class="main">
    <div class="container">
        <!-- làm phần main thứ nhất  -->
        <div class="main-1">
            <div class="main-1-left">
                <div class="main-1-left-img">
                    <img src="/img_sanpham/{{$sanphams->anh}}" alt="">

                    <h3 class="main-1-left-img-sale">-29%</h3>
                </div>

                <div class="main-1-left-choose">
                  <div class="main-1-left-choose-item">
                      <img class="main-1-left-choose-item-img" src="/img_sanpham/{{$sanphams->chitietsanpham->anh1}}" alt="">
                  </div>

                  <div class="main-1-left-choose-item">
                    <img class="main-1-left-choose-item-img" src="/img_sanpham/{{$sanphams->chitietsanpham->anh2}}" alt="">
                </div>

                <div class="main-1-left-choose-item">
                    <img class="main-1-left-choose-item-img" src="/img_sanpham/{{$sanphams->chitietsanpham->anh3}}" alt="">
                </div>

                <div class="main-1-left-choose-item">
                    <img class="main-1-left-choose-item-img" src="/img_sanpham/{{$sanphams->chitietsanpham->anh4}}" alt="">
                </div>
                </div>

            </div>



            <div class="main-1-right">
                <p class="main-1-right-tittle"><a href="">Trang chủ</a>  / <a href="">BEST SELLER</a></p>
                <h1 class="main-1-right-name">{{$sanphams->ten_san_pham}}</h1>
                <div class="main-1-right-price">
                    <p class="main-1-right-price-text"> {{number_format($sanphams->gia_tien)}}đ</p>
                </div>

                {{-- <div class="main-1-right-introduce">
                    <p>{{$sanphams->ten_san_pham}}</p>
                </div> --}}

                <ul class="main-1-right-ingredient">
                    <li><p>Sku: <span>P006</span></p></li>
                    <li><p>Categories: <span>Butter & Eggs, Cultured Butter</span></p></li>
                    <li><p>Tag: <span>Man</span></p></li>
                </ul>


                <div class="main-1-right-number-buy">
                    <div class="main-1-right-number">
                        <button class="main-1-right-number-minus" onclick="solong_giam()"><i class="fas fa-minus"></i></button>
                        <p class="main-1-right-number-text">1</p>
                        <button class="main-1-right-number-plus" onclick="solong_tang()"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="main-1-right-buy">
                        <a href="{{route("client.cart_buy", $sanphams->ID_sanpham)}}" class="main-1-right-buy-btn">Thêm vào giỏ</a>
                    </div>
                </div>

                <div class="main-1-right-tittle-last">
                    <p>"Hãy trở thành Affilicate của chúng tôi để tìm thêm thu nhập thụ động, kiếm tiền online"</p>
                </div>


                <div class="main-1-right-btn-dangky">
                    <p><a href="">Đăng ký</a></p>
                </div>


                <div class="main-1-right-list-last">
                    <ul class="main-1-right-list-last-s">
                        <li class="main-1-right-list-last-item"><a href="">Thêm yêu thích</a></li>
                        <li class="main-1-right-list-last-item"><span>Mã: P006-1-1-1-1</span></li>
                        <li class="main-1-right-list-last-item"> <span>Danh mục:</span><a href="">Thêm yêu thích</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- hết phần main-1 -->



        <!-- sang làm phần main thứ 2 -->
        <div class="main-2">
            <div class="main-2-tittle">
                <h3 class="main-2-tittle-item main-2-tittle-item-split main-2-tittle-item-mota">Mô tả</h3>
                <h3 class="main-2-tittle-item main-2-tittle-item-danhgia">Đánh giá (<span class="main-2-tittle-item-number">0</span>)</h3>
            </div>
            <div class="main-2-frame main-2-frame-mota">
                <p class="main-2-mota-text">
                    {!!$sanphams->chitietsanpham->mo_ta !!}
                </p>
            </div>

            <div class="main-2-frame main-2-frame-danhgia">
                <div class="main-2-frame-danhgia-text">
                    <h3 class="main-2-frame-danhgia-text-tittle">
                        Đánh giá
                    </h3>
                    <p class="main-2-frame-danhgia-text-text">
                        Chưa có đánh giá nào. 
                    </p>
                </div>
                <!-- làm phần mục đánh giá để điền  -->
                <div class="main-2-frame-danhgia-frame">
                    <h3 class="main-2-frame-danhgia-tittle">
                        Hãy là người đầu tiên nhận xét “cây {{$sanphams->ten_san_pham}}” 
                    </h3>
                    <div class="main-2-frame-danhgia-star">
                        <h4 class="main-2-frame-danhgia-star-tittle">
                            Đánh giá của bạn
                        </h4>

                        <div class="main-2-frame-danhgia-star-choose">
                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                            </div>

                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>

                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>


                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>


                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>

                        </div>
                    </div>


                    <div class="main-2-frame-danhgia-input-text">
                        <h4 class="main-2-frame-danhgia-star-tittle">
                            Nhận xét của bạn *
                        </h4>

                        <textarea name="" placeholder="Nhập lời nhận xét"></textarea>
                    </div>



                    <div class="main-2-frame-danhgia-information">
                        <div class="main-2-frame-danhgia-information-item">
                            <h3 class="main-2-frame-danhgia-information-item-tittle">
                                Tên *
                            </h3>
                            <input type="text" placeholder="Nhập tên của bạn">
                        </div>


                        <div class="main-2-frame-danhgia-information-item">
                            <h3 class="main-2-frame-danhgia-information-item-tittle">
                                Email *
                            </h3>
                            <input type="text" placeholder="Nhập gmail của bạn">
                        </div>
                    </div>


                    <input type="submit" class="main-2-frame-danhgia-btn-submit" value="Gửi đi">
                </div>
                <!-- hết làm phần mục đánh giá để điền  -->
            </div>
        </div>
        <!-- hết làm phần main thứ 2 -->




        <!-- sang làm phần main thứ 3 -->
<div class="main-3">
    <h1 class="main-3-tittle">
        Sản phẩm tương tự
    </h1>
    <div class="main-3-s">
    @foreach ( $sanpham_5 as $sanpham5)
        <div class="main-3-item">
            <div class="main-3-item-image">
                <a href="{{route("client.sanpham_info", $sanpham5->ID_sanpham)}}"><img class="main-3-item-image-1" src="/img_sanpham/{{$sanpham5->anh}}" alt=""></a>
               
            </div>
            <div class="main-3-item-text">
                <h3 class="main-3-item-tittle">{{$sanpham5->ten_san_pham}}</h3>
                <p class="main-3-item-price">{{number_format($sanpham5->gia_tien)}}đ</p>
                <p class="main-3-item-btn"><a href="">Thêm vào giỏ</a></p>
            </div>
        </div>
        @endforeach
    </div>



</div>

        <!-- hết phần main thứ 3  -->
    </div>
    <div class="main-7">
        <form action="">
            <div class="container">
                <div class="main-7-s">
                       <div class="main-7-tittle">
                           <h2>ĐĂNG KÝ NHẬN THÔNG TIN</h2>
                       </div>
                       <div class="main-7-search">
                           <input type="text" placeholder="Tìm kiếm..." id="main-7-search-input">
                           <button type="submit" id="main-7-search-btn">Đăng ký</button>
                       </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // làm phần chuyển sản phẩm khi chọn ảnh 
  $(document).ready(function(){
    $(".main-1-left-choose-item-img").click(function(){
        $(".main-1-left-img img").attr("src", $(this).attr("src"));
    });
    // làm phần hiển thị đánh giá và mô tả 
    $(".main-2-tittle-item-mota").click(function(){
        $(".main-2-frame-danhgia").hide(1000);
        $(".main-2-frame-mota").show(1000);
    });
    $(".main-2-tittle-item-danhgia").click(function(){
        $(".main-2-frame-mota").hide(1000);
        $(".main-2-frame-danhgia").show(1000);
    });
});
</script>
<script src="/js/product_infomation.js"></script>
@endsection
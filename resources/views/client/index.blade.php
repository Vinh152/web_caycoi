@extends("client.layout.layout", ['danhmucs' => $danhmucs])
@section('main')
<link rel="stylesheet" href="/css/index.css">
<div class="main">
    <!-- làm phần banner -->
    <div class="banner_frame">
        <div class="banner">
            <div class="banner_item">
                <img class="banner_item_img" src="./banner/cay-canh-bonsai-viet-nam-1-1.jpg" alt="">
                <div class="banner_item_text_center banner_item_text_center-box">
                    
                    
                    <h1 class="banner_item_text_tittle">Green mona</h1>
                    <p class="banner_item_text_middle">Cung cấp cây cảnh</p>
                    <p class="banner_item_text_last">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>


                    <div class="banner_item_btn">
                        <a class="btn btn-green btn-short" href="">Liên hệ</a>
                        <a class="btn btn-white btn-short" href="">Giới thiệu</a>
                    </div>

                </div>
            </div>

            <div class="banner_item">
                <img class="banner_item_img" src="./banner/cleancut-installationHD.jpg" alt="">
                <div class="banner_item_text_center banner_item_text_center-box">
                    
                    
                    <h1 class="banner_item_text_tittle">Green mona</h1>
                    <p class="banner_item_text_middle">Cung cấp cây cảnh</p>
                    <p class="banner_item_text_last">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>


                    <div class="banner_item_btn">
                        <a class="btn btn-green btn-short" href="">Liên hệ</a>
                        <a class="btn btn-white btn-short" href="">Giới thiệu</a>
                    </div>

                </div>
            </div>


            <div class="banner_item">
                <img class="banner_item_img" src="./banner/cleancut-installationHD.jpg" alt="">
                <div class="banner_item_text_center banner_item_text_center-cricle">
                    
                    <h1 class="banner_item_text_tittle">Green mona</h1>
                    <p class="banner_item_text_middle">Cung cấp cây cảnh</p>
                    <p class="banner_item_text_last">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

                    <div class="banner_item_btn">
                        <a class="btn btn-green btn-short" href="">Liên hệ</a>
                        <a class="btn btn-white btn-short" href="">Giới thiệu</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- làm phần mũi tên chuyển hướng banner -->
        <div class="banner_arrow banner_arrow-left">
            <i class="fa-solid fa-angle-left"></i>
        </div>

        <div class="banner_arrow banner_arrow-right">
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>

    <!-- làm phần show sản phẩm -->
    <div class="container">
        <div class="product">
            <div class="product_frame"> <!--product frame phục vụ khung phần show sản phẩm -->
                <p class="product_tittle">Khuyến mãi và sản phẩm hot</p>
                <div class="product_outside"> <!--product outside phục vụ cho mũi tên chuyển của phần show sản phẩm -->
                    <div class="product_row responsive1">
                        @foreach ($sanphams as $sanpham)
                        <div class="product_item-6">
                            <a href=""><img class="product_item_img product_item_img-long" src="/img_sanpham/{{$sanpham->anh}}" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                     <!-- làm phần thanh chuyển hướng của product -->
                <div class="product_arrow product_arrow-left product_arrow-left-1">
                    <i class="fa-solid fa-angle-left"></i>
                </div>

                <div class="product_arrow product_arrow-right product_arrow-right-1">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                </div>
            </div>



            <div class="product_frame"> <!--product frame phục vụ khung phần show sản phẩm -->
                <p class="product_tittle">Khuyến mãi và sản phẩm hot</p>
                <div class="product_outside"> <!--product outside phục vụ cho mũi tên chuyển của phần show sản phẩm -->
                    <div class="product_row responsive2">
                        @foreach ($sanphams as $sanpham)
                        <div class="product_item-5">
                            <a href=""><img class="product_item_img product_item_img-short" src="/img_sanpham/{{$sanpham->anh}}" alt=""></a>
                            <div class="product_item_info">
                                <p class="product_item_info_type"><a href="">{{$sanpham->ten_danh_muc}}</a></p>
                                <h3 class="product_item_info_name"><a href="">{{$sanpham->ten_san_pham}}</a></h3>
                                <p class="product_item_info_price">{{number_format($sanpham->gia_tien)}}đ</p>
                                <a class="btn btn-medium product_item-info-btn" href="">Thêm vào giỏ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     <!-- làm phần thanh chuyển hướng của product -->
                <div class="product_arrow product_arrow-left product_arrow-left-2">
                    <i class="fa-solid fa-angle-left"></i>
                </div>

                <div class="product_arrow product_arrow-right product_arrow-right-2">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                </div>
            </div>


            <div class="product_frame"> <!--product frame phục vụ khung phần show sản phẩm -->
                <p class="product_tittle">{{$bonsais->ten_danh_muc}}</p>
                <div class="product_outside"> <!--product outside phục vụ cho mũi tên chuyển của phần show sản phẩm -->
                    <div class="product_row responsive3">
                    @foreach ($bonsais->sanpham as $bonsai)
                        <div class="product_item-5">
                            <a href=""><img class="product_item_img product_item_img-short" src="/img_sanpham/{{$bonsai->anh}}" alt=""></a>
                            <div class="product_item_info">
                                <p class="product_item_info_type"><a href="">{{$bonsais->ten_danh_muc}}</a></p>
                                <h3 class="product_item_info_name"><a href="">{{$bonsai->ten_san_pham}}</a></h3>
                                <p class="product_item_info_price">{{number_format($bonsai->gia_tien)}}đ</p>
                                <a class="btn btn-medium product_item-info-btn" href="">Thêm vào giỏ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     <!-- làm phần thanh chuyển hướng của product -->
                <div class="product_arrow product_arrow-left  product_arrow-left-3">
                    <i class="fa-solid fa-angle-left"></i>
                </div>

                <div class="product_arrow product_arrow-right  product_arrow-right-3">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                </div>
            </div>



            <div class="product_frame"> <!--product frame phục vụ khung phần show sản phẩm -->
                <p class="product_tittle">{{$phongthuys->ten_danh_muc}}</p>
                <div class="product_outside"> <!--product outside phục vụ cho mũi tên chuyển của phần show sản phẩm -->
                    <div class="product_row responsive4">
                        @foreach ($phongthuys->sanpham as $phongthuy)
                        <div class="product_item-5">
                            <a href=""><img class="product_item_img product_item_img-short" src="/img_sanpham/{{$phongthuy->anh}}" alt=""></a>
                            <div class="product_item_info">
                                <p class="product_item_info_type"><a href="">{{$phongthuy->ten_danh_muc}}</a></p>
                                <h3 class="product_item_info_name"><a href="">{{$phongthuy->ten_san_pham}}</a></h3>
                                <p class="product_item_info_price">{{number_format($phongthuy->gia_tien)}}đ</p>
                                <a class="btn btn-medium product_item-info-btn" href="">Thêm vào giỏ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     <!-- làm phần thanh chuyển hướng của product -->
                <div class="product_arrow product_arrow-left product_arrow-left-4">
                    <i class="fa-solid fa-angle-left"></i>
                </div>

                <div class="product_arrow product_arrow-right product_arrow-right-4">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                </div>
            </div>




            <div class="product_frame"> <!--product frame phục vụ khung phần show sản phẩm -->
                <p class="product_tittle">{{$sendas->ten_danh_muc}}</p>
                <div class="product_outside"> <!--product outside phục vụ cho mũi tên chuyển của phần show sản phẩm -->
                    <div class="product_row responsive5">
                    @foreach ($sendas->sanpham as $senda)
                        
                    
                        <div class="product_item-5">
                            <a href=""><img class="product_item_img product_item_img-short" src="/img_sanpham/{{$senda->anh}}" alt=""></a>
                            <div class="product_item_info">
                                <p class="product_item_info_type"><a href="">{{$senda->ten_danh_muc}}</a></p>
                                <h3 class="product_item_info_name"><a href="">{{$senda->ten_san_pham}}</a></h3>
                                <p class="product_item_info_price">{{number_format($senda->gia_tien)}}đ</p>
                                <a class="btn btn-medium product_item-info-btn" href="">Thêm vào giỏ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     <!-- làm phần thanh chuyển hướng của product -->
                <div class="product_arrow product_arrow-left product_arrow-left-5">
                    <i class="fa-solid fa-angle-left"></i>
                </div>

                <div class="product_arrow product_arrow-right product_arrow-right-5">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                </div>
            </div>




            <div class="product_frame"> <!--product frame phục vụ khung phần show sản phẩm -->
                <p class="product_tittle">{{$vanphongs->ten_danh_muc}}</p>
                <div class="product_outside"> <!--product outside phục vụ cho mũi tên chuyển của phần show sản phẩm -->
                    <div class="product_row responsive6">
                        @foreach ($vanphongs->sanpham as $vanphong)
                        <div class="product_item-5">
                            <a href=""><img class="product_item_img product_item_img-short" src="/img_sanpham/{{$vanphong->anh}}" alt=""></a>
                            <div class="product_item_info">
                                <p class="product_item_info_type"><a href="">{{$vanphong->ten_danh_muc}}</a></p>
                                <h3 class="product_item_info_name"><a href="">{{$vanphong->ten_san_pham}}</a></h3>
                                <p class="product_item_info_price">{{number_format($vanphong->gia_tien)}}đ</p>
                                <a class="btn btn-medium product_item-info-btn" href="">Thêm vào giỏ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     <!-- làm phần thanh chuyển hướng của product -->
                <div class="product_arrow product_arrow-left product_arrow-left-6">
                    <i class="fa-solid fa-angle-left"></i>
                </div>

                <div class="product_arrow product_arrow-right product_arrow-right-6">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                </div>
            </div>
        </div>



        <div class="news">
            <div class="news_outside">
                <p class="product_tittle">Tin tức</p>
                <div class="news_frame">
                @foreach ($tintucs as $tintuc)
                    <div class="news_item">
                        <a href=""><img class="news_item_img" src="/tin_tuc/{{$tintuc->anh}}" alt=""></a>
                        <div class="news_item_info">
                            <h2 class="news_item_info_tittle">{{$tintuc->ten_tin_tuc}}</h2>
                            <p class="news_item_info_time">{{$tintuc->created_at}}</p>
                            <p class="news_item_info_text">{{$tintuc->loi_ngan_gon}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- làm phần nút bấm chuyển -->
                <div class="news_arrow news_arrow-left">
                    <i class="fa-solid fa-angle-left"></i>
                </div>

                <div class="news_arrow news_arrow-right">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.banner').slick({
            autoplay: false,
            autoplaySpeed: 3000,
            prevArrow: ".banner_arrow-left",
            nextArrow: ".banner_arrow-right",
        });


        $('.responsive1').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 6,
slidesToScroll: 1,
prevArrow: ".product_arrow-left-1",
nextArrow: ".product_arrow-right-1",
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false,
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});



$('.responsive2').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 6,
slidesToScroll: 1,
prevArrow: ".product_arrow-left-2",
nextArrow: ".product_arrow-right-2",
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false,
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});



$('.responsive3').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 6,
slidesToScroll: 1,
prevArrow: ".product_arrow-left-3",
nextArrow: ".product_arrow-right-3",
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});



$('.responsive4').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 6,
slidesToScroll: 1,
prevArrow: ".product_arrow-left-4",
nextArrow: ".product_arrow-right-4",
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});



$('.responsive5').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 6,
slidesToScroll: 1,
prevArrow: ".product_arrow-left-5",
nextArrow: ".product_arrow-right-5",
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});



$('.responsive6').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 6,
slidesToScroll: 1,
prevArrow: ".product_arrow-left-6",
nextArrow: ".product_arrow-right-6",
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});

$('.news_frame').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 4,
slidesToScroll: 1,
prevArrow: ".news_arrow-left",
nextArrow: ".news_arrow-right",
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
});

    });
</script>

@endsection
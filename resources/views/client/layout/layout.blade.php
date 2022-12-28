<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
</head>
<body>
    <header>
        <input type="checkbox" id="header_connnect_responsive" class="mobile">
        <div class="menu_modal mobile"></div>
        <div class="header_frame container">
            <div class="Hmenu_item_0 mobile">
                <label for="header_connnect_responsive"><div class="Hmenu_item_bar"><i class="fas fa-bars"></i></div></label>
            </div>
            <div class="Hmenu_item Hmenu_item-1">
                <a href=""><img class="Hmenu_item_logo" src="/logo/logo-cay-canh.png" alt=""></a>
            </div>
            <div class="Hmenu_item Hmenu_item-2">
                <form class="Hmenu_item_form" action="{{route("client.search_sanpham")}}" method="GET">
                  @csrf
                    <input type="text" name="sanpham_search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="Hmenu_item Hmenu_item-3">
                <div class="Hmenu_item_info">
                    <p><a href="">0987512319</a></p>
                    <p>Tổng đài miễn phí</p>
                </div>

                <div class="Hmenu_item_info">
                    <p><a href="">0987512319</a></p>
                    <p>Tổng đài miễn phí</p>
                </div>
            </div>

            
            <div class="Hmenu-right">
                    <div class="Hmenu_item Hmenu_item-4" onclick="cart_drop()" >
                        <div class="Hmenu_cart_hover">
                            <div class="Hmenu_cart_hover_frame">
                                <p class="Hmenu_item_price"><a href="{{route('client.cart')}}">Giỏ hàng / <span>999.000.000</span>đ</a></p>
                                <a class="Hmenu_item_box" href="{{route('client.cart')}}" >0</a>
                            </div>

                            <div class="Hmenu_cart_drop Hmenu_cart_drop-hover">
                                <div class="Hmenu_cart_frame">
                                    <h3 class="mobile Hmenu_cart_tittle">Giỏ hàng</h3>
                                    <div class="Hmenu_cart-yes">
                                        <div class="Hmenu_cart_thugon">
                                          @php
                        $content=Cart::content();
                    @endphp
                    @foreach ($content as $row)
                                            <div class="Hmenu_cart_item">
                                                <img src="/img_sanpham/{{$row->options->img}}" alt="">
                                                <div class="Hmenu_cart_item_info">
                                                    <p class="Hmenu_cart_item_info_name">{{$row->name}}</p>
                                                    <p class="Hmenu_cart_item_info_price"><span>{{$row->qty}}</span>x <span>{{number_format($row->price)}}</span>đ</p>
                                                </div>
                                                <a class="Hmenu_cart_item_delete" href="{{route("client.cart_remove", $row->rowId)}}">X</a>
                                            </div>
                    @endforeach
                                        </div>
                    
                                        <p class="Hmenu_cart_allprice">Tổng sản phẩm : <span>{{Cart::subtotal();}}</span>đ</p>
                                        <div class="Hmenu_cart_btn">
                                            <a class="btn btn-green btn-long" href="{{route('client.cart')}}">Xem giỏ hàng</a>
                                            <a class="btn btn-orange btn-long" href="{{route('client.cart')}}">Thanh toán</a>
                                        </div>
                                    </div>
                                    <!-- đây là phần không có sản phẩm mua hàng -->
                                    <!-- <p class="Hmenu_cart-no">Không có sản phẩm mua hàng</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <p class="mobile Hmenu_cart_close" onclick="cart_close()"><i class="fas fa-times"></i></p>
        </div>
        <input type="checkbox" id="header_connnect_responsive" class="mobile">
        <div class="menu">
            <div class="menu_close mobile">
               <label for="header_connnect_responsive"> <i class="fas fa-times"></i></label>
            </div>
            <div class="container">
                <ul class="menu_frame">
                    <li class="menu_item">
                        <form action="" class="mobile menu_item_form">
                            <input type="text" name="search">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </li>
                    <li class="menu_item"><a href="{{route("client.index")}}">Trang chủ</a></li>
                    <li class="menu_item"><a href="{{route('client.tintuc')}}">Kinh nghiệm hay </a></li>
                    <li class="menu_item menu_item-line"><label for="menu_toggle_connect" class="menu_item_label"><a href="{{route("client.sanpham")}}">Sản phẩm</a> <i class="fa-solid fa-arrow-down mobile"></i></label>
                        <ul class="menu_drop menu_touch">
                          @foreach ($danhmucs as $danhmuc1 )
                            <li class="menu_drop_item"><a href="{{route('client.filter_sanpham', ['danhmuc' => $danhmuc1->ID_category])}}"><img class="menu_drop_con" src="/icon/bonsai-1-24x24.png" alt="">{{$danhmuc1->category_name}}</a></li>
                            @endforeach
                        </ul>
                        <input type="checkbox" id="menu_toggle_connect" class="mobile">
                        <ul class="menu_drop menu_toggle">
                          @foreach ($danhmucs as $danhmuc1 )
                            <li class="menu_drop_item"><a href="{{route('client.filter_sanpham', ['danhmuc' => $danhmuc1->ID_category])}}"><img class="menu_drop_con" src="/icon/bonsai-1-24x24.png" alt="">{{$danhmuc1->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    @yield('main')
<!-- làm phần footer  -->
    <footer>
        <div class="footer_frame container">
            <div class="Fmenu">
                <h3 class="Fmenu_tittle">Hỗ trợ khách hàng</h3>
                <ul class="Fmenu_list">
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                </ul>
            </div>


            <div class="Fmenu">
                <h3 class="Fmenu_tittle">Hỗ trợ khách hàng</h3>
                <ul class="Fmenu_list">
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                </ul>
            </div>



            <div class="Fmenu">
                <h3 class="Fmenu_tittle">Hỗ trợ khách hàng</h3>
                <ul class="Fmenu_list">
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><a href="">Hỗ trợ khách hàng</a></li>
                    <li class="Fmennu_list_item"><img src="/license/dadangky-01.png" alt=""> <img src="/license/dathongbao-01.png" alt=""></li>
                </ul> 
            </div>


            <div class="Fmenu">
                <div class="Fmenu_link">
                    <a href="" class="Fmenu_link_item Fmenu_link_item-circle Fmenu_link_item-blue"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="" class="Fmenu_link_item Fmenu_link_item-box Fmenu_link_item-red"><i class="fa-solid fa-play"></i></a>
                </div>
                <p class="Fmenu_text">Website cùng công ty</p>
            </div>
        </div>

        <h3 class="Footer_banquyen"><a href="">Sourcecode thuộc về Lương Ngọc Vinh</a></h3>
    </footer>
   <script
     type="text/javascript"
     src="https://code.jquery.com/jquery-1.11.0.min.js"
   ></script>
   <script
     type="text/javascript"
     src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
   ></script>
   <script
     type="text/javascript"
     src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
   ></script>
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
    <script src="/js/header.js"></script>
    <link rel="stylesheet" href="/css/header_footer.css">
</body>
</html>
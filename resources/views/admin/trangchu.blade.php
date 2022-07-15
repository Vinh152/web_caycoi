@extends("admin.layout.layout")
@section("main")
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Sản phẩm</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_sanpham)}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Doanh thu</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_giohang)}} đơn ->
                                    
                                    @php
                                    $tong_doanh_thu=0;
                                        foreach ($count_giohang as $tong_don) {
                                            $tong_doanh_thu=$tong_doanh_thu+$tong_don->tong_don_hang;
                                        }
                                        echo number_format($tong_doanh_thu);
                                    @endphp
                                    đ</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Nhân viên</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_nhanvien)}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Tin tức</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_tintuc)}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

              
            </div>
            <!-- #/ container -->
    @endsection
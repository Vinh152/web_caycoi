@extends("admin.layout.layout")
@section("main")
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Sản phẩm</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quản lý đơn hàng</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID giỏ hàng</th>
                                                <th>Họ</th>
                                                <th>Tên</th>
                                                <th>Quốc gia</th>
                                                <th>Thành phố</th>
                                                <th>Địa điểm</th>
                                                <th>SĐT</th>
                                                <th>Email</th>
                                                <th>Ghi chú</th>
                                                <th>Tổng đơn hàng</th>
                                                <th>Trạng thái</th>
                                                <th>Ngày mua</th>
                                                <th>Chi tiết</th>
                                                {{-- <th>Chức năng</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($giohangs as $giohang )
                                            <tr>
                                                <td>{{$giohang->ID_cart}}</td>
                                                <td>{{$giohang->curname}}</td>
                                                <td>{{$giohang->name}}</td>
                                                <td>{{$giohang->country}}</td>
                                                <td>{{$giohang->city}}</td>
                                                <td>{{$giohang->location}}</td>
                                                <td>{{$giohang->phonenumber}}</td>
                                                <td>{{$giohang->email}}</td>
                                                <td>{{$giohang->note}}</td>
                                                <td>{{number_format($giohang->total)}}đ</td>
                                                <td>{{$giohang->status}}</td>
                                                <td>{{$giohang->created_at}}</td>
                                                <td><a class="TC-font_size TC-red" href="{{route('admin_giohang.show', $giohang->ID_cart)}}">Chi tiết</a></td>
                                                {{-- <td><p class="TC-column"><a class="TC-font_size TC-green" href=""><i class="fa-solid fa-wrench"></i> Hoàn thành</a></p></td> --}}
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID giỏ hàng</th>
                                                <th>Họ</th>
                                                <th>Tên</th>
                                                <th>Quốc gia</th>
                                                <th>Thành phố</th>
                                                <th>Địa điểm</th>
                                                <th>SĐT</th>
                                                <th>Email</th>
                                                <th>Ghi chú</th>
                                                <th>Tổng đơn hàng</th>
                                                <th>Trạng thái</th>
                                                <th>Ngày mua</th>
                                                <th>Chi tiết</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
    @endsection
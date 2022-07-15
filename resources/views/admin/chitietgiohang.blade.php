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
                                <h4 class="card-title"><a href="{{route("admin_giohang.index")}}">Return</a></h4>
                                <h4 class="card-title">Quản lý đơn hàng</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID giỏ hàng</th>
                                                <th>ID sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Tổng cộng</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($chitiet as $row)
                                            <tr>
                                                <td>{{$row->ID_giohang}}</td>
                                                <td>{{$row->ID_sanpham}}</td>
                                                <td>{{$row->ten_san_pham}}</td>
                                                <td>{{number_format($row->gia_san_pham)}}đ</td>
                                                <td>{{$row->so_luong}}</td>
                                                <td>{{number_format($row->tong_cong)}}đ</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID giỏ hàng</th>
                                                <th>ID sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Tổng cộng</th>
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
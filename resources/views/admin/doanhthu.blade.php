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
                                <h4 class="card-title">Quản lý các bảng doanh thu</h4>
                                <h4 class="card-title"><a href="{{route("doanhthu.xuat")}}">Xuất ra excel</a></h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID doanh thu</th>
                                                <th>Tên doanh thu</th>
                                                <th>Tháng</th>
                                                <th>Năm</th>
                                                <th>Doanh thu</th>
                                                <th>Ngày tạo</th>
                                                <th>Ngày sửa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($doanhthu as $data)
                                            <tr>
                                                <td>{{$data->ID_revenue}}</td>
                                                <td>{{$data->revenue_name}}</td>
                                                <td>{{$data->month}}</td>
                                                <td>{{$data->year}}</td>
                                                <td>{{$data->total}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>{{$data->updated_at}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID doanh thu</th>
                                                <th>Tên doanh thu</th>
                                                <th>Tháng</th>
                                                <th>Năm</th>
                                                <th>Doanh thu</th>
                                                <th>Ngày tạo</th>
                                                <th>Ngày sửa</th>
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
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
                                <h4 class="card-title">Quản lý doanh thu</h4>
                                <form action="{{route("doanhthu.show")}}" class="TC_card_search" method="GET">
                                    @csrf
                                    <input type="text" name="thang" placeholder="Nhập tháng">
                                    <p class="TC_error">@error('thang')
                                        {{$message}}
                                    @enderror</p>
                                    <input type="text" name="nam" placeholder="Nhập năm">
                                    <p class="TC_error">@error('nam')
                                        {{$message}}
                                    @enderror</p>
                                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID giỏ hàng</th>
                                                <th>Họ tên khách hàng</th>
                                                <th>Thời gian</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($doanhthu as $row)
                                            <tr>
                                                <td>{{$row->ID_cart}}</td>
                                                <td>{{$row->curname}} {{$row->name}}</td>
                                                <td>{{$row->created_at}}</td>
                                                <td>{{number_format($row->total)}}đ</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID giỏ hàng</th>
                                                <th>Họ tên khách hàng</th>
                                                <th>Thời gian</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <p class="TC_price">Tổng doanh thu: {{number_format(session()->get("tongdoanhthu"))}}đ</p>
                                <p class="TC_btn"><a href="{{route("doanhthu.save")}}">Lưu doanh thu</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        @endsection
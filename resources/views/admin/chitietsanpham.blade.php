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
                                <h4 class="card-title">Chi tiết sản phẩm</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID sản phẩm</th>
                                                <th>Ảnh 1</th>
                                                <th>Ảnh 2</th>
                                                <th>Ảnh 3</th>
                                                <th>Ảnh 4</th>
                                                <th>Số lượng</th>
                                                <th>Mô tả</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$data->ID_product}}</td>
                                                <td><img class="TC_img_card TC_img_card-100" src="/img_sanpham/{{$data->img1}}" alt=""></td>
                                                <td><img class="TC_img_card TC_img_card-100" src="/img_sanpham/{{$data->img2}}" alt=""></td>
                                                <td><img class="TC_img_card TC_img_card-100" src="/img_sanpham/{{$data->img3}}" alt=""></td>
                                                <td><img class="TC_img_card TC_img_card-100" src="/img_sanpham/{{$data->img4}}" alt=""></td>
                                                <td>{{$data->count}}</td>
                                                <td class="TC_width-mota"><div class="TC_td-hide">
                                                    {{$data->text}}    
                                                </div></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID sản phẩm</th>
                                                <th>Ảnh 1</th>
                                                <th>Ảnh 2</th>
                                                <th>Ảnh 3</th>
                                                <th>Ảnh 4</th>
                                                <th>Số lượng</th>
                                                <th>Mô tả</th>
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
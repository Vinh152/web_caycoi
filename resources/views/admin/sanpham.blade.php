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
                                <h4 class="card-title">Quản lý sản phẩm</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID sản phẩm</th>
                                                <th>ID danh mục</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Ảnh sản phẩm</th>
                                                <th>Giá tiền</th>
                                                <th>Chi tiết sản phẩm</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td onclick="xoa()">{{$data->ID_product}}</td>
                                                <td>{{$data->ID_category}}</td>
                                                <td>{{$data->product_name}}</td>
                                                <td><img class="TC_img_card TC_img_card-30" src="/img_sanpham/{{$data->img}}" alt=""></td>
                                                <td>{{number_format($data->money)}}</td>
                                                <td><a class="TC-font_size TC-red" href="{{route('admin_sanpham.show', $data->ID_product)}}">Xem chi tiết sản phẩm</a></td>
                                                <td><p class="TC-column"><form class="TC_form_function" method="GET" action="{{route('admin_sanpham.edit',$data->ID_product)}}"><button class="TC_btn_function TC_btn_function-fix"><i class="fa-solid fa-wrench"></i> Sửa</button></form>
                                                    <form class="TC_form_function TC_form_delete" action="{{route('admin_sanpham.destroy', $data->ID_product)}}" method="POST" onSubmit="if(!confirm('Bạn có muốn xóa sản phẩm không')){return false;}">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <button type="submit" class="TC_btn_function TC_btn_function-delete"><i class="fa-solid fa-trash"></i> Xóa</button></form>
                                                </p></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID sản phẩm</th>
                                                <th>ID danh mục</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Ảnh sản phẩm</th>
                                                <th>Giá tiền</th>
                                                <th>Chi tiết sản phẩm</th>
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
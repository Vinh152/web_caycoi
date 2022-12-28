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
                                                <th>ID tin tức</th>
                                                <th>Tên tin tức</th>
                                                <th>Lời ngắn gọn</th>
                                                <th>Ảnh giới thiệu</th>
                                                <th>Mô tả</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $data)
                                            <tr>
                                                <td>{{$data->ID_new}}</td>
                                                <td>{{$data->new_name}}</td>
                                                <td>{{$data->tittle}}</td>
                                                <td><img class="TC_img_card" src="/tin_tuc/{{$data->img}}" alt=""></td>
                                                <td class="TC_td-30"><p class="TC_td-hide">{{$data->text}}</p></td>
                                             <td><p class="TC-column"><form class="TC_form_function" method="GET" action="{{route('admin_tintuc.edit',$data->ID_new)}}"><button class="TC_btn_function TC_btn_function-fix"><i class="fa-solid fa-wrench"></i> Sửa</button></form>
                                                    <form class="TC_form_function" action="{{route('admin_tintuc.destroy',$data->ID_new)}}" method="POST" onSubmit="if(!confirm('Bạn có muốn xóa tin tức không')){return false;}">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <button class="TC_btn_function TC_btn_function-delete"><i class="fa-solid fa-trash"></i> Xóa</button></form>
                                                </p></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID tin tức</th>
                                                <th>Tên tin tức</th>
                                                <th>Lời ngắn gọn</th>
                                                <th>Ảnh giới thiệu</th>
                                                <th>Mô tả</th>
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
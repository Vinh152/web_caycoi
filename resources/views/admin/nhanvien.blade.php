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
                                <h4 class="card-title">Quản lý nhân viên</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID nhân viên</th>
                                                <th>Họ tên</th>
                                                <th>Avatar</th>
                                                <th>Ngày sinh</th>
                                                <th>Email</th>
                                                <th>Giới tính</th>
                                                <th>chức vụ</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{$data->ID_nhanvien}}</td>
                                                <td>{{$data->ho_ten}}</td>
                                                <td><img class="TC_img_card TC_img_card-30" src="/tin_tuc/{{$data->anh}}" alt=""></td>
                                                <td>{{$data->ngay_sinh}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->gioi_tinh}}</td>
                                                <td>{{$data->chucvu}}</td>
                                                <td><p class="TC-column"><form class="TC_form_function" method="GET" action="{{route('admin_nhanvien.edit',$data->ID_nhanvien)}}"><button class="TC_btn_function TC_btn_function-fix"><i class="fa-solid fa-wrench"></i> Sửa</button></form>
                                                    <form class="TC_form_function" action="{{route('admin_nhanvien.destroy',$data->ID_nhanvien)}}" method="POST" onSubmit="if(!confirm('Bạn có muốn xóa nhân viên không')){return false;}">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <button class="TC_btn_function TC_btn_function-delete"><i class="fa-solid fa-trash"></i> Xóa</button></form>
                                                </p></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID nhân viên</th>
                                                <th>Họ tên</th>
                                                <th>Ảnh</th>
                                                <th>Ngày sinh</th>
                                                <th>Email</th>
                                                <th>Giới tính</th>
                                                <th>chức vụ</th>
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
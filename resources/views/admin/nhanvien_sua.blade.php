@extends("admin.layout.layout")
@section("main")
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Nhân viên</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Thêm nhân viên</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="{{route('admin_nhanvien.update', $data->ID_nhanvien)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Họ tên nhân viên <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="hoten" placeholder="Điền họ tên..." value="{{$data->ho_ten}}">
                                                <p class="TC_error">@error('hoten') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Ngày sinh <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" name="ngaysinh" value="{{$data->ngay_sinh}}">
                                                <p class="TC_error">@error('ngaysinh') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" name="email" placeholder="Điền email.." value="{{$data->email}}">
                                                <p class="TC_error">@error('email') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Giới tính <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="gioitinh">
                                                    <option value="">Please select</option>
                                                    <option value="nam">Nam</option>
                                                    <option value="nu">Nữ</option>
                                                </select>
                                                <p class="TC_error">@error('gioitinh') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Chức vụ <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="chucvu">
                                                    <option value="">Please select</option>
                                                    <option value="Nhân viên bán hàng">Nhân viên bán hàng</option>
                                                    <option value="Nhân viên kiểm toán">Nhân viên kiểm toán</option>
                                                    <option value="Nhân viên thủ kho">Nhân viên thủ kho</option>
                                                    <option value="Nhân viên hỗ trợ">Nhân viên hỗ trợ</option>
                                                    <option value="Nhân viên giao hàng">Nhân viên giao hàng</option>
                                                    <option value="Thư ký">Thư ký</option>
                                                    <option value="Sếp">Sếp</option>
                                                </select>
                                                <p class="TC_error">@error('chucvu') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Avatar <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="avatar">
                                                <p class="TC_error">@error('avatar') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"> Chấp nhận <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span> 
                                                    Tôi đồng ý với các điều khoản</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
       @endsection
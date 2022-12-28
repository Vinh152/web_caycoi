@extends("admin.layout.layout")
@section("main")
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Sản phẩm</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Thêm sản phẩm</a></li>
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
                                    <form class="form-valide" action="{{route('admin_sanpham.update', $data_sanpham->ID_product)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tên sản phẩm <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="tensanpham" placeholder="Điền tên sản phẩm..." value="{{$data_sanpham->product_name}}">
                                                <p class="TC_error">@error('tensanpham')
                                                    {{$message}}
                                                @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Ảnh sản phẩm (Ảnh chính) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="anh1">
                                                <p class="TC_error">@error('anh1')
                                                    {{$message}}
                                                @enderror</p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Ảnh sản phẩm (Ảnh 2) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="anh2">
                                                <p class="TC_error">@error('anh2')
                                                    {{$message}}
                                                @enderror</p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Ảnh sản phẩm (Ảnh 3) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="anh3">
                                                <p class="TC_error">@error('anh3') {{$message}} @enderror</p>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Ảnh sản phẩm (Ảnh 4) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="anh4">
                                                <p class="TC_error">@error('anh4') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Giá tiền <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="giatien" placeholder="Điền giá sản phẩm.." value="{{$data_sanpham->money}}">
                                                <p class="TC_error">@error('giatien') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Số lượng <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="soluong" placeholder="Điền số lượng sản phẩm.." value="{{$data_chitiet->count}}">
                                                <p class="TC_error">@error('soluong') {{$message}} @enderror</p>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Danh mục <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="ID_danhmuc">
                                                <option value="1">Please select</option>
                                                @foreach ($datas_danhmuc as $data_danhmuc)
                                                    <option value="{{$data_danhmuc->ID_danhmuc}}">{{$data_danhmuc->category_name}}</option>
                                                    @endforeach
                                                </select>
                                                <p class="TC_error">@error('ID_danhmuc') {{$message}} @enderror</p>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Mô tả <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control"  name="mota" rows="5" placeholder="Thông tin chi tiết bài viết?">{{$data_chitiet->text}}</textarea>
                                                <p class="TC_error">@error('mota') {{$message}} @enderror</p>
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
            <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('mota');
            </script>
            @endsection
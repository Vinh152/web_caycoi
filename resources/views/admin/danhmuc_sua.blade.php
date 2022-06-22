@extends("admin.layout.layout")
@section("main")
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Danh mục</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Thêm tin tức</a></li>
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
                                    <form class="form-valide" action="{{route('admin_danhmuc.update', $data->ID_danhmuc)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tên danh mục <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="tendanhmuc" placeholder="Điền tên danh mục.." value="{{$data->ten_danh_muc}}">
                                                <p class="TC_error">@error('tendanhmuc') {{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Icon danh mục <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="icon" placeholder="Chèn code icon vào.." value="{{$data->icon_danh_muc}}">
                                                <p class="TC_error">@error('icon')
                                                    {{$message}}
                                                      @enderror</p>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Chấp nhận <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span> Tôi đồng ý mọi điều khoản</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit (Sửa sản phẩm)</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'mota' );
            </script>
            <!-- #/ container -->
      @endsection
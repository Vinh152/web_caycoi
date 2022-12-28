@extends("client.layout.layout")
@section('main')
<link rel="stylesheet" href="/css/news_infomation.css">
<div class="main">
    <div class="container">
    <h1 class="main-tittle">blogs</h1>
    
    
    <div class="main-s">
        <!-- làm phần main left -->
        <div class="main-left">
           
            <div class="main-left-list">
                <h2 class="main-left-list-tittle">Bài viết mới</h2>
                <div class="main-left-list-frame">
    
                    @foreach ($tintuc_5 as $tintuc5 )
                    <div class="main-left-list-frame-item">
                        <div class="main-left-list-frame-item-img"><a href="{{route("client.tintuc_info", $tintuc5->ID_new)}}"><img src="/tin_tuc/{{$tintuc5->img}}" alt=""></a></div>
                        <div class="main-left-list-frame-item-text">
                            <p><a href="{{route("client.tintuc_info", $tintuc5->ID_new)}}">{{$tintuc5->tittle}}</a></p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- hết làm phần main left -->
        
        
        
         <!-- làm phần main right -->
    <div class="main-right">
        <div class="main-right-frame">
            <div class="main-right-tittle">
                <p class="main-right-tittle-1"><a href="">Blogs</a></p>
                <h1>{{$tintucs->ten_tin_tuc}}</h1>
                <div class="main-right-tittle-line"></div>
                <div class="main-right-tittle-img">
                    <a href=""><img src="./new-information/new_information_1/new-1.jpg" alt=""></a>
                    <div class="main-right-tittle-img-day">
                        <p>{{date('m', strtotime($tintucs->created_at))}} <br>{{date('y', strtotime($tintucs->created_at))}}</p>
                    </div>
                </div>
            </div>


            <div class="main-right-text">
                
               
               {!!$tintucs->mo_ta!!}
               
                <div class="main-right-text-link">
                    <div class="main-right-text-link-item main-right-text-link-item-facebook">
                        <p class="main-right-text-item-text"><a href=""><i class="fab fa-facebook-f"></i> Facebook</a></p>
                    </div>

                    <div class="main-right-text-link-item main-right-text-link-item-twitter">
                        <p class="main-right-text-item-text"><a href=""><i class="fab fa-twitter"></i> Twitter</a></p>
                    </div>


                    <div class="main-right-text-link-item main-right-text-link-item-google-plus">
                        <p class="main-right-text-item-text"><a href=""><i class="fab fa-google-plus-g"></i> Google +</a></p>
                    </div>


                    <div class="main-right-text-link-item main-right-text-link-item-pinterest">
                        <p class="main-right-text-item-text"><a href=""><i class="fab fa-pinterest-p"></i> Pinterest</a></p>
                    </div>


                    <div class="main-right-text-link-item main-right-text-link-item-linkedin">
                        <p class="main-right-text-item-text"><a href=""><i class="fab fa-linkedin-in"></i> LinkedIn</a></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="main-right-fill-information-user">
            <form action="">
                <h3 class="main-right-fill-information-user-tittle">Trả lời</h3>
            <div class="main-right-fill-information-user-commend">
                <h3 class="main-right-fill-information-user-commend-tittle">Bình luận</h3>
                <textarea name=""  cols="30" rows="7"></textarea>
            </div>
            <div class="main-right-fill-information-user-input">
                <div class="main-right-fill-information-user-input-item">
                    <h3 class="main-right-fill-information-user-commend-tittle">Tên *</h3>
                    <input type="text">
                </div>


                <div class="main-right-fill-information-user-input-item">
                    <h3 class="main-right-fill-information-user-commend-tittle">Email *</h3>
                    <input type="text">
                </div>


                <div class="main-right-fill-information-user-input-item">
                    <h3 class="main-right-fill-information-user-commend-tittle">Trang web</h3>
                    <input type="text" name="hello">
                </div>
            </div>
           <button class="main-right-fill-information-user-btn" name="phanhoi" >Phản hồi</button>
            </form>

            
        </div>
    </div>
    <!-- hết làm phần main right -->
    </div>
    </div>
    </div>
    <!-- hết làm phần main -->
@endsection
@extends("client.layout.layout")
@section('main')
<link rel="stylesheet" href="/css/news.css">
<!-- làm phần main -->
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
            @foreach ($tintucs as $tintuc )
            <div class="main-right-item">
                <a href="{{route("client.tintuc_info", $tintuc->ID_new)}}"><img src="/tin_tuc/{{$tintuc->img}}" alt=""></a>
                <div class="main-right-item-text">
                    <h2 class="main-right-item-text-tittle"><a href="{{route("client.tintuc_info", $tintuc->ID_new)}}">{{$tintuc->new_name}}</a></h2>
                    <p class="main-right-item-text-information"><a href="{{route("client.tintuc_info", $tintuc->ID_new)}}">{{$tintuc->tittle}}</a></p>
                </div>
    
                <div class="main-right-item-time">
                    <p><span>{{date('m', strtotime($tintuc->created_at))}}</span>  <span>{{date('Y', strtotime($tintuc->created_at))}}</span></p>
                </div>
            </div>
            @endforeach
        </div>
        <!-- hết làm phần main right -->
    </div>
    </div>
    </div>
    <!-- hết làm phần main -->

@endsection
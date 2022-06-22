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
            <div class="main-left-search">
                <form action="">
                    <div class="main-left-search-frame">
                        <input type="text" placeholder="Tìm kiếm..." name="search_main">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
    
    
            <div class="main-left-list">
                <h2 class="main-left-list-tittle">Bài viết mới</h2>
                <div class="main-left-list-frame">
    
                    <div class="main-left-list-frame-item">
                        <div class="main-left-list-frame-item-img"><a href="./new-information1.html"><img src="./tin_tuc/332-1-300x196.jpg" alt=""></a></div>
                        <div class="main-left-list-frame-item-text">
                            <p><a href="./new-information1.html">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a></p>
                        </div>
                    </div>
    
    
                    <div class="main-left-list-frame-item">
                        <div class="main-left-list-frame-item-img"><a href="./new-information2.html"><img src="./tin_tuc/58917a-300x200.jpg" alt=""></a></div>
                        <div class="main-left-list-frame-item-text">
                            <p><a href="./new-information2.html">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</a></p>
                        </div>
                    </div>
    
    
                    <div class="main-left-list-frame-item">
                        <div class="main-left-list-frame-item-img"><a href="./new-information3.html"><img src="./tin_tuc/ba-me-so-huu-khu-vuon-15m-tran-ngap-sac-hoa-dang-ghen-ti-tai-ha-noi_cd7c65acbb-2-300x225.jpg" alt=""></a></div>
                        <div class="main-left-list-frame-item-text">
                            <p><a href="./new-information3.html">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3</a></p>
                        </div>
                    </div>
    
    
                    <div class="main-left-list-frame-item">
                        <div class="main-left-list-frame-item-img"><a href="./new-information4.html"><img src="./tin_tuc/cay-van-nien-thanh-treo-1-300x252.jpg" alt=""></a></div>
                        <div class="main-left-list-frame-item-text">
                            <p><a href="./new-information4.html">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá “cắt cổ”</a></p>
                        </div>
                    </div>
    
                    <div class="main-left-list-frame-item">
                        <div class="main-left-list-frame-item-img"><a href="./new-information5.html"><img src="./tin_tuc/nhung-dieu-can-biet-khi-choi-hoa-tet-2016-1024x768-1-300x225.jpg" alt=""></a></div>
                        <div class="main-left-list-frame-item-text">
                            <p><a href="./new-information5.html">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?</a></p>
                        </div>
                    </div>

                    <div class="main-left-list-frame-item">
                        <div class="main-left-list-frame-item-img"><a href="./new-information5.html"><img src="./tin_tuc/shutterstock_166807709-300x241.jpg" alt=""></a></div>
                        <div class="main-left-list-frame-item-text">
                            <p><a href="./new-information5.html">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?</a></p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <!-- hết làm phần main left -->
        
        
        
        <!-- làm phần main right -->
        <div class="main-right">
            <div class="main-right-item">
                <a href="./new-information1.html"><img src="./tin_tuc/332-1-300x196.jpg" alt=""></a>
                <div class="main-right-item-text">
                    <h2 class="main-right-item-text-tittle"><a href="./new-information1.html">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a></h2>
                    <p class="main-right-item-text-information"><a href="./new-information1.html">Đối với một số doanh nhân, một chiếc đồng hồ đeo tay không chỉ là...</a></p>
                </div>
    
                <div class="main-right-item-time">
                    <p><span>05</span>  <span>Th7</span></p>
                </div>
            </div>
    
    
            <div class="main-right-item">
                <a href="./new-information2.html"><img src="./tin_tuc/58917a-300x200.jpg" alt=""></a>
                <div class="main-right-item-text">
                    <h2 class="main-right-item-text-tittle"><a href="./new-information2.html">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</a></h2>
                    <p class="main-right-item-text-information"><a href="./new-information2.html">Công nghiệp sản xuất đồng hồ sang trọng có dấu hiệu chững lại trong hai...</a></p>
                </div>
                <div class="main-right-item-time">
                    <p><span>05</span>  <span>Th7</span></p>
                </div>
            </div>
    
    
            <div class="main-right-item">
                <a href="./new-information3.html"><img src="./tin_tuc/ba-me-so-huu-khu-vuon-15m-tran-ngap-sac-hoa-dang-ghen-ti-tai-ha-noi_cd7c65acbb-2-300x225.jpg" alt=""></a>
                <div class="main-right-item-text">
                    <h2 class="main-right-item-text-tittle"><a href="./new-information3.html">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều...</a></h2>
                    <p class="main-right-item-text-information"><a href="./new-information3.html">Audemars Piguet Được thành lập vào năm 1875 bởi Jules-Louis Audemars...</a></p>
                </div>
                <div class="main-right-item-time">
                    <p><span>05</span>  <span>Th7</span></p>
                </div>
            </div>
    
    
    
            <div class="main-right-item">
                <a href="./new-information4.html"><img src="./tin_tuc/cay-van-nien-thanh-treo-1-300x252.jpg" alt=""></a>
                <div class="main-right-item-text">
                    <h2 class="main-right-item-text-tittle"><a href="./new-information4.html">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương...</a></h2>
                    <p class="main-right-item-text-information"><a href="./new-information4.html">Bên cạnh những Cartier, IWC và Jaeger-LeCoultre, có nhiều chiếc...</a></p>
                </div>
                <div class="main-right-item-time">
                    <p><span>05</span>  <span>Th7</span></p>
                </div>
            </div>
    
    
            <div class="main-right-item">
                <a href="./new-information5.html"><img src="./tin_tuc/nhung-dieu-can-biet-khi-choi-hoa-tet-2016-1024x768-1-300x225.jpg" alt=""></a>
                <div class="main-right-item-text">
                    <h2 class="main-right-item-text-tittle"><a href="./new-information5.html">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock...</a></h2>
                    <p class="main-right-item-text-information"><a href="./new-information5.html">Có tin Casio dự định trình làng smartwatch G-Shock trong vòng...</a></p>
                </div>
                <div class="main-right-item-time">
                    <p><span>05</span>  <span>Th7</span></p>
                </div>
            </div>


            <div class="main-right-item">
                <a href="./new-information5.html"><img src="./tin_tuc/shutterstock_166807709-300x241.jpg" alt=""></a>
                <div class="main-right-item-text">
                    <h2 class="main-right-item-text-tittle"><a href="./new-information5.html">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock...</a></h2>
                    <p class="main-right-item-text-information"><a href="./new-information5.html">Có tin Casio dự định trình làng smartwatch G-Shock trong vòng...</a></p>
                </div>
                <div class="main-right-item-time">
                    <p><span>05</span>  <span>Th7</span></p>
                </div>
            </div>
        </div>
        <!-- hết làm phần main right -->
    </div>
    </div>
    </div>
    <!-- hết làm phần main -->

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
    <link rel="stylesheet" href="/css/admin_login.css">
</head>
<body>
    <div class="frame">
        <div class="left">
            <img src="https://images.pexels.com/photos/3041110/pexels-photo-3041110.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </div>
        <div class="right">
            <h2 class="R_tittle">Đăng nhập</h2>
            <p class="R_error">{{session()->get('fail')}}</p>
            <form action="{{route('login.login')}}" class="R_form" method="POST">
              @csrf
                <div class="R_item-column">
                    <input type="text" class="R_input" name="email" placeholder="Nhập email...">
                    <p class="R_error">@error('email') {{$message}}@enderror</p>
                </div>
                <div class="R_item-column">
                    <input type="password" class="R_input" name="password" placeholder="Nhập password...">
                    <p class="R_error">@error('password') {{$message}}@enderror</p>
                </div>
                <div class="R_item-column">
                    <button class="R_btn">Đăng nhập</button>
                </div>
            </form>
            <div class="R_item-row">
                <p class="R_link"><a href="{{route('login.create')}}">Đăng ký</a></p>
                <p class="R_link"><a href="">Quên mật khẩu</a></p>
            </div>
        </div>
    </div>
</body>
</html>
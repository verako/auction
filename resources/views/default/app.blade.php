<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <!-- <link href="css/animate.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="css\jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="css\style.css">

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js\jquery.bxslider.js"></script>
        <script type="text/javascript" src="js\jquery.elevateZoom-3.0.8.min.js"></script>
        <script type="text/javascript" src="js\script.js"></script>       
    </head>
    <body>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
@section('head')           
        <header class="header ">
          <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
              
              <div class="col-12 d-flex justify-content-end align-items-flex-end">
                <ul class="login row flex-nowrap justify-content-flex-end">
                  <li>
                    <a class="base-text-color" href="#">Вход</a>
                  </li>
                  <li class="base-text-color">|</li>
                  <li>
                    <a class="base-text-color" href="#">Регистрация</a>
                  </li>
                </ul>   
                <ul class="reg row flex-nowrap justify-content-flex-end">
                  <li>
                    <a href="/profile" class="card-user"><i class="far fa-user"></i> User </a>
                  </li>
                  <li>
                    <a href="/cabinet" class="card-user "><i class="fas fa-briefcase"></i> Личный кабинет</a>
                  </li>
                  <li>
                    <a class="base-text-color" href="#"><i class="fas fa-sign-out-alt"></i> Выход</a>
                  </li>
                  <li><a class="base-text-color" href="#"><i class="far fa-envelope messages"></i><i class="count">3</i></a></li>
                   <li>
                    <select class="language base-border-color">
                      <option>Русский</option>
                      <option>Украинский</option>
                    </select>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 base-color">
            <div class="container">
              <a class="navbar-brand" href="/">LOGO</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>            
              <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav ">
                  <li class="nav-item dropdown add-color">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Каталог</a>
                      <div class="dropdown-menu base-color">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                  </li>               
                </ul>
                <form class="form-inline ">
                  <input class="form-control search" type="text" placeholder="Поиск" aria-label="Search">
                  
                  <button class="btn btn-light " type="submit"><a class="text-muted " href="#">
                      <i class="fas fa-search white"></i>
                  </a></button>
                </form>
                <ul class="navbar-nav ">
                  <li class="nav-item dropdown base-color base-border-color">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Правила</a>
                      <div class="dropdown-menu base-color">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                  </li>               
                </ul>
              </div>
            </div>
          </nav>
        </header>  
@show
        <div class="container">
          <div class="row">    
@yield('left_menu') 
@yield('breadcrumb')    
@yield('content')            
          </div>
@yield('content_home')                 
        </div>

@section('footer')
        <footer class="base-color">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-3">
                <a class="navbar-brand" href="#">LOGO</a><br>
                <a href=""><i class="fab fa-facebook "></i></a>
                <a href=""><i class="fab fa-twitter-square "></i></a>
              </div>
              <div class="col-12 col-lg-3">
                <p class="base-text-color bold">Информация</p>
                <ul class="info">
                  <li><a class="base-text-color" href="">Правила</a></li>
                  <li><a class="base-text-color" href="">Как купить?</a></li>
                  <li><a class="base-text-color" href="">Как продать?</a></li>
                  <li><a class="base-text-color" href="">Регистрация</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <p class="base-text-color bold">Контакты</p>
                <ul class="info">                  
                  <li><a class="base-text-color" href=""><i class="fas fa-phone-volume"></i> Тел.: +380 (44) 337-25-28</a></li>
                  <li><a class="base-text-color" href=""><i class="far fa-calendar-alt"></i> пн-пт, 10:00-18:00</a></li>
                  <li><a class="base-text-color" href=""><i class="far fa-envelope"></i> Написать в техническую поддержку</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <p class="base-text-color bold">Сменить язык интерфейса</p>
                <ul class="info">                  
                  <li>
                    <select class="base-color base-border-color">
                      <option>Русский</option>
                      <option>Украинский</option>
                    </select>
                  </li>
                  <li><a href="#" class="btn btn-light top"><i class="fas fa-angle-up"></i></a></li>
                </ul>
                
              </div>
            </div>            
          </div> 
          <div class="copyright center white add-color">
            <p>© auction.com 2019 </p>
          </div>  
        </footer> 
@show                
    </body>
</html>

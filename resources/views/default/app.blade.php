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
        <link rel="stylesheet" type="text/css" href={{ asset('css/jquery.bxslider.css') }}>
        <link rel="stylesheet" href={{ asset('owl-carousel\owl.carousel.css') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }}>

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src={{ asset("js\jquery.bxslider.js")}}></script><!-- карусель -->
        <script type="text/javascript" src={{ asset("js\jquery.elevateZoom-3.0.8.min.js")}}></script><!-- zoom по наведению -->
        <script type="text/javascript" src={{ asset("js\jquery.deepcheckbox.js")}}></script><!-- список с чекбоксами -->
        <script type="text/javascript" src={{ asset("js\calendar.js")}}></script>
        <script type="text/javascript" src={{ asset("owl-carousel\owl.carousel.min.js")}}></script>
        <!-- <script type="text/javascript" src="js\plugin.js"></script> --> <!-- галерея для миниатюр -->
        <script type="text/javascript" src={{ asset("js\script.js")}}></script>
    </head>
    <body>

@section('head')           
        <header class="header ">
          <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
              <div class="col-0 col-lg-6 col-xl-6 quantity">
                  <p><span>58652  </span> <i class="fas fa-gavel"></i> активных лота
                  <span>/ 8652 </span> <i class="fas fa-user"></i> пользователей</p>
              </div>
              <div class="col-12 col-lg-6 col-xl-6 d-flex justify-content-end align-items-flex-end row">
                  @if (Route::has('login'))
                      <div class="top-right links">

                          {{--@auth--}}
                              <ul class="reg row flex-nowrap justify-content-flex-end">
                                  <li>
                                      <a href="/profile" class="card-user"><i class="far fa-user"></i> User </a>
                                  </li>
                                  <li>
                                      <a href="/cabinet" class="card-user "><i class="fas fa-briefcase"></i> Личный кабинет</a>
                                  </li>
                                  <li><a class="base-text-color" href="#"><i class="far fa-envelope messages"></i><i class="count">3</i></a></li>
                                  <li>
                                      <a class="base-text-color" href="#"><i class="fas fa-sign-out-alt"></i> Выход</a>
                                  </li>

                                  @auth{{--@else--}}
                              <ul class="login row flex-nowrap justify-content-flex-end">
                                  <li>
                                      <a class="base-text-color" href="{{ route('login') }}">Вход</a>
                                  </li>
                                  <li class="base-text-color">|</li>

                              @if (Route::has('register'))
                                      <li>
                                          <a class="base-text-color" href="{{ route('register') }}">Регистрация</a>
                                      </li>
                              @endif
                                  {{--<li>--}}
                                      {{--<select class="language base-border-color">--}}
                                          {{--<option>Русский</option>--}}
                                          {{--<option>Украинский</option>--}}
                                      {{--</select>--}}
                                  {{--</li>--}}

                          @endauth
                              </ul>
                      </div>
                  @endif

              </div>
            </div>
          </div>
          <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 base-color">
            <div class="container">
              <a class="navbar-brand" href="/"><img src="img/logo_gold.png" alt="" style="width: 8em"></a>
                <form class="form-inline search-head" onsubmit="location.href='/search';return false">
                    <input class="form-control search" type="text" placeholder="Поиск" aria-label="Search"  >

                    {{--<button class="btn btn-light " type="submit"><a class="text-muted " href="/search"onclick=" location.href='/search'">--}}
                            {{--<i class="fas fa-search white"></i>--}}
                        {{--</a></button>--}}
                </form>
                <a href="/add_lot" class="btn add_lot_header search-head"><i class="fas fa-plus"></i> лот</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>            
              <div class="collapse navbar-collapse left" id="navbarCollapse">
                <ul class="navbar-nav ">
                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle add-color" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Разделы</a>
                      <div class="dropdown-menu base-color">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                  </li>
                    <li class="nav-item">
                        <form class="form-inline search-menu" onsubmit="location.href='/search';return false">
                            <input class="form-control search" type="text" placeholder="Поиск" aria-label="Search">

                            <button class="btn btn-light " type="submit"><a class="text-muted " href="/search">
                            <i class="fas fa-search white"></i>
                            </a></button>
                        </form>
                    </li>
                    <li class="nav-item"><a href="/add_lot" class="btn add_lot_header search-menu">Добавить лот</a></li>
                    {{--<li><a href="/admin" class="btn add_lot_header">Админ</a></li>--}}
                    <li class="nav-item dropdown  base-border-color">
                        <a class="nav-link dropdown-toggle base-color regulations" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Информация</a>
                        <div class="dropdown-menu base-color">
                            <a class="dropdown-item" href="#">О нас</a>
                            <a class="dropdown-item" href="/regulations">Правила</a>
                            <a class="dropdown-item" href="/questions">Часто задаваемые вопросы</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Как купить?</a>
                            <a class="dropdown-item" href="#">Как продать?</a>
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
@yield('breadcrumb')  
@yield('left_menu')   
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
                {{--<p class="base-text-color bold">Сменить язык интерфейса</p>--}}
                <ul class="info">                  
                  {{--<li>--}}
                    {{--<select class="base-color base-border-color">--}}
                      {{--<option>Русский</option>--}}
                      {{--<option>Украинский</option>--}}
                    {{--</select>--}}
                  {{--</li>--}}
                  <li><a href="/add_lot" class="btn add_lot_header">Добавить лот</a></li>
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

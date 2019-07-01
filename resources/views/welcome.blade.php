@extends('default.app')
@section('left_menu')
            {{--<div class="col-12 col-lg-3">--}}
              {{--<nav class="navbar bg-light">--}}
                {{--<!-- Links -->--}}
                {{--<ul class="navbar-nav">--}}
                  {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="/categories">Категория 1</a>--}}
                  {{--</li>--}}
                  {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Категория 2</a>--}}
                  {{--</li>--}}
                  {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Категория 3</a>--}}
                  {{--</li>--}}
                  {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Категория 4</a>--}}
                  {{--</li>--}}
                  {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Категория 5</a>--}}
                  {{--</li>--}}
                  {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Категория 6</a>--}}
                  {{--</li>--}}
                {{--</ul>--}}
              {{--</nav>--}}
            {{--</div>--}}
            <div class="col-12 col-lg-3 example about_lot_title" >
              <h5>Разделы</h5>
              <div class="anchor home_menu">
                <ul >
                  <li >
                    <label class="ul">
                      <a href="/categories"> Часы старинные</a>
                      {{--<i class="fas fa-angle-down open"></i>--}}
                      {{--<i class="fas fa-angle-left "></i>--}}
                    </label>
                    {{--<ul class="open">--}}
                      {{--<li >--}}
                        {{--<label class="ul"><a href="#"> Часы наручные</a> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i></label>--}}
                        {{--<ul class="open">--}}
                          {{--<li><label><a href="#"> Чайка</a></label></li>--}}
                          {{--<li><label><a href="#"> Haarlem</a></label></li>--}}
                          {{--<li><label><a href="#"> Alkmaar</a></label></li>--}}
                        {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li >--}}
                        {{--<label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i><a href="#"> Часы настольные</a></label>--}}
                        {{--<ul class="open">--}}
                          {{--<li><label><a href="#"> Чайка</a></label></li>--}}
                          {{--<li><label><a href="#"> Haarlem</a></label></li>--}}
                          {{--<li><label><a href="#"> Alkmaar</a></label></li>--}}
                        {{--</ul>--}}
                      {{--</li>--}}
                    {{--</ul>--}}
                  </li>
                  <li >
                    <label class="ul">
                      {{--<i class="fas fa-angle-down open"></i>--}}
                      {{--<i class="fas fa-angle-right "></i>--}}
                      <a href="#"> Нумизматика</a>
                    </label>
                    {{--<ul class="open">--}}
                      {{--<li >--}}
                        {{--<label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i><a href="#"> Монеты СССР</a></label>--}}
                        {{--<ul class="open">--}}
                          {{--<li><label><a href="#"> Чайка</a></label></li>--}}
                          {{--<li><label><a href="#"> Haarlem</a></label></li>--}}
                          {{--<li><label><a href="#"> Alkmaar</a></label></li>--}}
                        {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li >--}}
                        {{--<label class="ul"><a href="#">  Монеты Украины</a></label>--}}

                      {{--</li>--}}
                    {{--</ul>--}}
                  </li>
                  <li>

                    <label class="ul"><a href="#"> Живопись </a></label>
                  </li>
                </ul>
              </div>
            </div>
@endsection 
@section('content')            
            <div class="col-12 col-lg-9 welcome">
              <div id="tabs">
              <ul>
                <li><a href="#tabs-1">Интересные лоты</a></li>
                <li><a href="#tabs-2">Популярные лоты</a></li>
              </ul>
              <div id="tabs-1">                
                <div class="row">                
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href="/card"><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>                
                      <div class="card-body">
                        <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elito </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\antikvariat-metall.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\moneta.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\antikvariat-metall.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\moneta.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="btn btn-light shows">Показать больше</a>
                </div>     
              </div>
              <div id="tabs-2">
                <div class="row">
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\antikvariat-metall.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div> 
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\moneta.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>               
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href="/card"><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>                
                      <div class="card-body">
                        <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>            
                  
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\antikvariat-metall.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card" >
                      <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                      <a href=""><img class="card-img-top" src="img\moneta.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a href="#" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                        <h5 class="price bold">520 грн</h5>
                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="btn btn-light shows">Показать больше</a>
                </div>
              </div>              
            </div>
              
            </div>
@endsection
@section('content_home')          
          <div class="row advantages_working">
            <div class="col-12 col-lg-12 advantag">
              <h3>Преимущества работы с нами</h3>
            </div>
            <div class="col-6 col-lg-6 advantages center">
              <img src="img\callcenter1.jpg">
            </div>
            <div class="col-6 col-lg-6 text">
              <h5>Мы прислушиваемся к Вашим пожеланиям</h5>
              <p> Служба поддержки всегда поможет разрешить спорные ситуации и учтет все Ваши предложения</p>
            </div>
            <div class="col-6 col-lg-6 text">
              <h5>But I must explain to you how</h5>
              <p> all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete accountpleasure itself, because it is pleasur</p>
            </div>
            <div class="col-6 col-lg-6 advantages center">
              <img src="img\callcenter1.jpg">
            </div>
            <div class="col-6 col-lg-6 advantages center">
              <img src="img\callcenter1.jpg">
            </div>
            <div class="col-6 col-lg-6 text">
              <h5>But I must explain to you how</h5>
              <p> all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete accountpleasure itself, because it is pleasur</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-12 center">
              <h2 class="base-text-color shows">Желаете зарабатывать на продаже товаров?</h2>
              <h5>Загрузите их прямо сейчас!</h5>
              <a href="/add_lot" class="btn add-color shows white">Добавить лот</a>
            </div>
          </div> 
@endsection 
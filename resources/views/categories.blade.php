@extends('default.app')
@section('breadcrumb')
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item"><a href="/categories" class="base-text-color">Категория</a></li>
                <li class="breadcrumb-item active" aria-current="page">Подкатегория</li>
            </ol>
        </nav>
    </div>
@endsection
@section('left_menu')
            <div class="col-12 col-lg-3 example about_lot_title search" >
              <form action="/" method="post">
                    {{ csrf_field() }}
                  <h6>Категории:</h6>
                  <div class="anchor ">
                    <ul >
                        <li >
                            <label class="ul">
                                <i class="fas fa-angle-down open"></i>
                                <i class="fas fa-angle-right "></i>
                                <a href="/categories"> Часы старинные</a>
                            </label>
                            <ul class="open">
                                <li >
                                    <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i><a href="#"> Часы наручные</a></label>
                                    <ul class="open">
                                        <li><label><a href="#"> Чайка</a></label></li>
                                        <li><label><a href="#"> Haarlem</a></label></li>
                                        <li><label><a href="#"> Alkmaar</a></label></li>
                                    </ul>
                                </li>
                                <li >
                                    <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i><a href="#"> Часы настольные</a></label>
                                    <ul class="open">
                                        <li><label><a href="#"> Чайка</a></label></li>
                                        <li><label><a href="#"> Haarlem</a></label></li>
                                        <li><label><a href="#"> Alkmaar</a></label></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i><a href="#"> Нумизматика</a></label>
                            <ul class="open">
                                <li >
                                    <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i><a href="#"> Монеты СССР</a></label>
                                    <ul class="open">
                                        <li><label><a href="#"> Чайка</a></label></li>
                                        <li><label><a href="#"> Haarlem</a></label></li>
                                        <li><label><a href="#"> Alkmaar</a></label></li>
                                    </ul>
                                </li>
                                <li >
                                    <label class="ul"><a href="#">  Монеты Украины</a></label>
                                    
                                </li>
                            </ul>
                        </li>
                        <li>
                            
                            <label class="ul"><a href="#"> Живопись </a></label>
                        </li>
                    </ul>
                </div>
                  <div class="sorting">
                      <h6>Сортировать по:</h6>
                      <p>Времени окончания:</p>
                      <input type="radio" id="contactChoice11" name="contact" >
                      <label for="contactChoice11">от большего к меньшему</label><br>

                      <input type="radio" id="contactChoice22" name="contact" >
                      <label for="contactChoice22">от меньшего к большему</label>

                      <p>Времени выставления:</p>
                      <input type="radio" id="contactChoice33" name="contact" >
                      <label for="contactChoice33">от большего к меньшему</label><br>

                      <input type="radio" id="contactChoice44" name="contact" >
                      <label for="contactChoice44">от меньшего к большему</label>

                      <p>Цене:</p>
                      <input type="radio" id="contactChoice55" name="contact1" >
                      <label for="contactChoice55">от большего к меньшему</label><br>

                      <input type="radio" id="contactChoice66" name="contact1" >
                      <label for="contactChoice66">от меньшего к большему</label>

                      <p>Количеству ставок:</p>
                      <input type="radio" id="contactChoice77" name="contact2" >
                      <label for="contactChoice77">от большего к меньшему</label><br>

                      <input type="radio" id="contactChoice88" name="contact2" >
                      <label for="contactChoice88">от меньшего к большему</label>
                  </div>
                  <div class="sorting_price">
                      <h6>Диапазон цены:</h6>
                      <input type="radio" id="sorting_price11" name="sorting_price" >
                      <label for="sorting_price11">до 100 грн</label><br>

                      <input type="radio" id="sorting_price22" name="sorting_price" >
                      <label for="sorting_price22">от 101 грн до 500 грн</label><br>

                      <input type="radio" id="sorting_price33" name="sorting_price" >
                      <label for="sorting_price33">от 501 грн до 1000 грн</label><br>

                      <input type="radio" id="sorting_price44" name="sorting_price">
                      <label for="sorting_price44">более 1000 грн</label><br>

                      <input type="radio" id="sorting_price55" name="sorting_price">
                      <label for="sorting_price55">ручной ввод:</label><br>
                      <input type="text" class="from" name="from" placeholder="от" >
                      <input type="text" class="from" name="to" placeholder="до" >
                  </div>
                  <div class="region_select">
                      <h6>Область:</h6>
                      <ul>
                          <li><input type="checkbox" name="" /> <label> Запорожская</label></li>
                          <li><input type="checkbox" name="" /> <label> Киевская</label></li>
                          <li><input type="checkbox" name="" /> <label> Винницкая</label></li>
                          <li><input type="checkbox" name="" /> <label> Одесская</label></li>
                          <li><input type="checkbox" name="" /> <label> Житомирская</label></li>
                      </ul>
                  </div>
                  <input type="reset" class=" btn  cleaning" value="Сброс фильтра">
              </form>
            </div>
@endsection 
@section('content') 
            <div class="col-12 col-lg-9 categor" >
                <h1>Название категории</h1>
                <hr>
                <h3>Рекламируемые лоты:</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="news-slider" class="owl-carousel">
                                <div class="post-slide">
                                    <div class="post-img">
                                        <a href="/card"><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>
                                        <a href="/card" class="category">Cделать ставку</a>
                                    </div>
                                    <div class="post-review">
                                        <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                                        <h5 class="price bold">520 грн</h5>
                                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                                    </div>
                                </div>
                                <div class="post-slide">
                                    <div class="post-img">
                                        <a href="/card"><img class="card-img-top" src="img\1.jpg" alt="Card image cap"></a>
                                        <a href="/card" class="category">Cделать ставку</a>
                                    </div>
                                    <div class="post-review">
                                        <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                                        <h5 class="price bold">520 грн</h5>
                                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                                    </div>
                                </div>
                                <div class="post-slide">
                                    <div class="post-img">
                                        <a href="/card"><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>
                                        <a href="/card" class="category">Cделать ставку</a>
                                    </div>
                                    <div class="post-review">
                                        <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                                        <h5 class="price bold">520 грн</h5>
                                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                                    </div>
                                </div>
                                <div class="post-slide">
                                    <div class="post-img">
                                        <a href="/card"><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>
                                        <a href="/card" class="category">Cделать ставку</a>
                                    </div>
                                    <div class="post-review">
                                        <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                                        <h5 class="price bold">520 грн</h5>
                                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                                    </div>
                                </div>
                                <div class="post-slide">
                                    <div class="post-img">
                                        <a href="/card"><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>
                                        <a href="/card" class="category">Cделать ставку</a>
                                    </div>
                                    <div class="post-review">
                                        <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                                        <h5 class="price bold">520 грн</h5>
                                        <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                                        <a href="" class="card-user"><i class="far fa-user"></i> User </a><span class="plus">(+6</span> / <span class="minus">-1)</span>
                                        <a href="#" class="btn btn-light bet">Сделать ставку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <hr>
              <div class="row">                
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
                <div class="col-12 more">
                    <a href="#" class="btn btn-light shows">Показать больше</a>
                </div>                
                <div class="col-12 page">
                    <ul id="pagination-flickr">
                        <li class="previous-off"><</li>
                        <li class="active">1</li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li class="next"><a href="">></a></li>
                        <li><input type="text" class="transition" placeholder=""></li>
                        <li class="next"><a href="">перейти</a></li>
                    </ul>
                </div>
              </div>
            </div>            
@endsection 
             
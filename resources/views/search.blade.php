@extends('default.app')
@section('breadcrumb')
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Результат поиска</li>
            </ol>
        </nav>
    </div>
@endsection
@section('left_menu')
            <div class="col-12 col-lg-3 example about_lot_title search">
             <form action="/" method="post">
                    {{ csrf_field() }}
                <h6>Категории:</h6>
                <div class="anchor">
                    <ul >
                        <li >
                            <input type="checkbox" data-id="id_lota"  data-name="Часы старинные" /> 
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы старинные</label>
                            <ul class="open">
                                <li >
                                    <input type="checkbox" data-id="id_lota" data-name="Часы наручные" /> <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы наручные</label>
                                    <ul class="open">
                                        <li><input type="checkbox" data-id="id_lota" data-name="Amsterdam" /><label> Чайка</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Haarlem" /><label> Haarlem</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Alkmaar" /> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                   <input type="checkbox" data-id="id_lota" data-name="Часы настольные" /> <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы настольные</label>
                                    <ul class="open">
                                        <li><input type="checkbox" data-id="id_lota" data-name="Amsterdam" /><label> Чайка</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Haarlem" /><label> Haarlem</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Alkmaar" /> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <input type="checkbox" data-id="id_lota"  data-name="Нумизматика" /> 
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Нумизматика</label>
                            <ul class="open">
                                <li >
                                    <input type="checkbox" data-id="id_lota" data-name="Монеты СССР" /> <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Монеты СССР</label>
                                    <ul class="open">
                                        <li><input type="checkbox" data-id="id_lota" data-name="Amsterdam" /><label> Чайка</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Haarlem" /><label> Haarlem</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Alkmaar" /> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                   <input type="checkbox" data-id="id_lota" data-name="Монеты Украины" /> <label class="ul">  Монеты Украины</label>
                                    
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" data-id="id_lota"  data-name=" Живопись" /> 
                            <label class="ul"> Живопись </label>
                        </li>
                    </ul>
                </div>
                <div class="sorting">
                    <h6>Сортировать по:</h6>
                    <p>Времени окончания:</p>
                    <input type="radio" id="contactChoice1" name="contact" >
                    <label for="contactChoice1">от большего к меньшему</label><br>

                    <input type="radio" id="contactChoice2" name="contact" >
                    <label for="contactChoice2">от меньшего к большему</label>
                    
                    <p>Времени выставления:</p>
                    <input type="radio" id="contactChoice3" name="contact" >
                    <label for="contactChoice3">от большего к меньшему</label><br>

                    <input type="radio" id="contactChoice4" name="contact" >
                    <label for="contactChoice4">от меньшего к большему</label>

                    <p>Цене:</p>
                    <input type="radio" id="contactChoice5" name="contact1" >
                    <label for="contactChoice5">от большего к меньшему</label><br>

                    <input type="radio" id="contactChoice6" name="contact1" >
                    <label for="contactChoice6">от меньшего к большему</label>
                    
                    <p>Количеству ставок:</p>
                    <input type="radio" id="contactChoice7" name="contact2" >
                    <label for="contactChoice7">от большего к меньшему</label><br>

                    <input type="radio" id="contactChoice8" name="contact2" >
                    <label for="contactChoice8">от меньшего к большему</label>
                </div>
                <div class="sorting_price">
                    <h6>Диапазон цены:</h6>
                    <input type="radio" id="sorting_price" name="sorting_price" >
                    <label for="sorting_price">до 100 грн</label><br>

                    <input type="radio" id="sorting_price2" name="sorting_price" >
                    <label for="sorting_price2">от 101 грн до 500 грн</label><br>

                    <input type="radio" id="sorting_price3" name="sorting_price" >
                    <label for="sorting_price3">от 501 грн до 1000 грн</label><br>

                    <input type="radio" id="sorting_price4" name="sorting_price">
                    <label for="sorting_price4">более 1000 грн</label><br>

                    <input type="radio" id="sorting_price5" name="sorting_price">
                    <label for="sorting_price5">ручной ввод:</label><br>
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
            <div class="col-12 col-lg-9 sample" >
              <h1>По Вашему запросу найдено 25 лотов</h1>
              <div class="row">                
                <div class="col-6 col-lg-4">
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
                <div class="col-6 col-lg-4">
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
                <div class="col-6 col-lg-4">
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
                <div class="col-6 col-lg-4">
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
                <div class="col-6 col-lg-4">
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
                <div class="col-6 col-lg-4">
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
             
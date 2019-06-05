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
            <div class="col-12 col-lg-3 example about_lot_title  search">
                <div class="anchor ">
                    <ul >
                        <li >

                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i><a href="#"> Часы старинные</a> </label>
                            <ul class="open">
                                <li >
                                     <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы наручные</label>
                                    <ul class="open">
                                        <li><label> Чайка</label></li>
                                        <li><label> Haarlem</label></li>
                                        <li><label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                    <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы настольные</label>
                                    <ul class="open">
                                        <li><label> Чайка</label></li>
                                        <li><label> Haarlem</label></li>
                                        <li><label> Alkmaar</label></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Нумизматика</label>
                            <ul class="open">
                                <li >
                                     <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Монеты СССР</label>
                                    <ul class="open">
                                        <li><label> Чайка</label></li>
                                        <li><label> Haarlem</label></li>
                                        <li><label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                   <label class="ul">  Монеты Украины</label>
                                    
                                </li>
                            </ul>
                        </li>
                        <li>
                            
                            <label class="ul"> Живопись </label>
                        </li>
                    </ul>
                </div>
            </div>
@endsection 
@section('content') 
            <div class="col-12 col-lg-9">
              <div class="row">                
                <div class="col-6 col-lg-4">
                  <div class="card" >
                    <a href="" class="follow card-user"><i class="far fa-star "></i> Добавить в избранное</a>
                    <a href="/card"><img class="card-img-top" src="img\antikvariat.jpg" alt="Card image cap"></a>                
                    <div class="card-body">
                      <a href="/card" class="card-title bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </a>
                      <h5 class="price bold">520 грн</h5>
                      <p class="ending">Окончание: 10.05.2019, 20:00:00+5</p>
                      <a href="" class="card-user"><i class="far fa-user"></i> User </a><span>(+65)</span>
                      <a href="#" class="btn btn-light del">Сделать ставку</a>
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
                      <a href="" class="card-user"><i class="far fa-user"></i> User </a><span>(+65)</span>
                      <a href="#" class="btn btn-light del">Удалить</a>
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
                      <a href="" class="card-user"><i class="far fa-user"></i> User </a><span>(+65)</span>
                      <a href="#" class="btn btn-light del">Удалить</a>
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
                      <a href="" class="card-user"><i class="far fa-user"></i> User </a><span>(+65)</span>
                      <a href="#" class="btn btn-light del">Удалить</a>
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
                      <a href="" class="card-user"><i class="far fa-user"></i> User </a><span>(+65)</span>
                      <a href="#" class="btn btn-light del">Удалить</a>
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
                      <a href="" class="card-user"><i class="far fa-user"></i> User </a><span>(+65)</span>
                      <a href="#" class="btn btn-light del">Удалить</a>
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
                    </ul>
                </div>
              </div>
            </div>            
@endsection 
             
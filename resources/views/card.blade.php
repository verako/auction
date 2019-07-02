@extends('default.app')
@yield('head')
@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item"><a href="#" class="base-text-color">Категория</a></li>
                <li class="breadcrumb-item active" aria-current="page">Название лота</li>
            </ol>
        </nav>
@endsection
@section('content')
	
	
<div class="lot" >
    <div class="about_lot_title row info">
        <div>
            <p>Ставок: <br><span>15</span> </p>
        </div>
        <div>
            <p>Максимальная ставка: <br><span>3000 грн</span> </p>
        </div>
        <div>
            <p>Следят за лотом: <br><span>15 человек</span> </p>
        </div>
        <div>
            <p>Добавлено: <br><span>15.04.2019 18:55</span> </p>
        </div>
        <div>
            <p><a href="" class="card-user"><i class="far fa-user"></i>User</a><br><span class="plus">+6</span> / <span class="minus">-1</span> </p>
        </div>
        <div>
            <a href="#" class="btn favorites">Подписаться на продавца</a>
          
        </div>        
    </div>
    <h3>Название лота </h3>
    <div class="row">
        <div class="col-12 col-lg-4 oneproduct">
            <ul class="bxslider">
                <li><img src="img/moneta.jpg" data-zoom-image="img/moneta.jpg" id="zoom2"></li>
                <li><img src="img/antikvariat-metall.jpg" data-zoom-image="img/antikvariat-metall.jpg" id="zoom1"></li>              
                <li><img src="img/antikvariat.jpg"  data-zoom-image="img/antikvariat.jpg" id="zoom" ></li>
                <li><img src="img/antikvariat.jpg"  data-zoom-image="img/antikvariat.jpg" id="zoom3" ></li>
                <li><img src="img/antikvariat.jpg"  data-zoom-image="img/antikvariat.jpg" id="zoom4" ></li>
                <li><img src="img/moneta.jpg"  data-zoom-image="img/moneta.jpg" id="zoom5" ></li>
                <li><img src="img/antikvariat-metall.jpg"  data-zoom-image="img/antikvariat-metall.jpg" id="zoom6" ></li>
            </ul>
            <div id="bx-pager" class ="carousel-min">
                <a class="carousel-element" data-slide-index="0" href="" ><img src="img/moneta.jpg" ></a>              
                <a class="carousel-element" data-slide-index="1" href=""><img src="img/antikvariat-metall.jpg" ></a>              
                <a class="carousel-element" data-slide-index="2" href=""><img src="img/antikvariat.jpg" ></a>
                <a class="carousel-element" data-slide-index="3" href=""><img src="img/antikvariat.jpg" ></a>
                <a class="carousel-element" data-slide-index="4" href=""><img src="img/antikvariat.jpg" /></a>
                <a class="carousel-element" data-slide-index="5" href=""><img src="img/moneta.jpg" ></a>
                <a class="carousel-element" data-slide-index="6" href=""><img src="img/antikvariat-metall.jpg" ></a>      
            </div>
            {{--<p class="center-text">--}}
                {{--<a href="#" class="card-user" id="js-prev">Назад</a>--}}
                {{--<a href="#" class="card-user" id="js-next">Вперед</a>--}}
            {{--</p>--}}
<!--  карусель мобильная версия -->
            <div class="carousel slide mobilever" data-ride="carousel" id="light1">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/moneta.jpg" alt="First slide"> 
                    </div>
                    <div class="carousel-item">
                        <img src="img/antikvariat-metall.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/antikvariat.jpg" alt="Third slide">
                    </div> 
                    <div class="carousel-item ">
                        <img src="img/moneta.jpg" alt="First slide"> 
                    </div>
                    <div class="carousel-item">
                        <img src="img/antikvariat-metall.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/antikvariat.jpg" alt="Third slide">
                    </div>                        
                </div>
            <!-- /.carousel-inner -->
                    <a class="carousel-control-prev" href="#light1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#light1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
<!--  /карусель мобильная версия -->
        </div>
        <div class="col-12 col-lg-8 oneproduct">
            <div class="about_lot_title row prices">
                <div class="col-6 col-lg-6">
                    <p>Стартовая цена: <br><span>150 грн</span> </p>
                </div>
                <div class="col-6 col-lg-6 actual">
                    <p>Текущая ставка: (<a href="#" class="card-user" data-toggle="modal" data-target="#ratesModal">15 ставок</a>)<br><span>3000 грн</span> <span class="nbu"> ~ 111 $</span>  </p>
 <!-- modal окно ставок -->
                    <div class="modal fade" id="ratesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ставки</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table border="0" cellpadding="20">
                                        <tr>
                                            <th>Имя</th>
                                            <th>Дата/время</th>
                                            <th>Ставка</th>
                                        </tr>
                                        <tr>
                                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a><br><span class="plus">+6</span> / <span class="minus">-1</span> </td>
                                            <td>22.06.2019 22:10</td>
                                            <td>250</td>
                                        </tr>
                                        <tr>
                                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a><br><span class="plus">+6</span> / <span class="minus">-1</span> </td>
                                            <td>21.06.2019 20:10</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a><br><span class="plus">+6</span> / <span class="minus">-1</span> </td>
                                            <td>20.06.2019 22:10</td>
                                            <td>150</td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
<!-- /modal окно ставок -->
                </div>
                <div class="col-6 col-lg-6">
                    <p>Окончание: <br><span>15.04.2019 18:55</span> </p>
                </div>
                <div class="col-6 col-lg-6 actual">
                    <p>Осталось: <br><span>1 день 18:55:02</span> </p>
                </div>                  
            </div>
            <div class="row rate">
                <div class="col-12 col-lg-12">
                    <form>
                       <label for="rate">Сделать ставку</label>
                       <input type="text" name="rate" value="3050"> 
                       <label for="autorate">Автоставка</label>
                       до <input type="text" name="autorate" value="2200"><br>
                       <p>Шаг цены мин. <span class="step">50 грн</span> </p>
                       <a href="#" class="btn add-color white">Сделать стаку</a>
                       <a href="#" class="btn favorites follow_lot">Следить за лотом</a>
                    </form>                    
                </div>                
            </div>
        </div> 
        <div class="col-12 col-lg-12 description">
            <h4>Описание</h4>
            <div id="tabs">
              <ul>
                <li><a href="#tabs-1">Основное</a></li>
                <li><a href="#tabs-2">Оплата / Доставка</a></li>
              </ul>
              <div id="tabs-1">                
                <div class="col-12">                           
                    <table border="0" cellpadding="20">
                        <tr>
                            <th>Материал</th>
                            <th>Состояние</th>
                            <th>Реставрация</th>
                            <th>Дефекты</th>
                            <th>Местонахождение</th>
                        </tr>
                        <tr>
                            <td>серебро</td>
                            <td>по фото по фото по фото ммпо фото</td>
                            <td>нет</td>
                            <td>по фото </td>
                            <td>Одесская обл, г. Одесса</td>
                        </tr>               
                    </table>  
                </div>        
              </div>
              <div id="tabs-2">
                <p>Оплата: <span>на карту</span></p>
               
                <p>Доставка: <span>новая почта</span></p>
              </div>              
            </div>
                     
            <hr>
            <p><span>Описание: </span> Отличный экземпляр. Украсит любую коллекцию</p>

            <h4>Комментарии:</h4>
            <ul class="comment">
                <li>
                    <span class="seller"><i class="far fa-user"></i> Продавец</span>
                    <a href="" class="card-user">User</a> <span class="time"> 20.05.2018 11:22</span>
                    <p>lorem At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod m</p>
                </li>
                <li>
                    <span ><i class="far fa-user"></i></span>
                    <a href="" class="card-user">User</a> <span class="time"> 20.05.2018 11:22</span>
                    <p>lorem At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod m</p>
                </li>
            </ul>
            <hr>
            <form>                
                <textarea name="comment" cols="60" rows="3" placeholder="Напишите комментарий"></textarea><br>
                <input type="file" name="f"><br>
                <a href="#" class="btn add-color white send">Оставить комментарий</a>
            </form>
        </div>

    </div>
</div>
@endsection

	
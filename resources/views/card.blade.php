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
            <p><a href="" class="card-user"><i class="far fa-user"></i>User</a><span>(+165)</span> </p>
        </div>
        <div>
            <a href="#" class="btn favorites">Подписаться</a>
        </div>        
    </div>
    <h3>Название лота </h3>
    <div class="row">
        <div class="col-12 col-lg-4 oneproduct">
            <ul class="bxslider">
                <li><img src="img/moneta.jpg" data-zoom-image="img/moneta.jpg" id="zoom2"></li>
                <li><img src="img/antikvariat-metall.jpg" data-zoom-image="img/antikvariat-metall.jpg" id="zoom1"></li>              
                <li><img src="img/antikvariat.jpg"  data-zoom-image="img/antikvariat.jpg" id="zoom" ></li>
            </ul>
            <div id="bx-pager" >
                <a  data-slide-index="0" href=""><img src="img/moneta.jpg" ></a>              
                <a  data-slide-index="1" href=""><img src="img/antikvariat-metall.jpg" ></a>              
                <a  data-slide-index="2" href=""><img src="img/antikvariat.jpg" ></a>
            </div>
        </div>
        <div class="col-12 col-lg-8 oneproduct">
            <div class="about_lot_title row prices">
                <div class="col-6 col-lg-6">
                    <p>Стартовая цена: <br><span>150 грн</span> </p>
                </div>
                <div class="col-6 col-lg-6">
                    <p>Текущая ставка: <br><span>3000 грн</span> (<a href="" class="card-user">15 ставок</a>) </p>
                </div>
                <div class="col-6 col-lg-6">
                    <p>Окончание: <br><span>15.04.2019 18:55</span> </p>
                </div>
                <div class="col-6 col-lg-6">
                    <p>Осталось: <br><span>1 день 18:55:02</span> </p>
                    <div>
                        <a href="#" class="btn favorites">В топ</a>
                    </div>  
                </div>                  
            </div>
            <div class="row rate">
                <div class="col-12 col-lg-12">
                    <form>
                       <label for="rate">Сделать ставку</label>
                       <input type="number" name="rate" value="3050"> 
                       <label for="autorate">Автоставка</label>
                       до <input type="number" name="autorate" value="2200"><br>
                       <p>Шаг цены мин. 50 грн</p>
                       <a href="#" class="btn add-color white">Сделать стаку</a>
                       <a href="#" class="btn favorites follow">Следить за товаром</a>
                    </form>                    
                </div>                
            </div>
        </div> 
        <div class="col-12 col-lg-12 description">
            <h4>Описание</h4>
            <hr>
            <p>Материал: <span>серебро</span></p>
            <hr>
            <p>Состояние: <span>по фото</span></p>
            <hr>
            <p>Реставрация: <span>нет</span></p>
            <hr>
            <p>Дефекты: <span>по фото</span></p>
            <hr>
            <p>Местонахождение: <span>Одесская обл, г. Одесса</span></p>
            <hr>
            <p>Оплата: <span>на карту</span></p>
            <hr>
            <p>Доставка: <span>новая почта</span></p>
            <hr>
            <p>Описание: <span> Отличный экземпляр. Украсит любую коллекцию</span></p>

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

	
@extends('default.app')
	
@section('content')
	
	@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
        	    <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
        	    <li class="breadcrumb-item"><a href="#" class="base-text-color">Категория</a></li>
    			<li class="breadcrumb-item active" aria-current="page">Название лота</li>
            </ol>
        </nav>
    @show 
<div class="" >
    <div class="about_lot_title row">
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
            <p><a href=""><i class="far fa-user"></i>User</a><span>(+165)</span> </p>
        </div>
        <div><a href="#" class="btn favorites">Подписаться</a></div>        
    </div>
    <h3>Название лота </h3>
    <div class="row">
        <div class="col-12 col-lg-4 oneproduct">

            <ul class="bxslider">
              <li><img src="img/antikvariat.jpg"  data-zoom-image="img/antikvariat.jpg" id="zoom" ></li>
              <li><img src="img/antikvariat-metall.jpg" data-zoom-image="img/antikvariat-metall.jpg" id="zoom1"></li>
              <li><img src="img/moneta.jpg" data-zoom-image="img/moneta.jpg" id="zoom2"></li>
            </ul>
            <div id="bx-pager" >
              <a  data-slide-index="0" href=""><img src="img/antikvariat.jpg" ></a>
              <a  data-slide-index="1" href=""><img src="img/antikvariat-metall.jpg" ></a>
              <a  data-slide-index="2" href=""><img src="img/moneta.jpg" ></a>
            </div>
        </div>
        <div class="col-12 col-lg-4 oneproduct">
            <div class="about_lot_title row"></div>
        </div> 
        <div class="col-12 col-lg-3 oneproduct">
            
            <form action="" style="display: inline-block;">
            <p>Цена: <span>100</span>грн</p>
                <input type="number" value="1"> шт.
                <br><br>
                <button class="btn btn-cart"><span class="glyphicon glyphicon-shopping-cart"></span>Купить</button>
            </form>
            
        </div>

    </div>
</div>
@endsection

	
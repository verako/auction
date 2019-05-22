@extends('default.app')
@yield('head')
@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Кабинет</li>
            </ol>
        </nav>
@endsection
@section('content')
<div class="cabinet col-12">
    <div class="row">
        <div class="col-12 col-lg-3 avatar">
            <img src="img/user.png">
            <div class="about_lot_title row main">
                <div class="col-12"><a href="/profile" class="card-user">Профиль</a></div>
                <div class="col-12"><a href="/add_lot" class="card-user">Создать лот <i class="fas fa-plus"></i></a> </div>               
            </div>
            <div class="about_lot_title row main">
                <div class="col-12 col-lg-12 accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
                    <h3>Продать</h3>
                    <div>
                       <ul>
                           <li><a href="" class="card-user">Активные</a></li>
                           <li><a href="" class="card-user">Завершенные</a></li>
                           <li><a href="" class="card-user">Проданные</a></li>
                           <li><a href="" class="card-user">Удаленные</a></li>
                           <li><a href="" class="card-user">Архив</a></li>
                       </ul>         
                    </div>
                    <h3>Купить</h3>
                    <div>
                        <ul>
                           <li><a href="" class="card-user">Активные</a></li>
                           <li><a href="" class="card-user">Слежение</a></li>
                           <li><a href="" class="card-user">Завершенные</a></li>
                           <li><a href="" class="card-user">Автоставки</a></li>
                           <li><a href="" class="card-user">Архив</a></li>
                        </ul>        
                    </div>                             
                </div>       
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="about_lot_title row basic">
                <div>
                    <p><i class="fas fa-chart-line"></i> Деловой рейтинг: <br><span>Продавец: +15</span> /<span> Покупатель: +15</span> </p>
                </div>
                <div>
                    <p><i class="fas fa-comment-dots"></i> Отзывы: <br><span>5 / 2</span> </p>
                </div>
                <div>
                    <p><a href="" class="card-user" data-toggle="modal" data-target="#purseModal"><i class="fas fa-wallet"></i> Кошелёк</a><br><span>5.20</span></p>
                </div>            
            </div>
<!-- modal окно  -->
                    <div class="modal fade" id="purseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Движение средств</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table border="0" cellpadding="10">
                               <tr>
                                <th>Дата / время</th>
                                <th>Комментарий</th>
                                <th>Сумма</th>
                                <th>Баланс</th>
                               </tr>
                               <tr>
                                <td>20.05.2019 14:12</td>
                                <td>Название лота</td>
                                <td>1250 грн</td>
                                <td>250 грн</td>
                               </tr>               
                            </table>
                            <a  href="#" type="submit" class=" btn add-color white " aria-haspopup="true" aria-expanded="false">Пополнить</a>  
                          </div>                         
                        </div>
                      </div>
                    </div>
<!-- /modal окно  -->
            <h5>Мои лоты</h5>
            <div class="about_lot_title row basic">
                <table border="0" cellpadding="20">
                   <tr>
                    <th>№</th>
                    <th>Название</th>
                    <th>Окончание</th>
                    <th>Цена</th>
                    <th>Ставки</th>
                    <th>Чат</th>
                    <th>Комментарии</th>
                    <th>Топ</th>
                   </tr>
                   <tr>
                    <td>1</td>
                    <td><a href="/card" class="card-user">Название лота</a></td>
                    <td>25.05.2019</td>
                    <td>250 грн</td>
                    <td>1250 грн</td>
                    <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i><i class="count_chat">3</i></a></td>
                    <td>1</td>
                    <td>нет</td>
                   </tr>               
                </table>   
            </div> 
            <h5>Лоты за которыми слежу</h5>
            <div class="about_lot_title row basic">
                <table border="0" cellpadding="20">
                   <tr>
                    <th>№</th>
                    <th>Название</th>
                    <th>Окончание</th>
                    <th>Цена</th>
                    <th>Ставки</th>
                    <th>Чат</th>
                    <th>Комментарии</th>
                    <th>Топ</th>
                   </tr>
                   <tr>
                    <td>1</td>
                    <td><a href="/card" class="card-user">Название лота</a></td>
                    <td>25.05.2019</td>
                    <td>250 грн</td>
                    <td>1250 грн</td>
                    <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i></a></td>
                    <td>1</td>
                    <td>нет</td>
                   </tr>               
                </table>   
            </div>        
        </div>
    </div>
   
</div>
@endsection

	
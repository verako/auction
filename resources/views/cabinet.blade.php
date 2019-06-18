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
                           <li><p class="card-user my_lot_active">Активные</p></li>
                           <li><p class="card-user reserve_price">С резервной ценой</p></li>
                           <li><p class="card-user advertised_lots">Рекламируемые</p></li>
                           <li><p class="card-user completed_lots">Завершенные</p></li>
                           <li><p class="card-user sold_lots">Проданные</p></li>
                           <li><p class="card-user del_lots">Удаленные</p></li>
                           <li><p class="card-user archive_lots">Архив</p></li>
                       </ul>         
                    </div>
                    <h3>Купить</h3>
                    <div>
                        <ul>
                           <li><p class="card-user buy_lot">Активные</p></li>
                           <li><p class="card-user lots_follow">Слежение</p></li>
                           <li><p class="card-user completed_lot">Купленные лоты</p></li>
                           <li><p class="card-user auto_delivery">Автоставки</p></li>
                           <li><p class="card-user archive_sold_lot">Архив</p></li>
                        </ul>        
                    </div>                             
                </div>       
            </div>
        </div>
        <div class="col-12 col-lg-9" >
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
                <div>
                    <a href="/chat" class="card-user"><i class="far fa-envelope messages"></i> Чат с модератором</a>
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
            <div id="basic">
                <div id="my_lot_active">
                    <h5>Мои лоты</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="10">
                            <thead>
                               <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Чат</th>
                                <th>Комментарии</th>
                                <th>Реклама</th>
                                <th></th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                    <td>25.05.2019<br> 20:22</td>
                                    <td>250 грн</td>
                                    <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                            {{--<i class="count_chat">3</i>--}}
                                        </a></td>
                                    <td>1</td>
                                    <td><a href="#" class="card-user "><i class="fas fa-bullhorn"></i> Рекламировать</a><br>
                                        {{--<a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>--}}
                                    </td>
                                    <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                        {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                    <td>25.05.2019 <br> 20:22</td>
                                    <td>250 грн</td>
                                    <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                            {{--<i class="count_chat">3</i>--}}
                                        </a></td>
                                    <td>1</td>
                                    <td><a href="#" class="card-user "><i class="fas fa-bullhorn"></i> Рекламировать</a><br>
                                        {{--<a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>--}}
                                    </td>
                                    <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                        {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                    <td>25.05.2019 <br> 20:22</td>
                                    <td>250 грн</td>
                                    <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                            {{--<i class="count_chat">3</i>--}}
                                        </a></td>
                                    <td>1</td>
                                    <td><a href="#" class="card-user "><i class="fas fa-bullhorn"></i> Рекламировать</a><br>
                                        {{--<a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>--}}
                                    </td>
                                    <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                        {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="reserve_price">
                    <h5>Мои лоты с резервной ценой</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="10">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Резервная цена</th>
                                <th>Комментарии</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td>300 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить резервную цену</a>
                                </td>
                                <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                    {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>500 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить резервную цену</a>
                                </td>
                                <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                    {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>350 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить резервную цену</a>
                                </td>
                                <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                    {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="advertised_lots">
                    <h5>Мои рекламирунмые лоты</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="10">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Комментарии</th>
                                <th>Реклама</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить рекламу</a>
                                </td>
                                <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                    {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить рекламу</a>
                                </td>
                                <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                    {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить рекламу</a>
                                </td>
                                <td><a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                    {{--<a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>--}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="completed_lots">
                    <h5>Мои завершенные лоты</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="10">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Комментарии</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>
                                </td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>
                                </td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>
                                </td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="sold_lots">
                    <h5>Мои проданные лоты</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="15">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 20:22</td>
                                <td>250 грн</td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019  20:22</td>
                                <td>250 грн</td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019  20:22</td>
                                <td>250 грн</td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="del_lots">
                    <h5>Мои удаленные лоты</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="10">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Комментарии</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>
                                </td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>
                                </td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="card-user "><i class="fas fa-angle-double-up"></i> Выставить заново</a>
                                </td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="archive_lots">
                    <h5>Мой ахив лотов</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="15">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 20:22</td>
                                <td>250 грн</td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019  20:22</td>
                                <td>250 грн</td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019  20:22</td>
                                <td>250 грн</td>
                                <td>
                                    <a href="/add_lot" class="card-user "><i class="far fa-copy"></i> Дубликат лота</a><br>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="buy_lot">
                    <h5>Лоты на которые сделаны ставки</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="15">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Чат</th>
                                <th>Комментарии</th>
                                <th>Продавец</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                        {{--<i class="count_chat">3</i>--}}
                                    </a></td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                        {{--<i class="count_chat">3</i>--}}
                                    </a></td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                        {{--<i class="count_chat">3</i>--}}
                                    </a></td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="lots_follow">
                    <h5>Лоты за которыми слежу</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="10">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Комментарии</th>
                                <th>Продавец</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="completed_lot">
                    <h5>Купленные лоты</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="15">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Чат</th>
                                <th>Комментарии</th>
                                <th>Продавец</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                        {{--<i class="count_chat">3</i>--}}
                                    </a></td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                        {{--<i class="count_chat">3</i>--}}
                                    </a></td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><a href="/chat" class="card-user"><i class="far fa-envelope messages"></i>
                                        {{--<i class="count_chat">3</i>--}}
                                    </a></td>
                                <td>1</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="auto_delivery">
                    <h5>Лоты на которые сделана автоставка</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="10">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Продавец</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>

                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>

                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                                <td>
                                    <a href="#" class="card-user "><i class="far fa-trash-alt"></i> Удалить</a>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="archive_sold_lot">
                    <h5>Архив купленных лотов</h5>
                    <div class="about_lot_title row basic my_lot">
                        <table border="0" cellpadding="15">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Окончание</th>
                                <th>Цена</th>
                                <th>Продавец</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019<br> 20:22</td>
                                <td>250 грн</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>


                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>


                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/card" class="card-user">Название лота...............Название лота........</a></td>
                                <td>25.05.2019 <br> 20:22</td>
                                <td>250 грн</td>
                                <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection

	
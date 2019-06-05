@extends('default.app')
@yield('head')
@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item"><a href="/cabinet" class="base-text-color">Кабинет</a></li>
                <li class="breadcrumb-item active" aria-current="page">Профиль пользователя</li>
            </ol>
        </nav>
@endsection
@section('content')
<div class="cabinet col-12">
    <div class="row">
        <div class="col-12 col-lg-3 avatar">
            <img class="" src="img/user.png" >           
            <div class="img_refresh"><i class="fas fa-pencil-alt"></i> <input type="file"></div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="about_lot_title row basic_edit">
                <div><a href="#" class="btn favorites" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-pencil-alt"></i></a></div>
                <div>
                    <p><i class="far fa-user"></i> Фамилия Имя <br><i class="far fa-envelope "></i> mail@mail.com</p>
                    
                </div>
                <div>
                    <p><i class="fas fa-map-marker-alt"></i> Область, Город <br><span>Дата регистрации <br><i class="far fa-calendar-alt"></i> 20.05.2019</span> </p>
                </div>
                <div>
                    <p><i class="fas fa-chart-line"></i> Деловой рейтинг: <br><span>Покупатель:</span> 0 / <span>Продавец:</span> 0 </p>
                </div>
                <div class="margin-bottom">
                    <a href="#" class="btn favorites">Подписаться</a>
                    <a href="#" class="btn favorites">Заблокировать для меня</a>
                </div>        
            </div> 
<!-- modal окно  -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Редактирование данных профиля</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="/" method="post">
                                {{ csrf_field() }}
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Имя:</label>
                                <input type="text" class="form-control" id="recipient-name" name="name" value="имя пользователя" required>
                              </div>
                              <div class="form-group">
                                <label for="recipient-email" class="col-form-label">Актуальная почта(логин остается прежним!):</label>
                                <input type="email" class="form-control" id="recipient-email" name="email" required>
                              </div>
                              <div class="form-group">
                                <label for="recipient-select" class="col-form-label">Область:</label>
                                <select class="region base-border-color" id="recipient-select" name="select">
                                    <option>Запорожская</option>
                                    <option>Киевская</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="recipient-sity" class="col-form-label">Город:</label>
                                <input type="text" class="form-control" id="recipient-sity" name="sity" value="Город" required>
                              </div>
                              <div class="modal-footer">
                                <a  href="#" type="submit" class=" btn add-color white " aria-haspopup="true" aria-expanded="false">Сохранить</a>
                                <a href="#" class="btn favorites" data-dismiss="modal">Закрыть</a>                               
                                <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
                              </div>
                            </form>
                          </div>                         
                        </div>
                      </div>
                    </div>
<!-- /modal окно  -->            
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h5>Отзывы</h5>
            <div class="about_lot_title row feedback">
                <div>
                    <ul class="comment">
                        <li>
                            <span><i class="far fa-user"></i></span>
                            <a href="" class="card-user">User</a> <span class="time"> 20.05.2018 11:22 </span><i class="far fa-thumbs-up"></i>
                            <p>lorem At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod m</p>
                        </li>
                        <li>
                            <span ><i class="far fa-user"></i></span>
                            <a href="" class="card-user">User</a> <span class="time"> 20.05.2018 11:22 </span><i class="far fa-thumbs-down"></i>
                            <p>lorem At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod m</p>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="col-12">
            <h5>Подписка</h5>
            <div class="about_lot_title row feedback">
                <div class="col-12">                           
                    <table border="0" cellpadding="20">
                        <tr>
                            <th>№</th>
                            <th>Имя</th>
                            <th>Рейтинг</th>
                            <th>Количество лотов</th>
                            <th>Отписаться</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            <td>0 / 0</td>
                            <td>25</td>
                            <td><a href="#" class="btn favorites">Отписаться</a></td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            <td>0 / 0</td>
                            <td>25</td>
                            <td><a href="#" class="btn favorites">Отписаться</a></td>
                        </tr>                
                    </table>  
                </div> 
            </div>
        </div>
        <div class="col-12">
            <h5>Подписчики</h5>
            <div class="about_lot_title row feedback">
                <div class="col-12">                           
                    <table border="0" cellpadding="20">
                        <tr>
                            <th>№</th>
                            <th>Имя</th>
                            <th>Рейтинг</th>
                            <th>Количество лотов</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            <td>0 / 0</td>
                            <td>25</td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            <td>0 / 0</td>
                            <td>25</td>
                        </tr>                
                    </table>  
                </div> 
            </div>
        </div>
        <div class="col-12">
            <h5>Заблокированы для меня</h5>
            <div class="about_lot_title row feedback">
                <div class="col-12">                           
                    <table border="0" cellpadding="20">
                        <tr>
                            <th>№</th>
                            <th>Имя</th>
                            <th>Рейтинг</th>
                            <th>Количество лотов</th>
                            <th>Отписаться</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            <td>0 / 0</td>
                            <td>25</td>
                            <td><a href="#" class="btn favorites">Разблокировать</a></td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td><span><i class="far fa-user"></i></span><a href="" class="card-user">User</a> </td>
                            <td>0 / 0</td>
                            <td>25</td>
                            <td><a href="#" class="btn favorites">Разблокировать</a></td>
                        </tr>                
                    </table>  
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection

	
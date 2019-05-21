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
        <div class="col-12 col-lg-3 user_avatar avatar">
            <img class="" src="img/user.png" >
           
            <div class="img_refresh"><i class="fas fa-pencil-alt"></i> <input type="file" value="обновить"></div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="about_lot_title row basic">
                <div>
                    <p>Фамилия Имя <br><span>mail@mail.com</span></p>
                </div>
                <div>
                    <p>Область, Город <br><span>Дата регистрации</span> </p>
                </div>
                <div>
                    <p>Деловой рейтинг: <br><span>Покупатель:</span> 0 <br><span>Продавец:</span> 0 </p>
                </div>
                <div>
                    <a href="#" class="btn favorites">Подписаться</a>
                </div>        
            </div>             
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
    </div>
</div>
@endsection

	
@extends('admin.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Пользователи
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админка</a></li>
        <li class="active">Пользователи</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      {{--<div class="row">--}}
        {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
          {{--<div class="info-box">--}}
            {{--<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>--}}

            {{--<div class="info-box-content">--}}
              {{--<span class="info-box-text">CPU Traffic</span>--}}
              {{--<span class="info-box-number">90<small>%</small></span>--}}
            {{--</div>--}}
            {{--<!-- /.info-box-content -->--}}
          {{--</div>--}}
          {{--<!-- /.info-box -->--}}
        {{--</div>--}}
        {{--<!-- /.col -->--}}
        {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
          {{--<div class="info-box">--}}
            {{--<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>--}}

            {{--<div class="info-box-content">--}}
              {{--<span class="info-box-text">Likes</span>--}}
              {{--<span class="info-box-number">41,410</span>--}}
            {{--</div>--}}
            {{--<!-- /.info-box-content -->--}}
          {{--</div>--}}
          {{--<!-- /.info-box -->--}}
        {{--</div>--}}
        {{--<!-- /.col -->--}}

        {{--<!-- fix for small devices only -->--}}
        {{--<div class="clearfix visible-sm-block"></div>--}}

        {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
          {{--<div class="info-box">--}}
            {{--<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>--}}

            {{--<div class="info-box-content">--}}
              {{--<span class="info-box-text">Sales</span>--}}
              {{--<span class="info-box-number">760</span>--}}
            {{--</div>--}}
            {{--<!-- /.info-box-content -->--}}
          {{--</div>--}}
          {{--<!-- /.info-box -->--}}
        {{--</div>--}}
        {{--<!-- /.col -->--}}
        {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
          {{--<div class="info-box">--}}
            {{--<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>--}}

            {{--<div class="info-box-content">--}}
              {{--<span class="info-box-text">New Members</span>--}}
              {{--<span class="info-box-number">2,000</span>--}}
            {{--</div>--}}
            {{--<!-- /.info-box-content -->--}}
          {{--</div>--}}
          {{--<!-- /.info-box -->--}}
        {{--</div>--}}
        {{--<!-- /.col -->--}}
      {{--</div>--}}
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
  {{--Lot--}}
        <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Администрирование пользователей</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <!-- select -->
            <div class="form-group">
              <div class="box-tools">
                <label>Поиск по имени пользователя:</label>
                <div class="input-group input-group-sm search" >
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Поиск">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
              <div class="box-tools">
                <label>Поиск по имени почты пользователя:</label>
                <div class="input-group input-group-sm search" >
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Поиск">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>

            <!-- text input -->
          <form action="">
            <div class="form-group">
              <label class="box-title" >Найденные пользователи:</label>
              <div class="box-body table-responsive no-padding ">
                <table class="table table-hover">
                  <thead>
                  <tr>
                    <th>№</th>
                    <th>Имя пользователя</th>
                    <th>ФИО</th>
                    <th>Дата регистрации</th>
                    <th>Почта</th>
                    <th>Рейтинг покупателя</th>
                    <th>Рейтинг продавца</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Иванов Иван Иванович</td>
                    <td>25.06.2019</td>
                    <td>mail@mail.com</td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>

                    <td>
                      <p class="card-user trash"><i class="fa fa-trash"></i> Заблокировать</p>
                      <p class="card-user closes none"><i class="fa  fa-close"></i> Отменить</p>
                    </td>

                  </tr>
                  <tr>
                    <td>2</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Иванов Иван Иванович</td>
                    <td>25.06.2019</td>
                    <td>mail@mail.com</td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>

                    <td>
                      <p class="card-user trash"><i class="fa fa-trash"></i> Заблокировать</p>
                      <p class="card-user closes none"><i class="fa  fa-close"></i> Отменить</p>
                    </td>

                  </tr>
                  <tr>
                    <td>3</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Иванов Иван Иванович</td>
                    <td>25.06.2019</td>
                    <td>mail@mail.com</td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>

                    <td>
                      <p class="card-user trash"><i class="fa fa-trash"></i> Заблокировать</p>
                      <p class="card-user closes none"><i class="fa  fa-close"></i> Отменить</p>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Иванов Иван Иванович</td>
                    <td>25.06.2019</td>
                    <td>mail@mail.com</td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>
                    <td><span class="plus">+6</span> / <span class="minus">-1</span></td>

                    <td>
                      <p class="card-user trash"><i class="fa fa-trash"></i> Заблокировать</p>
                      <p class="card-user closes none"><i class="fa  fa-close"></i> Отменить</p>
                    </td>

                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          <button type="submit" class="btn btn-primary">Сохранить</button>
          <button type="button" class="btn btn-danger">Отменить редактирование</button>
          </form>
        </div>

        <!-- /.box-body -->
      </div>
  {{--/Lot--}}
        </div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Создать нового пользователя</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Имя пользователя:</label>
                  <input type="text" class="form-control" placeholder="Имя">
                </div>
                <div class="form-group">
                  <label>Почта:</label>
                  <input type="text" class="form-control" placeholder="Почта">
                </div>
                <div class="form-group">
                  <label>Пароль:</label>
                  <input type="text" class="form-control" placeholder="Пароль">
                </div>
                <div class="form-group">
                  <label>Роль пользователя:</label>
                  <select class="form-control" >
                    <option>Модератор</option>
                    <option>Пользователь</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
                <button type="button" class="btn btn-danger">Отменить</button>

              </form>
            </div>

            <!-- /.box-body -->
          </div>
        </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

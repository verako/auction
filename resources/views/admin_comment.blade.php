@extends('admin.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Комментарии и отзывы
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админка</a></li>
        <li class="active">Комментарии и отзывы</li>
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
          <h3 class="box-title">Администрирование комментариев</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <!-- text input -->
            <div class="form-group">
              <label class="box-title" >Коментарии на согласование:</label>
              <div class="box-body table-responsive no-padding ">
                <table class="table table-hover">
                  <thead>
                  <tr >
                    <th>№</th>
                    <th>Пользователь</th>
                    <th>Сообщение</th>
                    <th>Дата</th>
                    <th>Лот</th>
                    <th class="center">Выбрать все <br><input id="check_all_comment" type="checkbox"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                    <td>25.05.2019 20:22</td>
                    <td><a href="#" class="card-user">Название лота.....</a></td>
                    <td class="center">
                      <input class="check_comment" type="checkbox">
                    </td>

                  </tr>
                  <tr>
                    <td>2</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                    <td>25.05.2019 20:22</td>
                    <td><a href="#" class="card-user">Название лота.....</a></td>
                    <td class="center">
                      <input class="check_comment" type="checkbox">
                    </td>

                  </tr>
                  <tr>
                    <td>3</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                    <td>25.05.2019 20:22</td>
                    <td><a href="#" class="card-user">Название лота.....</a></td>
                    <td class="center">
                      <input class="check_comment" type="checkbox">
                    </td>

                  </tr>
                  <tr>
                    <td>3</td>
                    <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                    <td>25.05.2019 20:22</td>
                    <td><a href="#" class="card-user">Название лота.....</a></td>
                    <td class="center">
                      <input class="check_comment" type="checkbox">
                    </td>

                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          <button type="submit" class="btn btn-primary">Опубликовать</button>
          <button type="button" class="btn btn-danger">Удалить</button>
        </div>

        <!-- /.box-body -->
      </div>
  {{--/Lot--}}
        </div>
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Администрирование отзывов</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- text input -->
              <div class="form-group">
                <label class="box-title" >Отзывы на согласование:</label>
                <div class="box-body table-responsive no-padding ">
                  <table class="table table-hover">
                    <thead>
                    <tr >
                      <th>№</th>
                      <th>Кто оставил отзыв</th>
                      <th>Сообщение</th>
                      <th>Дата</th>
                      <th>Для кого отзыв</th>
                      <th class="center">Выбрать все <br><input type="checkbox" id="check_all"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                      <td>25.05.2019 20:22</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td class="center">
                        <input type="checkbox" class="all">
                      </td>

                    </tr>
                    <tr>
                      <td>2</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                      <td>25.05.2019 20:22</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td class="center">
                        <input type="checkbox" class="all">
                      </td>

                    </tr>
                    <tr>
                      <td>3</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                      <td>25.05.2019 20:22</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td class="center">
                        <input type="checkbox" class="all">
                      </td>

                    </tr>
                    <tr>
                      <td>3</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga.</td>
                      <td>25.05.2019 20:22</td>
                      <td><span><i class="fa fa-user"></i></span><a href="" class="card-user"> User</a> </td>
                      <td class="center">
                        <input type="checkbox" class="all">
                      </td>

                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Опубликовать</button>
              <button type="button" class="btn btn-danger">Удалить</button>
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

@extends('admin.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Правила
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админка</a></li>
        <li><a href="#">Страницы</a></li>
        <li class="active">Правила</li>
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

  {{--Вопрос/ответ--}}
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Администрирование страници правил</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="box-body pad">
            <form>
              <div class="form-group">
                <label>Выберите страницу правил для редактирования:</label>
                <select class="form-control">
                  <option>Правила</option>
                  <option>Как купить?</option>
                </select>
              </div>

              <p class="red"><i class="fa fa-edit"></i> Или сразу вводите имя новой страницы для добавления:</p>

              <div class="form-group">
                <label>Имя страницы:</label>
                <input type="text" class="form-control" placeholder="Имя страницы">
              </div>
              <div class="form-group">
                <label>Заголовок:</label>
                <input type="text" class="form-control" placeholder="Заголовок">
              </div>
              <label>Текс правила:</label>
              <textarea id="editor2" name="editor2" rows="10" cols="80">
                   Текст.
              </textarea>
            </form>
          </div>
          <form role="form">
            <!-- select -->

            <button type="button" class="btn btn-warning">Добавить</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <button type="button" class="btn btn-danger">Удалить</button>

          </form>
        </div>

        <!-- /.box-body -->
      </div>
  {{--/Вопрос/ответ--}}


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

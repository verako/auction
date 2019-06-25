@extends('admin.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Категории
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админка</a></li>
        <li class="active">Категории</li>
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

  {{--Категории--}}
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Администрирование категорий</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form role="form">
            <!-- select -->
            <div class="form-group">
              <label>Выберите категорию для редактирования:</label>
              <select class="form-control">
                <option>Старинные часы</option>
                <option>Нумизматика</option>
              </select>
            </div>

            <p class="red"><i class="fa fa-edit"></i> Или сразу вводите имя новой категории для добавления:</p>

            <!-- text input -->
            <div class="form-group">
              <label>% от продажи:</label>
              <input type="text" class="form-control" placeholder="% от продажи">
            </div>
            <!-- text input -->
            <div class="form-group">
              <label>Название категории:</label>
              <input type="text" class="form-control" placeholder="Название категории">
            </div>
            <button type="button" class="btn btn-warning">Добавить</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <button type="button" class="btn btn-danger">Удалить</button>

          </form>
        </div>

        <!-- /.box-body -->
      </div>
  {{--/Категории--}}

  {{--Податегории--}}
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Администрирование подкатегорий</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form role="form">
            <!-- select -->
            <div class="form-group">
              <label>* Выберите категорию:</label>
              <select class="form-control">
                <option>Старинные часы</option>
                <option>Нумизматика</option>
              </select>
            </div>
            <!-- select -->
            <div class="form-group">
              <label>Выберите подкатегорию для редактирования:</label>
              <select class="form-control">
                <option>Наручные часы</option>
                <option>Монеты СССР</option>
              </select>
            </div>

            <p class="red"><i class="fa fa-edit"></i> Или сразу вводите имя новой подкатегории для добавления:</p>

            <!-- text input -->
            <div class="form-group">
              <label>Название подкатегории:</label>
              <input type="text" class="form-control" placeholder="Название подкатегории">
            </div>
            <button type="button" class="btn btn-warning">Добавить</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <button type="button" class="btn btn-danger">Удалить</button>

          </form>
        </div>

        <!-- /.box-body -->
      </div>
  {{--/Податегории--}}

  {{--Подподатегории--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Администрирование подкатегорий</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form role="form">
            <!-- select -->
            <div class="form-group">
              <label>* Выберите категорию:</label>
              <select class="form-control">
                <option>Старинные часы</option>
                <option>Нумизматика</option>
              </select>
            </div>
            <!-- select -->
            <div class="form-group">
              <label>* Выберите подкатегорию:</label>
              <select class="form-control">
                <option>Наручные часы</option>
                <option>Монеты СССР</option>
              </select>
            </div>
            <!-- select -->
            <div class="form-group">
              <label>Выберите подкатегорию подкатегории для редактирования:</label>
              <select class="form-control">
                <option>Чайка</option>
                <option>Монеты СССР 1950</option>
              </select>
            </div>
            <p class="red"><i class="fa fa-edit"></i> Или сразу вводите имя новой подкатегории для добавления:</p>

            <!-- text input -->
            <div class="form-group">
              <label>Название для подкатегории:</label>
              <input type="text" class="form-control" placeholder="Название подкатегории">
            </div>
            <button type="button" class="btn btn-warning">Добавить</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <button type="button" class="btn btn-danger">Удалить</button>

          </form>
        </div>

        <!-- /.box-body -->
      </div>
  {{--/Подподатегории--}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

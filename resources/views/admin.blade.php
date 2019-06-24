@extends('admin.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Бонусы
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админка</a></li>
        <li class="active">Бонусы</li>
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

      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Бонусная система</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form role="form">
            <!-- select -->
            <div class="form-group">
              <label>Выбор принципа начисления бонусов</label>
              <select class="form-control">
                <option>по периоду времени</option>
                <option>по количеству пользователей</option>
              </select>
            </div>
            <!-- select -->
            <div class="form-group">
              <label>Для кого начисляются бонусы</label>
              <select class="form-control">
                <option>для всех</option>
                <option>для старых пользователей</option>
                <option>для новых пользователей</option>
              </select>
            </div>
            <!-- text input -->
            <div class="form-group">
              <label>Для первых</label>
              <input type="text" class="form-control" placeholder="Количество пользователей">
            </div>

            <div class="form-group">
              <label>Период</label>
              <label for="datetime" class="col-form-label">с:</label>
              <input type="text" value="dd-mm-yy" id="datetime1"   onfocus="this.select();lcs(this)" >
              <label for="datetime" class="col-form-label">по:</label>
              <input type="text" value="dd-mm-yy" id="datetime2"   onfocus="this.select();lcs(this)" >
            </div>
            <!-- text input -->
            <div class="form-group">
              <label>Количество бонусных процентов:</label>
              <input type="text" class="form-control" placeholder="Количество бонусных %">
            </div>

            <!-- radio -->
            <div class="form-group">
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                  Включить начисление бонусов
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                  Отключить начисление бонусов
                </label>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

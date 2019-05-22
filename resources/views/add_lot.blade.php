@extends('default.app')
@yield('head')
@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление лота</li>
            </ol>
        </nav>
@endsection
@section('content')
<div class="col-12">
    <hr class="hr">
    <form action="/" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="category" class="col-form-label">Выбеоите категорию</label>
            <select class="base-color base-border-color" id="category" name="category" required>
                <option>Монеты</option>
                <option>Картины</option>
            </select> 
        </div>
        <div class="form-group">
            <label for="subcategory" class="col-form-label">Выбеоите подкатегорию (не обязательно)</label>
            <select class="base-color base-border-color" id="subcategory" name="subcategory" required>
                <option>Подкатегория</option>
                <option>Подкатегория</option>
            </select> 
        </div>
        <div class="form-group">
            <label for="name" class="col-form-label">Название лота (не более 60-ти символов)</label>
            <input type="text" class="form-control" id="name" name="name" value="Название лота" required>
        </div> 
        <div class="form-group">
            <label for="video" class="col-form-label">Ссылка на видео</label>
            <input type="text" class="form-control" id="video" name="video" value="Ссылка на видео" required>
        </div>
        <div class="form-group">
            <label for="file" class="col-form-label">Загрузите фото (не более 12 шт):</label>
            <input type="file" id="file">
        </div>
                              <div class="form-group">
                                <label for="recipient-select" class="col-form-label">Область:</label>
                                <select class="language base-border-color" id="recipient-select" name="select">
                                    <option>Запорожская</option>
                                    <option>Киевская</option>
                                </select>
                              </div>
                              
                              <div class="modal-footer">
                                <a  href="#" type="submit" class=" btn add-color white " aria-haspopup="true" aria-expanded="false">Сохранить</a>
                                <a href="#" class="btn favorites" data-dismiss="modal">Закрыть</a>                               
                                <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
                              </div>
                            </form>
    <form>
                
        <textarea name="comment" cols="60" rows="3" placeholder="Напишите в чат"></textarea><br>
        <a href="#" class="btn add-color white send">Написать</a>
    </form>
</div>
@endsection

	
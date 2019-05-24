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
            <label for="category" class="col-form-label">Выбеоите категории</label>
            <div class="example about_lot_title  feedback">
                <div class="anchor ">
                    <ul >
                        <li >
                            <input type="checkbox" data-id="id_lota"  data-name="Часы старинные" /> 
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы старинные</label>
                            <ul class="open">
                                <li >
                                    <input type="checkbox" data-id="id_lota" data-name="Часы наручные" /> <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы наручные</label>
                                    <ul class="open">
                                        <li><input type="checkbox" data-id="id_lota" data-name="Amsterdam" /><label> Чайка</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Haarlem" /><label> Haarlem</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Alkmaar" /> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                   <input type="checkbox" data-id="id_lota" data-name="Часы настольные" /> <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы настольные</label>
                                    <ul class="open">
                                        <li><input type="checkbox" data-id="id_lota" data-name="Amsterdam" /><label> Чайка</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Haarlem" /><label> Haarlem</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Alkmaar" /> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <input type="checkbox" data-id="id_lota"  data-name="Нумизматика" /> 
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Нумизматика</label>
                            <ul class="open">
                                <li >
                                    <input type="checkbox" data-id="id_lota" data-name="Монеты СССР" /> <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Монеты СССР</label>
                                    <ul class="open">
                                        <li><input type="checkbox" data-id="id_lota" data-name="Amsterdam" /><label> Чайка</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Haarlem" /><label> Haarlem</label></li>
                                        <li><input type="checkbox" data-id="id_lota" data-name="Alkmaar" /> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                   <input type="checkbox" data-id="id_lota" data-name="Монеты Украины" /> <label class="ul">  Монеты Украины</label>
                                    
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" data-id="id_lota"  data-name=" Живопись" /> 
                            <label class="ul"> Живопись </label>
                        </li>
                    </ul>
                </div>
            </div>    
            <div>
                <p>Выбранные категории: <span class="selected-readable"></span></p>
            </div>
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
            <div>
                <input type="radio" name="toggle" value="UKR" id="ukr">
                <label for="ukr">1 грн</label>
                <input type="radio" name="toggle" value="RU" id="ru" checked="">
                <label for="ru"></label>                      
            </div>
            <label for="price" class="col-form-label">Начальная стоимость:</label>
            <input type="text" id="price">
        </div>



        <div class="form-group">
            <label for="recipient-select" class="col-form-label">Область:</label>
                <select class="language " id="recipient-select" name="select">
                    <option>Запорожская</option>
                    <option>Киевская</option>
                </select>
        </div>
        <div class="form-group">
            <label for="sity" class="col-form-label">Ваш город</label>
            <input type="text" class="form-control" id="video" name="sity" value="Город" required>
        </div>
                              
                              <div class="modal-footer">
                                <a  href="#" type="submit" class=" btn add-color white " aria-haspopup="true" aria-expanded="false">Сохранить</a>
                                <a href="#" class="btn favorites" data-dismiss="modal">Закрыть</a>                               
                                <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
                              </div>
    </form>
    
</div>
@endsection

	
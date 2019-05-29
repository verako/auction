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
<div class="col-12 add_lot">
    <hr class="hr">
    <form action="/" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="category" class="col-form-label">Выберите категории</label>
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
            <input type="text" class="form-control" id="name" name="name" placeholder="Название лота" required>
        </div> 
        <div class="form-group">
            <label for="video" class="col-form-label">Ссылка на видео</label>
            <input type="text" class="form-control" id="video" name="video" placeholder="Ссылка на видео" required>
        </div>
        <div class="form-group">
            <label for="file" class="col-form-label">Загрузите фото (не более 12 шт):</label>
            <input type="file" id="file">
        </div>        
        <div class="form-group check">
            <input type="checkbox" id="switch" /><label class="switch" for="switch">1 грн</label>
            <p>c 1 грн</p>
            <label for="price" class="col-form-label">Стартовая цена:</label>
            <input type="number" id="price">
        </div>
        <div class="form-group check">
            <label for="step-select" class="col-form-label">Не менее:</label>
                <select class="region" id="step-select" name="select">
                    <option>1 грн</option>
                    <option>10 грн</option>
                    <option>20 грн</option>
                    <option>50 грн</option>
                    <option>100 грн</option>
                    <option>150 грн</option>
                </select>
            <label for="price" class="col-form-label">Шаг цены:</label>
            <input type="number" id="price">
        </div>
        <div class="form-group">
            <label for="datetime" class="col-form-label">Выберите дату окончания:</label>
            <input type="text" value="dd-mm-yy" id="datetime"   onfocus="this.select();lcs(this)" >
            <label for="hour" class="col-form-label">Время:</label>
            <input type="time" id="hour">         
        </div>
        <div class="form-group check">
            <input type="checkbox" id="switch2" /><label class="switch2" for="switch2">+5</label>
            <p>установить антиснайпинг +5 мин</p>            
        </div>
        <div class="form-group">
            <label for="material" class="col-form-label">Материал:</label>
            <input type="text" class="form-control" id="material" name="material" placeholder="Материал" required>
        </div>
        <div class="form-group">
            <label for="defects" class="col-form-label">Дефекты:</label>
            <input type="text" class="form-control" id="defects" name="defects" placeholder="Дефекты" required>
        </div>
        <div class="form-group">
            <label for="region-select" class="col-form-label">Область:</label>
                <select class="region" id="region-select" name="select">
                    <option>Запорожская</option>
                    <option>Киевская</option>
                </select>
        </div>
        <div class="form-group">
            <label for="sity" class="col-form-label">Ваш город:</label>
            <input type="text" class="form-control" id="sity" name="sity" placeholder="Город" required>
        </div>
        <div class="form-group">
            <label for="payment" class="col-form-label">Оплата:</label>
            <input type="text" class="form-control" id="payment" name="payment" placeholder="Оплата" required>
        </div>
        <div class="form-group">
            <label for="delivery" class="col-form-label">Доставка:</label>
            <input type="text" class="form-control" id="delivery" name="delivery" placeholder="Доставка" required>
        </div>
        <div class="form-group">
            <label for="description" class="col-form-label">Описание:</label>
            <textarea class="form-control" id="description" name="description" placeholder ="Описание" required></textarea>
          
        </div>
        <div class="form-group">
            <a  href="#" type="submit" class=" btn add-color white " aria-haspopup="true" aria-expanded="false">Сохранить</a>
            <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
        </div>
    </form>
    
</div>
@endsection

	
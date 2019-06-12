@extends('default.app')
@yield('head')
@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item"><a href="/cabinet" class="base-text-color">Кабинет</a></li>
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
            <label for="category" class="col-form-label">* Выберите категории</label>
            <div class="example about_lot_title  feedback">
                <div class="anchor ">
                    <ul >
                        <li >
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы старинные</label>
                            <ul class="open">
                                <li >
                                    <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы наручные</label>
                                    <ul class="open">
                                        <li><input type="radio" data-id="id_lota" data-name="Amsterdam" name="category"> <label> Чайка</label></li>
                                        <li><input type="radio" data-id="id_lota" data-name="Haarlem" name="category"> <label> Haarlem</label></li>
                                        <li><input type="radio" data-id="id_lota" data-name="Alkmaar" name="category"> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                   <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Часы настольные</label>
                                    <ul class="open">
                                        <li><input type="radio" data-id="id_lota" data-name="Amsterdam" name="category"><label> Чайка</label></li>
                                        <li><input type="radio" data-id="id_lota" data-name="Haarlem" name="category"><label> Haarlem</label></li>
                                        <li><input type="radio" data-id="id_lota" data-name="Alkmaar" name="category"> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li > 
                            <label class="ul"><i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Нумизматика</label>
                            <ul class="open">
                                <li >
                                    <label class="ul"> <i class="fas fa-angle-down open"></i><i class="fas fa-angle-right "></i> Монеты СССР</label>
                                    <ul class="open">
                                        <li><input type="radio" data-id="id_lota" data-name="Amsterdam" name="category"> <label> Чайка</label></li>
                                        <li><input type="radio" data-id="id_lota" data-name="Haarlem" name="category"> <label> Haarlem</label></li>
                                        <li><input type="radio" data-id="id_lota" data-name="Alkmaar" name="category"> <label> Alkmaar</label></li>
                                    </ul>
                                </li>
                                <li >
                                   <input type="radio" data-id="id_lota" data-name="Монеты Украины" name="category"> <label class="ul">  Монеты Украины</label>
                                    
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="radio" data-id="id_lota"  data-name=" Живопись" name="category"> 
                            <label class="ul"> Живопись </label>
                        </li>
                    </ul>
                </div>
            </div>    
            <!-- <div>
                <p>Выбранные категории: <span class="selected-readable"></span></p>
            </div> -->
        </div>
        <div class="form-group row">
            <div class="col-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="* Название лота" required>
            </div>
            <div class="col-6">
                <label for="name" class="col-form-label restrictions">Название лота (не более 60-ти символов) не должно быть написано заглавными (БОЛЬШИМИ) буквами, не должно содержать знаки пунктуации и символы ^#@&gt;&lt;.</label>
            </div>        
        </div> 
        <div class="form-group row">
            <div class="col-6 custom-file">
                <label class="custom-file-label" for="exampleInputFile">* Выберите фото</label>               
                <input type='file' class="custom-file-input" name="image" id="exampleInputFile" onchange="preview(this);" multiple="multiple">
                <div id='previewImg'></div>
            </div>
            <div class="col-6" >
                <label for="exampleInputFile" class="col-form-label restrictions">В лоте
                    допускаются исключительно изображения конкретного предмета,
                    выставляемого данным продавцом на аукцион, не более 12 фото.
                    Максимальный размер фотографии — 3 мегабайта! Загрузить можно файлы с расширением .jpg, .jpeg, .png. </label>
            </div>
        </div>        
        <div class="form-group check row">
            <div class="col-6 start-price" >
                <input type="checkbox" id="switch"><label class="switch" for="switch">1 грн</label>
                <p>c 1 грн</p>
                <label for="price" class="col-form-label" >Стартовая цена:</label>
                <input type="number" id="price" >
            </div>
            <div class="col-6" >
                <label for="price" class="col-form-label restrictions">Стартовая цена должна быть такой во сколько Вы по минимуму оцениваете
                    продаваемый лот (цена за которую вы согласны продать лот), в случае отказа продавать лот будут предприняты
                    санкции согласно правил аукциона. </label>
            </div>
        </div>
        <div class="form-group check">
            <label for="step-select" class="col-form-label">Не менее:</label>
                <select class="region" id="step-select" name="select">
                    <option selected disabled>выберите шаг</option>
                    <option>1 грн</option>
                    <option>10 грн</option>
                    <option>20 грн</option>
                    <option>50 грн</option>
                    <option>100 грн</option>
                    <option>150 грн</option>
                </select>
            <label for="step-price" class="col-form-label">Шаг цены:</label>
            <input type="number" id="step-price">
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

	
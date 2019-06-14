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
                    Максимальный размер фотографии — 300 килобайт! Загрузить можно файлы с расширением .jpg, .jpeg, .png. </label>
            </div>
        </div>        
        <div class="form-group check row">
            <div class="col-6 left" >
                <input type="checkbox" id="switch"><label class="switch" for="switch">1 грн</label>
                <p>c 1 грн</p>
                <input type="number" id="price" placeholder="* Стартовая цена:">
            </div>
            <div class="col-6" >
                <label for="price" class="col-form-label restrictions">Стартовая цена должна быть такой во сколько Вы по минимуму оцениваете
                    продаваемый лот (цена за которую вы согласны продать лот), в случае отказа продавать лот будут предприняты
                    санкции согласно правил аукциона. </label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6 left" >
                    <select id="step-select" name="select">
                        <option>Не менее чем</option>
                        <option>Равно</option>
                    </select>
                <input type="number" id="step-price" placeholder="* Шаг цены">
            </div>
            <div class="col-6" >
                <label for="step-price" class="col-form-label restrictions">Рекомендуем устанавливать "Не менее чем",
                    таким образом покупатели быстрее смогут дойти до реальной цены лота делая ставки выше указанного шага.</label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6 left" >
                <input type="checkbox" id="switch3"><label class="switch3" for="switch3">1 грн</label>
                <p>Включить резервную цену</p>
                <input type="number" id="reserve-price" placeholder="Резервная цена" disabled="true">
            </div>
            <div class="col-6" >
                <label for="reserve-price" class="col-form-label restrictions">Резервная цена это наименьшая сумма,
                    за которую продавец готов продать лот. Функция платная: 1% от указанной резервной цены,
                    не подлежащей возврату вне зависимости от результатов торгов, списываются в момент создания лота. </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6 left" >
                <label for="datetime" class="col-form-label">* Выберите дату окончания:</label>
                <input type="text" value="dd-mm-yy" id="datetime"   onfocus="this.select();lcs(this)" >
                <label for="hour" class="col-form-label">Время:</label>
                <input type="time" id="hour">
            </div>
            <div class="col-6" >
                <label for="step-price" class="col-form-label restrictions">Выберите дату окончания аукциона.
                    Если не указывать время окончания, то оно установиться автоматически относительно времени создания лота.</label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6 left" >
                <input type="checkbox" id="switch2" /><label class="switch2" for="switch2">+5</label>
                <p><span class="bold">Установить антиснайпинг:</span> +5 минут к последней ставке</p>
            </div>
            <div class="col-6" >
                <label for="switch2" class="col-form-label restrictions">Эта функция позволяет продлевать торги на 5 минут после
                    каждой последней ставки, тем самым позволяя всем заинтересованным участникам торгов успеть сделать ставки независимо
                    от качества интернет-соединения, а продавцу получить наивысшую цену за свой лот. Если опция включена,
                    система автоматически продлит лот на 5 мин. с момента последней ставки. Лот будет продлеваться на 5 минут неограниченное
                    количество раз, пока не будет выставлена финальная ставка, которую никто не захочет перебить.</label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6" >
                <input type="text" class="form-control" id="material" name="material" placeholder="* Материал" required>
            </div>
            <div class="col-6" >
                <label for="material" class="col-form-label restrictions">Нельзя указывать прочерк, точку, а также другие знаки пунктуации и символы, указанные
                    вместо текстовой информации;</label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6" >
                <input type="text" class="form-control" id="defects" name="defects" placeholder="* Дефекты" required>
            </div>
            <div class="col-6" >
                <label for="defects" class="col-form-label restrictions">Опишите состояние предмета, как можно более детально рассказав о скрытых
                    и видимых дефектах, что поможет Вам избежать в будущем проблем, связанных с сокрытием реального состояния.
                    Состояние "по фото" можно указывать только для монет, предметов металлопластики, бон, икон, картин при наличии
                    не менее десяти информативных фотографий, отражающих реальное состояние предмета со всех сторон.
                    Для всех остальных предметов описание всех дефектов, изъянов, сколов и трещин является обязательным;
                    для техники и часов обязательно указание о работоспособности. </label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6 left" >
                    <select class="region" id="region-select" name="select">
                        <option disabled selected>* Выберите регион</option>
                        <option>Запорожская</option>
                        <option>Киевская</option>
                    </select>
                <input type="text" class="form-control" id="sity" name="sity" placeholder="* Город" required>
            </div>
            <div class="col-6" >
                <label for="sity" class="col-form-label restrictions">Выберите регион и укажите город где находится лот.
                </label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6" >
               <input type="text" class="form-control" id="payment" name="payment" placeholder="* Оплата" required>
            </div>
            <div class="col-6" >
                <label for="payment" class="col-form-label restrictions">Указывайте все методы оплаты которые Вас могут устроить,
                    с учетом аукционных правил оплаты лотов: оплата по факту получения, оплата на карту в банке и т.д.
                    Пожалуйста, не забывайте указывать банк-эмитент карты для оплаты. Например: оплата на карту Приват банка. </label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6" >
                <input type="text" class="form-control" id="delivery" name="delivery" placeholder="* Доставка" required>
            </div>
            <div class="col-6" >
                <label for="delivery" class="col-form-label restrictions">Указывайте ВСЕ варианты отправки/доставки лота: грузоперевозчики, почта, лично при встрече и т.д.
                    Обязательно указывайте кто платит за доставку (покупатель или продавец).</label>
            </div>
        </div>
        <div class="form-group check row">
            <div class="col-6" >
            <textarea class="form-control" id="description" name="description" placeholder ="* Описание" required></textarea>
            </div>
            <div class="col-6" >
                <label for="description" class="col-form-label restrictions">Детально опишите лот, что по Вашему мнению нужно для полного понимания покупателю.</label>
            </div>
        </div>
        <div class="form-group">
            <input type="reset" class=" btn  cleaning" value="Очистить поля формы">
            <a  href="#" type="submit" class=" btn add-color white " aria-haspopup="true" aria-expanded="false">Сохранить</a>
            <span class="pull-right margintop20 left">* Поля обязательные для заполнения.</span>

        </div>
    </form>
    
</div>
@endsection

	
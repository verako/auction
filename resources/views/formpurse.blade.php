@extends('default.app')
@yield('head')
@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Пополнение кошелька</li>
            </ol>
        </nav>
@endsection
@section('content')
<div class="col-12">
    <hr class="hr">
           <div class="formpurse">
               <h1>Укажите сумму пополнения и назначение платежа</h1>
               <form method="POST" action="https://www.liqpay.ua/api/3/checkout" accept-charset="utf-8">
                   {{ csrf_field() }}
                   <input type="number" class="form-control" min=0 name="amount" placeholder="* Сумма платежа" required>
                   <input type="text" class="form-control"  name="description" placeholder="* Назначение платежа" required>
                   <input type="hidden" name="data" value="eyJhY3Rpb24iOiJwYXkiLCJhbW91bnQiOiIxIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6ImRlc2NyaXB0aW9uIHRleHQiLCJvcmRlcl9pZCI6Im9yZGVyX2lkXzEiLCJ2ZXJzaW9uIjoiMyIsInB1YmxpY19rZXkiOiJzYW5kYm94X2k4NzE4Mzg1ODc0NSJ9">
                   <input type="hidden" name="signature" value="5BzbX2k3OgwX9F7xcGM82sf6eFw=">
                   <input type="image" src="//static.liqpay.ua/buttons/p1ru.radius.png" name="btn_text">
               </form>
           </div>
</div>
@endsection

	
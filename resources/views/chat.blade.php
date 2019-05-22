@extends('default.app')
@yield('head')
@section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="base-text-color">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Чат</li>
            </ol>
        </nav>
@endsection
@section('content')
<div class="col-12">
    <hr class="hr">
            <ul class="comment">                
                <li>
                    <p class="user_guest"><span ><i class="far fa-user"></i></span>
                    <a href="" class="card-user">User_guest</a> <span class="time"> 20.05.2018 11:22</span></p>
                    <p class="text_guest">lorem At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod m</p>
                </li>
                <li>
                    <p class="my"><i class="far fa-user"></i> 
                    <a href="" class="card-user">User</a> <span class="time"> 20.05.2018 11:22</span></p>
                    <p class="my_text">lorem At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod m</p>
                </li>
            </ul>
            <hr>
            <form>                
                <textarea name="comment" cols="60" rows="3" placeholder="Напишите в чат"></textarea><br>
                <a href="#" class="btn add-color white send">Написать</a>
            </form>
</div>
@endsection

	
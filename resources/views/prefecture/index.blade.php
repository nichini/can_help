@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>can_help</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/index1.css')}}">
    </head>
    <body>
        <main>
            
            <div class='contents'>
                <section>
                    <div class='contents_name'><h3>被災地一覧</h3></div>
                </section>
                
                <section class='helps'>
                    @foreach ($helps as $help)
                        <div class='help'>
                            <a href='helps/{{$help->id}}'>全体リンク</a>
                            <h4>{{$help->prefecture->name}}</h4>
                            <a href="mypage/{{$help->user->id}}"><h3>{{ $help->user->name }}</h3></a>
                            <h3>写真{{$help->image}}</h3>
                            <dl>
                            <dt>作業日 : {{$help->date}}</dt>
                            <dt>作業内容 : {{$help->contents}}</dt>
                            <dt>作業時間 : {{date('H:i',  strtotime($help->time))}}</dt>
                            <dt>作業場所 : {{$help->place}}</dt>
                            <dt>募集人数 : {{$help->num}}</dt>
                            <dt>自由記述欄 : <span>{{$help->free_space}}</span></dt>
                            </dl>
                            <p>有効期限 :{{$help->set}}</p>
                            
                        </div>
                    @endforeach
                </section>
                <div class='main_under_Menu'>
                <ul class='under_Menu_list'>
                    <p><a href='/'><input type='submit' value='ホームへ戻る'></a></p>
                </ul>
            </div>
            </div>
        </main>
        <footer></footer>
        @endsection
    </body>
</html>

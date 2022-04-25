@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>can_help</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/index2.css')}}">
    </head>
    <body>
        <main>
            <div class='contents'>
                <section>
                    <div class='contents_name'><h2>被災地詳細</h2></div>
                </section>
                <section class='helps'>
                    <div class='help_post'>
                        <a href="/prefecture/{{$help->prefecture->id}}"><h4>{{$help->prefecture->name}}</h4></a>
                        <a href="/mypage/{{$help->user->id}}"><h5>{{$help->user->name}}</h5></a>
                        <img src="https://seikabtu-1.s3.amazonaws.com/{{$image->image}}">
                        <dl>
                        <dt>作業日 : {{$help->date}}</dt>
                        <dt>作業内容 : {{$help->contents}}</dt>
                        <dt>作業時間 : {{date('H:i',  strtotime($help->time))}}</dt>
                        <dt>作業場所 : {{$help->place}}</dt>
                        <dt>募集人数 : {{$help->num}}</dt>
                        <dt>自由記述欄 : <textarea name='free_space'>{{$help->free_space}}</textarea></dt>
                        </dl>
                        <div class="bosyuu">募集人数あと人 :{{$help->set}}</div>
                    </div>
                    
                    <p class="edit">[<a href="/helps/{{ $help->id }}/edit">編集</a>]</p>
                    <div class='main_under_Menu'>
                        <ul class='under_Menu_list'>
                            <a href="javascript:history.back();"><input type="button" value="一つ前のページへ戻る"></a>
                            
                            <input type='submit' value='お話をする'>
                            <a href="/helps/{{ $help->id }}/show_add"><input type='submit' value='助けに行く'></a>
                        </ul>
                    </div>
                </section>
                
            </div>
                
        </main>
        
        <footer>
            
        </footer>
        @endsection
    </body>
</html>

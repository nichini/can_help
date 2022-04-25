@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>can_help</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <main>
            <div class='contents'>
                <div class="mypage">
                    <div class="mypage_title"><h2>Mypage</h2></div>
                    <div class="user_edit">
                       
                        <a href="/mypage/{{$user->id}}/edit">[編集]</a>
                       
                    </div>
                        <div class="user_top">
                            <div class="user_email"><h3>{{$user->email}}</h3></div>
                            <div class="user_name"><h5>{{$user->name}}</h5></div>
                            
                            <div class="user_introduction">
                                <P>自己紹介欄</P>
                                <span>年齢 :{{$user->age}}  性別 :{{$user->sex}}</span>
                                <span>{{$user->introduction}}</span>
                            </div>
                            
                        </div>
                    <div class="user_middle">
                        <p>
                            <a href="/helps/create"><input type="button" value="投稿作成" ></a>
                            <a href="/"><input type="button" value="チャット" ></a>
                            <br>
                            <h5><過去の活動履歴></h5>
                            
                        </p> 
                    </div>
                       
                </div>
                
                <a href="javascript:history.back();"><input type="button" value="一つ前のページへ戻る" ></a>
            </div>
        </main>
        <footer></footer>
        @endsection
    </body>
</html>

@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>can_help</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/index4.css')}}">
    </head>
    <body>
        <main>
            
            <section>
                <div class='contents_name'><h3>Let's help !</h3></div>
                <div class="checked">
                    <div class="checked_title">[申込み内容]</div>
                    <div class="checked_item">
                        <div>日付: {{$help->date}}</div>
                        <div>作業場所　google map: {{$help->place}}</div>                            
                        <div>持ち物: {{$help->free_space}}</div>
                    </div>
                </div>
                <p>
                    <a href='/'><input type='submit' value='ホームへ戻る'></a>
                </p>
            </section>
        </main>
        <footer></footer>
        @endsection
    </body>
</html>

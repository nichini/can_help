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
                    <div class="mypage_title"><h2>Mypage 編集</h2></div>
                        <div class="user_top">
                            <div class="user_email"><h3>{{$user->email}}</h3></div>
                            <div class="user_name"><h5>{{$user->name}}</h5></div>
                            <div class="user_image">{{$user->image}}写真</div>
                            <form action="/mypage/{{$user->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="user_introduction">
                                    <div class="title">
                                        <P>自己紹介欄</P>
                                    </div>
                                    <div class="image">
                                        <p>写真を選択してください:</p>
                                        <input type='file' name=user[image] value="{{ $user->image}}">
                                    </div>
                                    <br>
                                    <div class="age">
                                        <p>
                                        <label for="age">年齢を選択してください：</label>
                                            <select id="age" name="user[age]">
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                            </select>歳
                                        </p>
                                    </div>
                                    <div class="sex">
                                        <p>
                                        <label for="sex">性別を選択してください：</label>
                                        <select id="sex" name="user[sex]">
                                            <option value="男">男</option>
                                            <option value="女">女</option>
                                        </select>
                                        </p>
                                    </div>
                                    <br>
                                    <div class="komennto">
                                        <span>コメント:</span>
                                        <textarea id="introduction" name="user[introduction]"  cols="40" rows="5" maxlength="400" placeholder="趣味や意気込みなど" required>{{$user->introduction}}</textarea>
                                    </div>
                                </div>
                                <input type="submit" value="保存">
                            </form>
                        </div>
                </div>
                
                <a href="javascript:history.back();"><input type="button" value="一つ前のページへ戻る" ></a>
            </div>
        </main>
        <footer></footer>
        @endsection
    </body>
</html>

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
                    
                <section>
                   
                </section>
                
                <section class='helps'>
                    
                    <div class='help_post'>
                       
                        <form action="/helps" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p>
                                <label for="prefecture">県名選択：</label>
                                <select id="prefecture" name="help[prefecture_id]">
                                    @foreach ($prefectures as $prefecture)
                                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                                    @endforeach
                                </select>
                            </p>
                            <h3>写真</h3>
                            
                            <input type="file" name="image">
                            <dl>
                            <label>日付 :<br>
                            <input type="date" name="help[date]" required></label>
                            
                            <p><dt>作業内容 : </dt>
                            <input type="radio" name="help[contents]" value="ゴミ">ゴミ
                            <input type="radio" name="help[contents]" value="土砂">土砂
                            <input type="radio" name="help[contents]" value="瓦礫">瓦礫
                            <input type="radio" name="help[contents]" value="木材">木材
                            <input type="radio" name="help[contents]" value="どろ">どろ
                            <input type="radio" name="help[contents]" value="積雪">積雪
                            </p>
                            
                            <label>作業時間 :<br>
                            <input type="time" name="help[time]" required></label>
                            <p>
                            <dt>作業場所 : </dt>
                            <input type="radio" name="help[place]" value="自宅">自宅
                            <input type="radio" name="help[place]" value="学校">学校
                            <input type="radio" name="help[place]" value="駅">駅
                            <input type="radio" name="help[place]" value="会社">会社
                            </p>
                            
                            　
                            <label>募集人数 :<br>
                            <input type="number" name="help[num]" required></label>
                            
                            <p>
                            <label for="sonota">自由記述欄 ：</label><br>
                            <textarea id="sonota" name="help[free_space]" cols="40" rows="5" maxlength="400" placeholder="持ち物、服装など、その他" required></textarea>
                            </p>
                            
                            </dl>
                            <p>有効期限 : </p>
                            <input type="submit" value="保存" />
                        </form>
                    </div>
                    
                    <div class='main_under_Menu'>
                        <ul class='under_Menu_list'>
                            <p>
                                <a href="javascript:history.back();"><input type="button" value="一つ前のページへ戻る"></a>
                            </p>
                        </ul>
                    </div>
                </section>
                
            </div>
        </main>
        
        <footer></footer>
        @endsection
    </body>
</html>

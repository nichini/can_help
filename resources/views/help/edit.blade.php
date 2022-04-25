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
                        
                        <form action="/helps/{{ $help->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <p>
                            <label for="prefecture">県名選択：</label>
                            <select id="prefecture" name="help[prefecture_id]">
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                                @endforeach
                            </select>
                            </p>
                            <h3>写真</h3>
                            <input type='file' name="image" value="{{ $help->image}}">
                            <dl>
                            <label>日付 :<br>
                            <input type="date" name="help[date]" value="{{ $help->date}}"required></label>
                            
                            <p><dt>作業内容 : </dt>
                            @if($help->contents == "ゴミ")
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}" checked>ゴミ
                            @else
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}">ゴミ
                            @endif
                            
                            @if($help->contents == "土砂")
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}" checked>土砂
                            @else
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}">土砂
                            @endif
                            
                            @if($help->contents == "瓦礫")
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}" checked>瓦礫
                            @else
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}">瓦礫
                            @endif
                            
                            @if($help->contents == "木材")
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}" checked>木材
                            @else
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}">木材
                            @endif
                            
                            @if($help->contents == "どろ")
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}" checked>どろ
                            @else
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}">どろ
                            @endif
                            
                            @if($help->contents == "積雪")
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}" checked>積雪
                            @else
                            <input type="radio" name="help[contents]" value="{{ $help->contents}}">積雪
                            @endif
                            </p>
                            
                            <label>作業時間 :<br>
                            <input type="time" name="help[time]" value="{{$help->time}}" required></label>
                            <p>
                            <dt>作業場所 : </dt>
                            @if($help->place == "自宅")
                            <input type="radio" name="help[place]" value="{{ $help->place}}" checked>自宅
                            @else
                            <input type="radio" name="help[place]" value="{{ $help->place}}">自宅
                            @endif
                            
                            @if($help->place == "学校")
                            <input type="radio" name="help[place]" value="{{ $help->place}}" checked>学校
                            @else
                            <input type="radio" name="help[place]" value="{{ $help->place}}">学校
                            @endif
                            
                            @if($help->place == "駅")
                            <input type="radio" name="help[place]" value="{{ $help->place}}" checked>駅
                            @else
                            <input type="radio" name="help[place]" value="{{ $help->place}}">駅
                            @endif
                            
                            @if($help->place == "会社")
                            <input type="radio" name="help[place]" value="{{ $help->place}}" checked>会社
                            @else
                            <input type="radio" name="help[place]" value="{{ $help->place}}">会社
                            @endif
                            </p>
                            
                            
                            <label>募集人数 :<br>
                            <input type="number" name="help[num]" value="{{ $help->num}}"required></label>
                            
                            <p>
                            <label for="sonota">自由記述欄 ：</label><br>
                            <textarea id="sonota" name="help[free_space]"  cols="40" rows="5" maxlength="400" placeholder="持ち物、服装など、その他" required>{{$help->free_space}}</textarea>
                            </p>
                            
                            </dl>
                            <p>有効期限 : </p>
                            <input type="submit" value="更新" />
                        </form>    
                    </div>
                    
                    <div class='main_under_Menu'>
                        <ul class='under_Menu_list'>
                            <p>
                                <a href='/'><input type='submit' value='ホームへ戻る'></a>
                            </p>
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

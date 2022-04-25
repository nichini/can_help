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
                    <div class='search'>
                        <form action="/" method="GET">
                            @csrf
                            <select id="prefecture" name="prefecture_id">
                                <option value="">選択してください！</option>
                                    @foreach ($prefectures as $prefecture)
                                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                                    @endforeach
                            </select>
                            <input type="text" class="form-control input-lg" placeholder="例：木材" name="search" value="{{$keyword}}">
                            <span class="input-group-btn" style="position: relative;top: -36px;right: -190px;">
                                <button class="btn btn-info" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                            
                        </form>
                        
                    </div>
                    
                </section>
                @if($helps->count())
                <section class='helps'>
                    @foreach ($helps as $help)
                        <div class='help'>
                            この枠全体がリンクになります。
                            
                            <a href="/prefecture/{{$help->prefecture->id}}"><div class="prefecture_name">{{$help->prefecture->name}}</div></a>
                            <a href="mypage/{{$help->user->id}}"><h5>{{ $help->user->name }}</h5></a>
                            
                            <div class="top" onclick="DivFrameClick({{$help->id}});">
                    
                            <div class="photo">
                                @foreach ($help->images as $image)
                                <img src="https://seikabtu-1.s3.amazonaws.com/{{$image->image}}">
                                @endforeach
                            </div>
                            <div class="side">
                            <div><dt>作業日 : {{$help->date}}</dt>
                            <dt>作業内容 : {{$help->contents}}</dt>
                            <dt>作業時間 : {{date('H:i',  strtotime($help->time))}}</dt>
                            <dt>作業場所 : {{$help->place}}</dt>
                            <dt>募集人数 : {{$help->num}}</dt>
                            <dt>自由記述欄 : <span>{{$help->free_space}}</span></dt></div>
                            </div>
                            </div>
                            <div>有効期限 :{{$help->set}}</div>
                        </div>
                    @endforeach
                </section>
                
                </div>
            @else
            <p>見つかりませんでした。</p>
            @endif
        </main>
        
        <footer>
            
        </footer>
        <script type="text/javascript">
            function DivFrameClick(num) {
                document.location.href = `/helps/${num}`;
                }           
        </script>
        @endsection
    </body>
</html>

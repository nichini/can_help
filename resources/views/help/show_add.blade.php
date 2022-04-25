@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>can_help</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/index5.css')}}">
        
        
    </head>
    <body>
        <main>
            <div class='contents'>
                <section>
                    <div class='contents_name'><h3>申込みフォーム</h3></div>
                    <div class="check">
                        <div class="check_title">[確認] チェック事項</div>
                        <div class="check_item">
                            <div><input type="checkbox" name="" value="">日付: {{$help->date}}</div>
                            <div><input type="checkbox" name="" value="">作業場所　google map: {{$help->place}}</div>
                            <div><input type="checkbox" name="" value="">持ち物: {{$help->free_space}}</div>
                        </div>
                    </div>
                    <div class="use">
                        <div class="use_title">~ 利用規約 ~</div>
                        <div class="use_list">
                            <ul>
                                <li>（禁止事項）</li>
                                <li>ユーザーは，本サービスの利用にあたり，以下の行為をしてはなりません。</li>
                                <ol>
                                    <li>法令または公序良俗に違反する行為</li>
                                    <li>犯罪行為に関連する行為</li>
                                    <li>当社，本サービスの他のユーザー，または第三者のサーバーまたはネットワークの機能を破壊したり，妨害したりする行為</li>
                                    <li>当社のサービスの運営を妨害するおそれのある行為</li>
                                    <li>他のユーザーに関する個人情報等を収集または蓄積する行為</li>
                                    <li>不正アクセスをし，またはこれを試みる行為</li>
                                    <li>他のユーザーに成りすます行為</li>
                                    <li>当社のサービスに関連して，反社会的勢力に対して直接または間接に利益を供与する行為</li>
                                    <li>当社，本サービスの他のユーザーまたは第三者の知的財産権，肖像権，プライバシー，名誉その他の権利または利益を侵害する行為</li>
                                    <li>以下の表現を含み，または含むと当社が判断する内容を本サービス上に投稿し，または送信する行為</li>
                                    <ol>
                                        <li>過度に暴力的な表現</li>
                                        <li>露骨な性的表現</li>
                                        <li>人種，国籍，信条，性別，社会的身分，門地等による差別につながる表現</li>
                                        <li>自殺，自傷行為，薬物乱用を誘引または助長する表現</li>
                                        <li>その他反社会的な内容を含み他人に不快感を与える表現</li>
                                    </ol>
                                    <li>以下を目的とし，または目的とすると当社が判断する行為</li>
                                    <ol>
                                        <li>営業，宣伝，広告，勧誘，その他営利を目的とする行為（当社の認めたものを除きます。）</li>
                                        <li>性行為やわいせつな行為を目的とする行為</li>
                                        <li>面識のない異性との出会いや交際を目的とする行為</li>
                                        <li>他のユーザーに対する嫌がらせや誹謗中傷を目的とする行為</li>
                                        <li>当社，本サービスの他のユーザー，または第三者に不利益，損害または不快感を与えることを目的とする行為</li>
                                        <li>その他本サービスが予定している利用目的と異なる目的で本サービスを利用する行為</li>
                                    </ol>
                                    <li>宗教活動または宗教団体への勧誘行為</li>
                                    <li>その他，当社が不適切と判断する行為</li>
                                </ol>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class='helps'>
                    <div class='main_under_Menu'>
                        <ul class='under_Menu_list'>
                            <p>
                                <a href="javascript:history.back();"><input type="button" value="一つ前のページへ戻る"></a>
                                <form action="/helps/{{$help->id}}/apply" method="POST">
                                    @csrf
                                    <div class="mousikomi"><input type='submit' value='申込み'></div>
                                </form>
                                
                            </p>
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

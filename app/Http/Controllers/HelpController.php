<?php

namespace App\Http\Controllers;

use App\Help;
use App\User;
use App\Image;
use Illuminate\Http\Request;
use App\Prefecture;
use Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class HelpController extends Controller
{
    public function index(Help $help, Request $request, Prefecture $prefecture)
    {
        
        $datetime = Carbon::today();
        $prefectures = $prefecture->get();
        $keyword = $request->input('search');
        $prefecture = $request["prefecture_id"];
 
        $query = Help::query();
 
        if (!empty($keyword)) {
            $query->where('place', 'LIKE', "%{$keyword}%")
                ->orWhere('contents', 'LIKE', "%{$keyword}%");
        }
 
        if (!empty($prefecture)) {
            $query->where('prefecture_id', $prefecture);
        }
 
        $helps = $query->where('set', 0)->where('date', ">=", $datetime)->latest()->get();
        
        
        return view('help/index', compact('helps', 'prefectures', 'prefecture', 'keyword'));
    }
    
    
    public function show(Help $help, User $user)
    {
        $image = Image::where('help_id', $help->id)->first();
        return view('help/show')->with(['help' => $help, 'user' => $user, 'image' => $image]);
    }
    
    public function show_add(Help $help, User $user)
    {
        return view('help/show_add')->with(['help' => $help, 'user' => $user]);
    }
    
    public function show_last(Help $help, User $user)
    {
        return view('help/show_last')->with(['help' => $help, 'user' => $user]);
    }
    
    public function add()
    {
        return view('helps.create');
    }
    
    public function create(Prefecture $prefecture, Request $request)
    {
        
        return view('help/create')->with(['prefectures' => $prefecture->get()]);
    }
    
    
    public function store(Request $request, Help $help, Image $image)
    {
        $input = $request['help'];
        $input += ['user_id' => $request->user()->id];
        $input += ['set' => 0];
        $help->fill($input)->save();
        //s3アップロード開始
        $input_image = $request->file('image');
        // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('myprefix', $input_image, 'public');
        // アップロードした画像のフルパスを取得
        $image->image = $path;
        $image->help_id = $help->id;
        $image->save();
        
        return redirect('/helps/' . $help->id);
       
    }
    
    
    public function edit(Help $help, Prefecture $prefecture)
    {
        return view('help/edit')->with(['help' => $help, 'prefectures' => $prefecture->get()]);
    }
    
    
    public function update(Request $request, Help $help)
    {
        $input_help = $request['help'];
        $input_help += ['user_id' => $request->user()->id];
        $help->fill($input_help)->save();
        return redirect('/helps/' . $help->id);
    }
    
    public function search(Request $request)
    {

        $helps = Post::where('place', 'like', "%{$request->search}%")
                ->orWhere('contentes', 'like', "%{$request->search}%")
                ->paginate(3);
                
                $search_result = $request->search.'の検索結果'.$help->total().'件';

        return view('help.index', [
            'helps' => $help,
            'search_result' => $search_result,
            'search_query'  => $request->search
            
    ]);
    }
    
    public function show_apply(Help $help)
    {
        $help->helpUsera()->attach(Auth::id());
        //その投稿に対する募集人数を持ってくる
        $recruit = Help::where('id', $help->id)->first()->num;
        //helpユーザーテーブルから何人集まってきているのかを数える。
        $helpApply = $help->helpUsera()->count();
        if ($recruit == $helpApply){
            $help->set = 1;
            $help->save();
        }
        return redirect('/helps/' . $help->id . '/show_last');
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function my()
    {
        $user = Auth::user();
        return view('help/my')->with(['user' => $user]);
    }
    
    public function myshow(User $user)
    {
        
        return view('user/myshow')->with(['user' => $user]);
    }
    
    public function edit()
    {
        $user = Auth::user();
        return view('user/edit')->with(['user' => $user]);
    }
    
    public function update(Request $request, User $user)
    {
        $input_user = $request['user'];
        $user->fill($input_user)->save();
    
        return redirect('/mypage');
    }
}

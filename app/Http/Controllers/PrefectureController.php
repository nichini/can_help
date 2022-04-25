<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\Help;
use App\User;
use Illuminate\Http\Request;

class PrefectureController extends Controller
{
    public function index(Prefecture $prefecture,)
    {
        
        return view('prefecture.index')->with(['helps' => $prefecture->getByPrefecture()]);
    }
    
    public function myshow(User $user)
    {
        
        return view('user/myshow')->with(['user' => $user]);
    }
    
    
}

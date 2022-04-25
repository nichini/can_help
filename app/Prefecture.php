<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    public function helps()   
    {
        //「1対多」の関係なので'helps'と複数形に
        return $this->hasMany('App\Help');  
    }
    
    public function getByPrefecture(int $limit_count = 5)
    {
        return $this->helps()->with('prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

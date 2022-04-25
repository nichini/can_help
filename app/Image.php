<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function help()   
    {
        //「1対多」の関係なので'helps'と複数形に
        return $this->belongsTo('App\Help');  
    }
    
}

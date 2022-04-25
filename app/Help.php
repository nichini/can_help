<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $fillable = [
    'user_id',
    'prefecture_id',
    'date',
    'time',
    'place',
    'num',
    'contents',
    'free_space',
    'set',
    'image',
    ];
    
    public function helpUsera(){
        return $this->belongsToMany('App\User');
    }
    
    public function user(){
        //1つのhelp投稿を多数のuserが利用。
        return $this->belongsTo('App\User');
    }
    public function prefecture()
    {
        //「1対多」の関係なので単数系に
        return $this->belongsTo('App\Prefecture');
    }
    
     public function images()
    {
        //「1対多」の関係なので単数系に
        return $this->hasMany('App\Image');
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

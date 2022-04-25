<?php

use Illuminate\Database\Seeder;

class HelpsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('helps')->insert([
            'user_id' => '1',
            'prefecture_id' => '1',
            'date' => '2022-04-06',
            'time' => '16:00:00',
            'place' => '自宅',
            'num' => '1',
            'contents' => '土砂',
            'free_space' => 'スコップはあります。',
            'set' => '0',
            'created_at' => new datetime(),
            'updated_at' => new datetime(),
        ]);
        
        DB::table('helps')->insert([
            'user_id' => '2',
            'prefecture_id' => '2',
            'date' => '2022-04-07',
            'time' => '16:00:00',
            'place' => '学校',
            'num' => '2',
            'contents' => 'ゴミ',
            'free_space' => 'ゴミの掃除を手伝って欲しい',
            'set' => '0',
            'created_at' => new datetime(),
            'updated_at' => new datetime(),
        ]);
        
        DB::table('helps')->insert([
            'user_id' => '3',
            'prefecture_id' => '3',
            'date' => '2022-04-08',
            'time' => '16:00:00',
            'place' => '駅',
            'num' => '10',
            'contents' => '木材',
            'free_space' => '瓦礫を片付けたい。',
            'set' => '0',
            'created_at' => new datetime(),
            'updated_at' => new datetime(),
        ]);
    }
    
}

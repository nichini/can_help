<?php

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'nichika',
        'email' => 'test@tstr.ac.jp',
        'password' => Hash::make('password'),
        'status' =>'student',
        ]);
        
        DB::table('users')->insert([
        'name' => 'yamada',
        'email' => 'test@aaaa.ac.jp',
        'password' => Hash::make('password2'),
        'status' =>'student',
        ]);
        
        DB::table('users')->insert([
        'name' => '佐々木',
        'email' => 'test@bbbb.ac.jp',
        'password' => Hash::make('password2'),
        'status' =>'student',
        ]);
    }
}

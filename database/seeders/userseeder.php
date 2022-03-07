<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('ragistration')->insert([
            'name'=>'raval',
            'email'=>'ravaldarshan237200@gmail.com',
            'password'=>Hash::make('123')
        ]);
        db::table('ragistration')->insert([
            'name'=>'darshan',
            'email'=>'ravaldarshan2372@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
    }
}

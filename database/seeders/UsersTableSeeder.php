<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use Str;
use DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Gisela',
        //     'email' => 'gagusti@isft.edu.ar',
        //     'password' => bcrypt('secret'),
        // ]);

        // for($i=0; $i <10; $i++){
        //     DB::table('users')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10) . '@isft38.edu.ar',
        //         'password' => bcrypt('secret'),
        //     ]);
        // }
        User::factory()->count(5)->create();
    }
}

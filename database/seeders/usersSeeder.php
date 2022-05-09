<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('all_users')->insert([
            'name'=>str::random(20),
            'email'=>str::random(20),
            'phone'=>rand(1,20),
        ]);
    }
}

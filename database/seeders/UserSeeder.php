<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Fahim Anzam',
            'email' => 'dfahimanzam@gmail.com',
            'password' => Hash::make('fahim364303Dip#'),
            'created_at' => Carbon::now()
        ]);
    }
}

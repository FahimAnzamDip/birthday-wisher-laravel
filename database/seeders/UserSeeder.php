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
            'name' => 'Mahmud Mithu',
            'email' => 'mithu@gmail.com',
            'password' => Hash::make('mithu12345'),
            'created_at' => Carbon::now()
        ]);
    }
}

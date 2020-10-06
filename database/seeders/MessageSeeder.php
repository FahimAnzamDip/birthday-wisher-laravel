<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'birthday_message' => 'Birthdays are a new start, a fresh beginning and a time to pursue new endeavors with new goals. Move forward with confidence and courage. You are a very special person. May today and all of your days be amazing!',
            'created_at' => Carbon::now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\AboutHistory;
use App\Models\SuccessMessage;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Language::create([
            'language' => 'English',
            'symbol' => 'gb'
        ]);
        Language::create([
            'language' => 'French',
            'symbol' => 'fr'
        ]);
        Language::create([
            'language' => 'Dutch',
            'symbol' => 'nl'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        SuccessMessage::create([
            'header_msg' => 'Thank you for your great generosity.',
            'body_msg' => 'We, at Ayude for a new day, greatly appreciate your donation, and your sacrifice. Your support helps to further our mission through our projects.'
        ]);

        $this->call([
          MainNavSeeder::class,
          SubNavSeeder::class
        ]);
    }
}

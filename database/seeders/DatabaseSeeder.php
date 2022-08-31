<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\AboutHistory;
use Illuminate\Database\Seeder;

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

    }
}

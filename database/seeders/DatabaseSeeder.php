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

        AboutHistory::create([
            'page_title'        => 'History?',
            'page_des'        => 'Sample history description goes here',
            'header'        => 'How did Ayude Originate?',
            'paragraph'     => ' After a visit to the Philippines, Charles Verberckmoes was moved by seeing the conditions in which the children of Manila (the capital) live in the slums. Together with a few friends (now the administrators) he founded an organization aimed at improving the economic, social and mental condition of poor (street) children.
                                We soon came into contact with a local Filipino aid organization (led by Steve Mirpuri) who shared the same vision as Ayude. Thus Ayude for a New Day (the Spanish word for Help Mee! For a new day) was founded as a non-profit organization in 1994.',
            'language_id'   => 1,
        ]);

        $this->call([
          MainNavSeeder::class,
          SubNavSeeder::class
        ]);

    }
}

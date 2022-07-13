<?php

namespace Database\Seeders;

use File;
use App\Models\SubNav;
use Illuminate\Database\Seeder;

class SubNavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_data = File::get("database/json/subnav.json");
        $navigations = json_decode($json_data);

        foreach($navigations as $key => $nav)
        {
            SubNav::create([
                'language_id' => $nav->language_id,
                'position' => $nav->position,
                'main_nav_id' => $nav->main_nav_id,
                'nav_name' => $nav->nav_name,
                'route_name' => $nav->route_name
            ]);
        }
    }
}

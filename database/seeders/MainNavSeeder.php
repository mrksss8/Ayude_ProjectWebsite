<?php

namespace Database\Seeders;

use App\Models\MainNav;
use Illuminate\Database\Seeder;
use File;

class MainNavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_data = File::get("database/json/mainnav.json");
        $navigations = json_decode($json_data);

        foreach($navigations as $nav)
        {
            MainNav::create([
                'language_id' => 1,
                'position' => $nav->position,
                'nav_name' => $nav->nav_name,
                'route_name' => $nav->route_name
            ]); 
        }
    }
}

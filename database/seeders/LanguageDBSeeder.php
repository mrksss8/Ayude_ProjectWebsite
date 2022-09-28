<?php

namespace Database\Seeders;

use App\Models\LanguageDB;
use Illuminate\Database\Seeder;
use File;

class LanguageDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $json_data = File::get("database/json/country_list.json");
      $countries = json_decode($json_data);

      foreach($countries as $country)
      {
          LanguageDB::create([
              'name' => $country->country_name,
              'symbol' => $country->country_code_name,
          ]); 
      }
    }
}

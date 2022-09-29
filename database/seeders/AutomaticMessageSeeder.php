<?php

namespace Database\Seeders;

use App\Models\AdminReply;
use Illuminate\Database\Seeder;

class AutomaticMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminReply::create([
            'post_id' => 0,
            'comment_id' => 0,
            'comment' => "Thank you for your message!"
        ]);
    }
}

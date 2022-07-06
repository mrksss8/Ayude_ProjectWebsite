<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutBoard extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','image_path','language_id','page_title','page_des','board_member'];
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

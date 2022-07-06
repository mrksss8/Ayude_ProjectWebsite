<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['page_title','page_des','paragraph','language_id'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutHistory extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

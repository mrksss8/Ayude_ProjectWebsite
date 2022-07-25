<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financing extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

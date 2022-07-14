<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpUs extends Model
{
    use HasFactory;

    protected $table = "help_us";
    protected $guarded = [];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

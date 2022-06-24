<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveLanguage extends Model
{
    use HasFactory;
    protected $table = "Active_languages";
    protected $fillable = ['lang_id'];
}

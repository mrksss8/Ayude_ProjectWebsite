<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSecretariat extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','header','name','address','gsm'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

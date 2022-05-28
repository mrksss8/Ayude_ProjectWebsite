<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','header','name','address','companyNumber','tel','email','bank','gsm',];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

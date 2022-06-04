<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredOffice extends Model
{
    use HasFactory;

    protected $fillable= ['language_id','header','address','companyNumber','tel','email','bank'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

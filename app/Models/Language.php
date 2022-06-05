<?php

namespace App\Models;

use App\Models\ContactUs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['language', 'symbol'];

    public function home()
    {
        return $this->hasMany(Home::class);
    }

    public function registeredOffice()
    {
        return $this->hasMany(RegisteredOffice::class);
    }

    public function generalSecretariat()
    {
        return $this->hasMany(GeneralSecretariat::class);
    }
}

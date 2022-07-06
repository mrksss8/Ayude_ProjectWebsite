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

    public function aboutHistory()
    {
        return $this->hasOne(AboutHistory::class);
    }
    public function aboutBoard()
    {
        return $this->hasOne(AboutBoard::class);
    }

    public function aboutMissionVision()
    {
        return $this->hasOne(aboutMissionVision::class);
    }

    public function project()
    {
        return $this->hasOne(Project::class);
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

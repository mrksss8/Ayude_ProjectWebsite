<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','section_no','header','subheader','content','image'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

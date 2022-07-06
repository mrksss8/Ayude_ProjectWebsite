<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNav extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','nav_name','route_name'];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function subNavs()
    {
        return $this->hasMany(SubNav::class, 'main_nav_id');
    }

    public function navName()
    {
        $nav = $this->where('id','!=',$nav_id)->get();

        return $nav->nav_name;
    }

    public function lang($lang_id)
    {
        $lang = Language::where('id','=',$lang_id)->first();
        $language = $lang->symbol;
        return $language;
    }
}

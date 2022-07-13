<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNav extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','position','nav_name','route_name'];

    protected $casts = [
        'isTranslated' => 'boolean',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function subNavs()
    {
        return $this->hasMany(SubNav::class, 'main_nav_id')->orderBy('position');
    }

    public function navName()
    {
        $nav = $this->where('id','!=',$nav_id)->get();

        return $nav->nav_name;
    }

    public function symbol($lang_id)
    {
        $lang = Language::where('id','=',$lang_id)->first();
        $language = $lang->symbol;
        return $language;
    }

    public function lang($lang_id)
    {
        $lang = Language::where('id','=',$lang_id)->first();
        $language = $lang->language;
        return $language;
    }

    public function subnavCount($nav_id)
    {
        $navs = $this->subNavs->count();
        return $navs;
    }

    public function isNotTranslated($lang_id, $pos)
    {
        $nav = $this->where([['language_id','=',$lang_id],['position','=',$pos]])->get();
        return $nav;
    }
}

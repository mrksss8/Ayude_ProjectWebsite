<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubNav extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','main_nav_id','nav_name','route_name'];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function mainNav()
    {
        return $this->belongsTo(MainNav::class, 'main_nav_id');
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

    public function subNav($page_id)
    {
        $sub_navs = $this->where('page_id','=',$page_id)->get();
        return $sub_navs;
    }
}

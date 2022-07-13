<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubNav extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','position','main_nav_id','nav_name','route_name'];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function mainNav()
    {
        return $this->belongsTo(MainNav::class, 'main_nav_id')->orderBy('position');
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

    public function nav($main_nav_id, $lang_id)
    {
        $sub_nav = $this->where([['main_nav_id','=',$main_nav_id],['language_id','=',$lang_id]])->first();
        return $sub_nav;
    }

    public function main($id, $lang_id)
    {
        $nav = MainNav::where([['id','=',$id], ['language_id','=',$lang_id]])->first();
        return $nav;
    }

    public function isNotTranslated($lang_id, $pos)
    {
        $nav = $this->where([['language_id','=',$lang_id],['position','=',$pos]])->get();
        return $nav->isEmpty() ? true : false;
    }
}

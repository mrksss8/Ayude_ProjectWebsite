<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','user_id','title','body','image'];

    public function language()
    {
      return $this->belongsTo(Language::class, 'language_id');
    }

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
}

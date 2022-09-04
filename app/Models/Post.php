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
      return $this->hasMany(Comment::class, 'post_id');
    }
    // Get all post
    public function posts()
    {
      return $this->all();
    }
    // Get specific post
    public function getPost($lang, $id)
    {
      $post = $this->where([['language_id','=',$lang], ['id','=',$id]])->first();
      return $post;
    }
    // Get Comments
    public function getComments($id)
    {
      $post = $this->comments()->where('post_id','=',$id)->get();
      return $post;
    }
    // Count comments
    public function commentsCount($id)
    {
      $count = $this->getComments($id)->count();
      return $count;
    }
}

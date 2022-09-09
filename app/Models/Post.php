<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['language_id','user_id', 'post_id', 'title','body','image'];

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
    // Get all post by language
    public function getPosts($lang)
    {
      $posts = $this->where('language_id','=',$lang)->get();
      return $posts;
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
      $post = $this->comments()->where([['comment_id','=',0], ['post_id','=',$id]])->get();
      return $post;
    }
    // Count comments
    public function commentsCount($id)
    {
      $count = $this->getComments($id)->count();
      return $count;
    }
    // Get user who post the specific news
    public function postedBy($id)
    {
      $user = User::where('id','=',$id)->pluck('name')->first();
      return $user;
    }
    // Format updated_at
    public function getUpdatedAtAttribute()
    {
      $date = \Carbon\Carbon::parse($this->created_at)->format('F d, Y');
      return $date;
    }
}

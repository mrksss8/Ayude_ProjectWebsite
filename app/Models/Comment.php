<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','guest_id','comment_id','comment'];

    public function post()
    {
      return $this->belongsTo(Post::class, 'post_id');
    }

    public function guest()
    {
      return $this->belongsTo(Guest::class, 'guest_id');
    }

    public function replies($id)
    {
      $replies = $this->where('id','=',$id)->get();
      return $replies;
    }

    public function commenter($id)
    {
      $commenter = $this->guest()->where('id','=',$id)->first();
      return $commenter;
    }
}

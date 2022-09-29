<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
      $replies = $this->where('comment_id','=',$id)->get();
      return $replies;
    }

    public function getCommenter($id)
    {
      $commenter = $this->guest()->where('id','=',$id)->pluck('name')->first();
      return $commenter;
    }

    // Format updated_at
    public function getUpdatedAtAttribute()
    {
      $date = \Carbon\Carbon::parse($this->created_at)->format('F d, Y');
      return $date;
    }

    public function getAutomaticMessage()
    {
      $adminReply = "Thank you for your message!";
      return $adminReply;
    }
}

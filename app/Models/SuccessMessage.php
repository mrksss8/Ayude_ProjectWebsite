<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessMessage extends Model
{
    use HasFactory;

    protected $fillable = ['header_msg', 'body_msg'];
}

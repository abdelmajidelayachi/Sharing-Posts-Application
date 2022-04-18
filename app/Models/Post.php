<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['userId', 'categoryId', 'description', 'upVotes', 'downVotes', 'image', 'video'];



}

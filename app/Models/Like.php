<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function post() {
        return $this->belongsTo(Post::class);
    }
}

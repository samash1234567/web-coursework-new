<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Thread extends Model
{
    use HasFactory, Notifiable;

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'password'];

    public function groupAdmin()
    {
        return $this->hasOne(Group::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

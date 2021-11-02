<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

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
}

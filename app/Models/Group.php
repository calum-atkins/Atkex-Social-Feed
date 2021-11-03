<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    //protected $fillable = ['profile_id' => 1];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }
}

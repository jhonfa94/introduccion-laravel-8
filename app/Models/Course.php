<?php

namespace App\Models;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    // Campo virtual
    public function getExerptAttribute()
    {
        return substr($this->description, 0, 80) . "...";
    }

    public function similar()
    {
        return $this->where('category_id', $this->category_id)->with('user')->take(2)->get();
    }
}

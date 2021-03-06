<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'category',
        'level',
        'image_url',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'flashcard_user', 'flashcard_id', 'user_id')->withTimestamps();
    }

}

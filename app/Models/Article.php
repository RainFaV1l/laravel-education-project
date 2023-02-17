<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'anons_title',
        'content',
        'image_path',
        'status',
        'view_count',
        'author_id',
        'category_id',
    ];

    public function author() {
        return $this->hasOne(User::class, 'id', 'author_id')->first();
    }

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id')->first();
    }
}

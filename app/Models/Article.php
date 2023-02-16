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
}

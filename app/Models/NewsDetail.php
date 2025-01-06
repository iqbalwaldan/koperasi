<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class NewsDetail extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'news_tag_id',
        'slug',
        'title',
        'description',
        'date_news',
        'author',
    ];

    protected $casts = [
        'date_news' => 'datetime',
    ];

    public function newsTag()
    {
        return $this->belongsTo(NewsTag::class, 'news_tag_id');
    }
}

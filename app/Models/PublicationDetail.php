<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PublicationDetail extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'publication_tag_id',
        'category',
    ];

    public function publicationTag()
    {
        return $this->belongsTo(PublicationTag::class, 'publication_tag_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'img_url',
        'audio_url',
        'duration',
        'posted_on',
        'season',
        'episode',
        'anchor_podcast',
        'slug',
        'guid'
    ];

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    
}

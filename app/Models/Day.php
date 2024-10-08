<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Day extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    public const COLLECTION_NAME_DAY = 'day';

    protected $fillable = [
        'day',
        'name',
        'description',
        'longread',
        'button',
    ];

    public function getDayImage(): ?Media
    {
        return $this->getFirstMedia(self::COLLECTION_NAME_DAY);
    }
}

<?php

namespace FreeOnFriday\News\Models;

use Illuminate\Database\Eloquent\Model;

class NewsTranslations extends Model
{
    protected $table = 'news_translations';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'except',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'locale',
        'news_id',
    ];
}

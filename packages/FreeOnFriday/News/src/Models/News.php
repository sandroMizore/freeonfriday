<?php

namespace FreeOnFriday\News\Models;

use Webkul\Core\Eloquent\TranslatableModel;


class News extends TranslatableModel
{

  protected $table = 'news';

  public $translatedAttributes = [
      'title',
      'meta_description',
      'meta_title',
      'content',
      'meta_keywords',
      'html_content',
      'except',
  ];
  public function news()
  {
      return $this->belongsToMany('FreeOnFriday\News\Models\NewsTranslations', 'id');
  }
}

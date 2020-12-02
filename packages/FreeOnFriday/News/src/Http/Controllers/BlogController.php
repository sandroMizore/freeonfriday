<?php
namespace FreeOnFriday\News\Http\Controllers;

use Illuminate\Support\Facades\DB;
use FreeOnFriday\News\Models\News;
use FreeOnFriday\News\Models\NewsTranslations;
class BlogController extends Controller {

  protected $_config;

  public function __construct()
  {
      $this->_config = request('_config');
  }

  public function index() {
    $posts = DB::table('news')
        ->select('*')
        ->leftJoin('news_translations', function($leftJoin) {
            $leftJoin->on('news.id', '=', 'news_translations.news_id')
                     ->where('news_translations.locale', app()->getLocale());
        })
        ->groupBy('news.id')->get();

        return view($this->_config['view'], compact('posts'));
  }

  public function single($slug) {
    $post = DB::table('news')
        ->select('*')
        ->leftJoin('news_translations', function($leftJoin) {
            $leftJoin->on('news.id', '=', 'news_translations.news_id')
                     ->where('news_translations.locale', app()->getLocale());
        })
        ->where('news.url_key', '=', $slug)->first();

        return view($this->_config['view'], compact('post'));
  }


  public function getPosts($count) {
    $posts = DB::table('news')
        ->select('*')
        ->leftJoin('news_translations', function($leftJoin) {
            $leftJoin->on('news.id', '=', 'news_translations.news_id')
                     ->where('news_translations.locale', app()->getLocale());
        })
        ->limit($count)->groupBy('news.id')->get();

        return $posts;
  }
}
 ?>

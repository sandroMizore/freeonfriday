<?php

namespace FreeOnFriday\News\Http\Controllers;
use FreeOnFriday\News\Models\News;
use FreeOnFriday\News\Models\NewsTranslations;
class NewsController extends Controller
{

    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->_config['view']);
        //return redirect('admin/dashboard');
    }

    public function store() {
     $data = request()->all();

     if ($data['image']['image_1']) {
        $images = $data['image']['image_1']->getClientOriginalName();
        $images = time().'_'.$images; // Add current time before image name
        $folder = '\/news';
        $data['image']['image_1']->storeAs($folder,$images);
        $news_image = $images;
    }

     $blog = new News;
     $blog_translation = new NewsTranslations;


     $blog->url_key = $data['slug'];
     $blog->image = $news_image;
     $blog->save();
     $blog_translation->locale = $data['locale'];
     $blog_translation->title = $data['name'];
     $blog_translation->content = $data['description'];
     $blog_translation->except = strip_tags($data['short_description']);
     $blog_translation->meta_title = $data['meta_title'];
     $blog_translation->meta_description = $data['meta_description'];
     $blog_translation->meta_keywords = $data['meta_keywords'];
     $blog_translation->news_id = $blog->id;
     $blog_translation->save();

     $blog_alter_translation = new NewsTranslations;
     $blog_alter_translation->locale = ($data['locale']) == 'ru' ? 'uk' : 'ru';
     $blog_alter_translation->title = $data['name'];
     $blog_alter_translation->content = $data['description'];
     $blog_alter_translation->except = strip_tags($data['short_description']);
     $blog_alter_translation->meta_title = $data['meta_title'];
     $blog_alter_translation->meta_description = $data['meta_description'];
     $blog_alter_translation->meta_keywords = $data['meta_keywords'];
     $blog_alter_translation->news_id = $blog->id;
     $blog_alter_translation->save();


      session()->flash('success', trans('admin::app.response.create-success', ['name' => 'news']));

      return redirect()->route($this->_config['redirect']);
    }

    public function create() {
      return view($this->_config['view']);
    }

    public function edit($id) {
      $locale = request()->get('locale') ?: app()->getLocale();
      $post_raw = News::select('*')->where('news.id', $id)->first();
      $post_translation = NewsTranslations::select('*')->where('news_translations.news_id', $id)->where('locale', $locale)->first();

      $post = [];

      $post['id'] = $post_raw->id;
      $post['image'] = $post_raw->image;
      $post['slug'] = $post_raw->url_key;
      $post['title'] = $post_translation->title;
      $post['except'] = $post_translation->except;
      $post['content'] = $post_translation->content;
      $post['meta_title'] = $post_translation->meta_title;
      $post['meta_description'] = $post_translation->meta_description;
      $post['meta_keywords'] = $post_translation->meta_keywords;

      return view($this->_config['view'], compact('post'));
    }

    public function delete($id)
    {
        $post = News::find($id);

        if ($post->delete()) {
            session()->flash('success', trans('admin::app.cms.pages.delete-success'));

            return response()->json(['message' => true], 200);
        } else {
            session()->flash('success', trans('admin::app.cms.pages.delete-failure'));

            return response()->json(['message' => false], 200);
        }
    }
    public function update($id) {
      $data = request()->all();

      $post_raw = News::select('*')->where('news.id', $id)->first();
      $post_translation = NewsTranslations::select('*')->where('news_translations.news_id', $id)->where('locale', $data['locale'])->first();


      if ($data['image']['image_0'] && $data['image']['image_0'] != 0) {
         $images = $data['image']['image_0']->getClientOriginalName();
         $images = time().'_'.$images; // Add current time before image name
         $folder = '\/news';
         $data['image']['image_0']->storeAs($folder,$images);
         $news_image = $images;
     } else {
       $news_image = $post_raw->image;
     }

     $post_raw->url_key = $data['slug'];
     $post_raw->image = $news_image;
     $post_raw->save();
     $post_translation->title = $data['name'];
     $post_translation->content = $data['description'];
     $post_translation->except = strip_tags($data['short_description']);
     $post_translation->meta_title = $data['meta_title'];
     $post_translation->meta_description = $data['meta_description'];
     $post_translation->meta_keywords = $data['meta_keywords'];
     $post_translation->save();
     session()->flash('success', trans('admin::app.response.create-success', ['name' => 'news']));

     return redirect()->route($this->_config['redirect']);
    }
}

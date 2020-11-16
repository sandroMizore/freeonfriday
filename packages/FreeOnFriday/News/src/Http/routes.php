<?php


 Route::group(['middleware' => ['web']], function () {
     Route::prefix('admin')->group(function () {

         // Admin Routes
         Route::group(['middleware' => ['admin']], function () {
            Route::view('/news', 'news::news.index');
            Route::get('/news', 'FreeOnFriday\News\Http\Controllers\NewsController@index')->defaults('_config', ['view' => 'news::news.index'])->name('news.index');



            Route::get('/news/create', 'FreeOnFriday\News\Http\Controllers\NewsController@create')->defaults('_config', ['view' => 'news::news.create'])->name('news.create');

            Route::post('/news/store', 'FreeOnFriday\News\Http\Controllers\NewsController@store')->defaults('_config', ['redirect' => 'news.index'])->name('news.store');

            Route::post('/news/update/{id}', 'FreeOnFriday\News\Http\Controllers\NewsController@update')->defaults('_config', ['redirect' => 'news.index'])->name('news.update');

            Route::get('/news/edit/{id}', 'FreeOnFriday\News\Http\Controllers\NewsController@edit')->defaults('_config', ['view' => 'news::news.edit'])->name('news.edit');
            Route::post('/news/delete/{id}', 'FreeOnFriday\News\Http\Controllers\NewsController@delete')->defaults('_config', ['redirect' => 'news.index'])->name('news.delete');

         });
     });
 });

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {
  Route::get('/blogs', 'FreeOnFriday\News\Http\Controllers\BlogController@index')->defaults('_config', ['view' => 'news::news.blog.index'])->name('blog.index');

  Route::get('/blogs/{slug}', 'FreeOnFriday\News\Http\Controllers\BlogController@single')->defaults('_config', ['view' => 'news::news.blog.view'])->name('blog.view');
});

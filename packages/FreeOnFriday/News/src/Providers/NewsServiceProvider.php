<?php

namespace FreeOnFriday\News\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * HelloWorld service provider
 *
 * @author    Jane Doe <janedoe@gmail.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class NewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      include __DIR__ . '/../Http/routes.php';
      $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'news');
      $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'news');
      $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->mergeConfigFrom(
                dirname(__DIR__) . '/Config/menu.php', 'menu.admin'
           );
    }
}

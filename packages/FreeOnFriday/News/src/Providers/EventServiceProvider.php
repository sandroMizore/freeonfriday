<?php

namespace FreeOnFriday\News\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('bagisto.admin.layout.content.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('news::news.index');
        });

        Event::listen('bagisto.admin.layout.head', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('news::layouts.style');
        });
    }
}

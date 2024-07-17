<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() //регистрация собственных провайдеров, связывание зависимостей
    {
        View::composer([], 'App\Providers\ViewComposers\UrlComposer');
        View::composer(['layouts.navigation'], 'App\Providers\ViewComposers\UrlComposer');
        View::composer(['layouts.app'], 'App\Providers\ViewComposers\UrlComposer');
        View::composer(['layouts.app'], 'App\Providers\ViewComposers\OpenGraphComposer');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() // настройка приложения
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\ArticleComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
			View::composer(
				['pages.articles', 'includes._blog', 'includes._footer'],
				"App\Http\Views\Composers\ArticleComposer");

			View::composer(
				['includes._footer', 'includes._nav'], "App\Http\Views\Composers\TreatmentComposer"
			);
    }
}

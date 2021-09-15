<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        View::share('categories', $categories);

        try {
            $categories= Category::all();
            View::share('categories', $categories);
        } catch (\Throwable $th) {
        dump("ALERT: Recuerda lanzar las migrations cuando acabes el clone");
        }
        Paginator::useBootstrap();
    }
}

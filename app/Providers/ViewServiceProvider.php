<?php
 
namespace App\Providers;

use App\Http\View\Composers\CartComposer;
use App\Http\View\Composers\MenuComposer;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
 
class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }
 
   
    public function boot()
    {
        View::composer('header',MenuComposer::class);  
        View::composer('cart',CartComposer::class);
    }
}
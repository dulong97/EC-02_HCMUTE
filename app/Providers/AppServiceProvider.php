<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use App\Cart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
          view()->composer('giohang',function($view){
            if(Session('cart')){
              $cart =Session::get('cart');
               $view->with(['cart'=>$cart,
                        'product_cart'=>$cart->items]);

          }
      });   
        view()->composer('thanhtoan',function($view){
            if(Session('cart')){
              $cart =Session::get('cart');
               $view->with(['cart'=>$cart,
                        'product_cart'=>$cart->items]);

          }
      });   
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

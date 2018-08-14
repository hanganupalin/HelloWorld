<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 13.08.18
 * Time: 11:57
 */

namespace HelloWorld\Providers;

use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider{

    /**
     * Register service provider
     */
    public function register(){
        $app = $this->getApplication();
        $app->register(HelloWorldRouteServiceProvider::class);
    }
}
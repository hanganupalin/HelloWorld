<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 13.08.18
 * Time: 11:57
 */

namespace HelloWorldDemo\Providers;

use Plenty\Plugin\ServiceProvider;

class HelloWorldDemoServiceProvider extends ServiceProvider{

    /**
     * Register service provider
     */
    public function register(){
        $app = $this->getApplication();
        $app->register(HelloWorldDemoRouteServiceProvider::class);
    }
}
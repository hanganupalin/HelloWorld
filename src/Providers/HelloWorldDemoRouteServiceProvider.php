<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 13.08.18
 * Time: 11:59
 */

namespace HelloWorldDemo\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldDemoRouteServiceProvider extends RouteServiceProvider{

    public function map(Router $router){
        $router->get('hello','HelloWorldDemo\Controllers\ContentController@sayHello');
        $router->get('vodo','HelloWorldDemo\Controllers\ContentController@vodo');
    }
}

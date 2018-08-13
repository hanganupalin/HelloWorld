<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 13.08.18
 * Time: 11:59
 */

namespace HelloWordl\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldRouteServiceProvider extends RouteServiceProvider{

    public function map(Router $router){
        $router->get('hello','HelloWorld\Controllers\ContentController@sayHello');
        $router->get('vodo','HelloWorld\Controllers\ContentController@vodo');
    }
}

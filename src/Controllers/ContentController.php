<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 13.08.18
 * Time: 12:02
 */
namespace HellHelloWorldDemooWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('HelloWorldDemo::content.hello');
    }

    public function vodo(Twig $twig){
        return $twig->render('HelloWorldDemo::content.vodo');
    }
}
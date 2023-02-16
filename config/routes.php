<?php

//filename: config/routes.php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$routes->add('hello', new Route('/hello', ['_controller' => 'ModernFramework\Controller\HelloController::hello']));
$routes->add('greeting', new Route('/greeting/{nama}', [
    'nama' => 'Pelanggan',
    '_controller' => 'ModernFramework\Controller\HelloController::greet'
]));
$routes->add('landing', new Route('/{nama}', ['nama' => 'Pelanggan', '_controller' => 'ModernFramework\Controller\HelloController::landing']));

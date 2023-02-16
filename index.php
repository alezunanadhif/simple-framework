<?php

//filename: index.php

require __DIR__ . '/vendor/autoload.php';

use ModernFramework\Application;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$kernel = new Application();
$response = $kernel->handle($request);
$response->send();

<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__. '/vendor/autoload.php';

$request = new Request();

$pathInfo = $request->getPathInfo();

if ($pathInfo === '/hello'){
    include __DIR__. '/src/pages/hello.php';
}else{
    include __DIR__.'/src/pages/bye.php';
}
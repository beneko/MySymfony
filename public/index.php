<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

require __DIR__. '/../vendor/autoload.php';

$request = Request::createFromGlobals();

$response = new Response();



$routes = require __DIR__ . '/../src/routes.php';

$context = new RequestContext();
$context->fromRequest($request);

$urlMatcher = new UrlMatcher($routes, $context);

try{
    extract($urlMatcher->match($request->getPathInfo()));
    ob_start();
    include __DIR__. '/../src/pages/'. $_route . '.php';
    $response->setContent(ob_get_clean());

}catch(RouteNotFoundException $e) {
    // echo "Erreur :" . $e->getMessage();
    $response->setContent("<h1>La page demandée n'existe pas</h1>");
    $response->setStatusCode('404');
} catch(Exception $e){
    $response->setContent("Une erreur est arrivée sur le serveur");
    $response->setStatusCode('500');
}

$response->send();
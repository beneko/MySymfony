<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



$request = Request::createFromGlobals();
$name = $request->query->get('name', 'World');
// var_dump($request);
// die();

$response = new Response();
$response->headers->set('Content-Type', 'text/html; charset=utf-8');
$response->setContent(sprintf('Hello %s!', htmlspecialchars($name, ENT_QUOTES)));

$response->send();

// $name = isset($_GET['name']) ? $_GET['name'] : 'World';

// header('Content-Type: text/html; charset=utf-8');

// printf('Hello %s!', htmlspecialchars($name));

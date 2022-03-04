<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__. '/vendor/autoload.php';

$request = Request::createFromGlobals();

// var_dump($request);
// die();

$name = $request->query->get('name', 'World');

// $name = isset($_GET['name']) ? $_GET['name'] : 'World';

// header('Content-Type: text/html; charset=utf-8');

printf('Hello %s!', htmlspecialchars($name));

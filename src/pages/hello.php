<?php

$name = $request->query->get('name', 'World');
// var_dump($request);
// die();

$response->headers->set('Content-Type', 'text/html; charset=utf-8');
$response->setContent(sprintf('Hello %s!', htmlspecialchars($name, ENT_QUOTES)));


// $name = isset($_GET['name']) ? $_GET['name'] : 'World';

// header('Content-Type: text/html; charset=utf-8');

// printf('Hello %s!', htmlspecialchars($name));

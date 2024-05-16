<?php

// Hier ist der Einstiegspunkt in unsere App

// Fehlermeldungen aktivieren
error_reporting(E_ALL);
ini_set('display_errors', '1');

// autoloading
require_once __DIR__ . '/../vendor/autoload.php';

// Fast-Route-Library


// Dispatcher einrichten
$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'App\Controller\HomeController::index');
    $r->addRoute('GET', '/jobangebote', 'App\Controller\JobangeboteController::index');
    $r->addRoute('GET', '/bewerbungen', 'App\Controller\BewerbungenController::index');

    $r->addRoute('GET', '/jobangebote/edit', 'App\Controller\JobangeboteController::edit');
    $r->addRoute('GET', '/jobangebote/show', 'App\Controller\JobangeboteController::show');
    $r->addRoute('GET', '/jobangebote/update', 'App\Controller\JobangeboteController::update');

    $r->addRoute('GET', '/bewerbungen/edit', 'App\Controller\BewerbungenController::edit');
    $r->addRoute('GET', '/bewerbungen/show', 'App\Controller\BewerbungenController::show');
    $r->addRoute('GET', '/bewerbungen/update', 'App\Controller\BewerbungenController::update');
});

// HTTP-Methode und URI abrufen
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// unnötige URL-Teile entfernen
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// Routing abgleichen
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        list($class, $method) = explode('::', $handler, 2);
        call_user_func_array([new $class, $method], $vars);
        break;
}

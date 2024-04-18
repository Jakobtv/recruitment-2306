<?php

// Hier ist der Einstiegspunkt in unsere App

// Fehlermeldungen aktivieren
error_reporting(E_ALL);
ini_set('display_errors', '1');

// autoloading
require_once __DIR__ . '/../vendor/autoload.php';

// temporärer Code
$controller = new App\Controller\HomeController();
$controller->index(); 

$controllera;

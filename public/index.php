<?php


use Tamatem\Http\Route;
use Tamatem\Http\Request;
use Tamatem\Http\Response;


require_once __DIR__ . '/../src/Support/Helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';

$route = new Route(new Request, new Response);

$route->resolve();
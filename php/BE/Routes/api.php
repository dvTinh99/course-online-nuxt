<?php 

require './Controllers/CourseController.php';
require './Controllers/HomeController.php';

$router = new Router();
$router->get('/api/course/list', [CourseController::class, 'list']); 
$router->get('/api/home', [HomeController::class, 'home']);

$router->dispatch($uri);
<?php 

if (str_contains($uri, '/api/')) {
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");

    require 'api.php';
} else {
    echo 'hello world';
}
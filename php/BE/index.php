<?php 
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

error_log('URI :' . $uri);
error_log('METHOD :' . $method);
$cores = scandir('./Core', SCANDIR_SORT_ASCENDING);

foreach ($cores as $value) {
    if (is_file('./Core/' . $value)) {
        require './Core/' . $value;
    };
}

require 'Routes/routes.php';
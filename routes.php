<?php

require 'data.php';

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (! $controller) $controller = 'index';


if (! file_exists("controllers/{$controller}.controller.php")) {
    http_response_code(404);
    echo "File doesn't exist";
}


require "controllers/{$controller}.controller.php";

?>
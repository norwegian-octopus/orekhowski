<?php
// simplest router

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require_once ROOT . '/views/index.php';

        break;
    case '' :
        require_once ROOT . '/views/index.php';
        break;
    case '/examples' :
        require_once ROOT . '/views/examples.php';
        break;
    case '/resume' :
        require_once ROOT . '/views/resume.php';
        break;

    default:
        http_response_code(404);
        require_once ROOT . '/views/404.php';
        break;
}




?>
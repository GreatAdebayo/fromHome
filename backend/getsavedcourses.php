<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include 'index.php';
header("Access-Control-Allow-Origin: $localhostUrl");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Accept, Authorization, X-Requested-With");
$token = json_decode(file_get_contents('php://input')); 
$newIndex = new MyIndex;
$newIndex->getSavedCourse($token);
?>
<?php

require_once '../app/controller/Controllers.php';
$controller = new Controllers;
var_dump($_SERVER['REQUEST_METHOD'] =='GET')

if(isset($_GET['url']))
{
    $url = trim()
}

$controller->index;
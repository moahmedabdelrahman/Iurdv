<?php

$url = explode("/", $_SERVER['QUERY_STRING']);
$page = $url[0] . '.php';
if (file_exists($page)) {
    require_once($page);
} else {
    require_once('404.php');
}


?>
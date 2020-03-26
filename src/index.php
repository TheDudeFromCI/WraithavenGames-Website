<?php

$path = $_SERVER['argv'][1];
$controller = substr($path, strpos($path, "/"));

switch ($controller) {
    case "index":
    case "home":
        require_once("src/home/index.php");
        break;

    default:
        echo "Unknown path!\n";
        break;
}

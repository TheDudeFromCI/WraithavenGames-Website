<?php

$path = $_SERVER['argv'][1];
$controller = substr($path, strpos($path, "/", 1));

switch ($controller) {
    case "/home":
        require_once("src/home/index.php");
        break;

    default:
        echo "Unknown path!\n";
        break;
}

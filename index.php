<?php

use MyApp\Media;
use MyApp\Video\Youtube;

function __autoload($class_name) {
    include str_replace('\\', '/', $class_name) . ".php";
}

$img = new Media("https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png");

$youtube = new Youtube("https://www.youtube.com/watch?v=hjIOMV3d4rE&t=1s");
echo $youtube->getCode();
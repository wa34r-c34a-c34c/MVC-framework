<?php

// Simple autoloader
function autoload($class) {
    if (preg_match('/Controller/$', $class))
        require("Controller/".$class.".php");
    else
        require("Models/".$class".php");
}

spl_autoload("autoload");

<?php

require_once __DIR__ . "/libs/MongoDB/functions.php";

spl_autoload_register(function ($class) {
    $prefix = "MongoDB\\";
    $base_dir = __DIR__ . "/libs/MongoDB/";

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace("\\", "/", $relative_class) . ".php";

    if (file_exists($file)) {
        require $file;
    }
});


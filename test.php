<?php

require __DIR__ . '/vendor/autoload.php';

if (!function_exists('resolve')) {
    function resolve() {
        echo "This is the correct resolve";
    }
}

resolve();

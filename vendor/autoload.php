<?php

// автозагрузка классов
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
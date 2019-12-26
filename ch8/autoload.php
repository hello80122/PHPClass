<?php
function __autoload($className){
    $filename = __DIR__ . "/classes/" . $className . ".php";
    if (is_readable($filename)){
        require $filename;
    }
}

spl_autoload_register('__autoload');
?>
<?php

/**
 * Autoloader
 */
spl_autoload_register(function($name)
{
    $name = str_replace(['/','\\'] , DIRECTORY_SEPARATOR , $name);

    require "$name.php";
});
<?php

namespace Core;

/**
 * Klasa widoku
 */
class View 
{
    /**
     * Funkcja pobiera tablice parametrów, zamienia ją na zestaw zmiennych
     *  oraz przekazuje je do pliku widoku, któy renderuje
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);
        
        $file = "../App/View/$view";

        if(is_readable($file))
        {
            require $file;
        }
        else
        {
            echo "Strona nie istnieje";
        }
    }
}
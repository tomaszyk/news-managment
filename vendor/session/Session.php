<?php

namespace vendor\session;

//Klasa tworzy sesję
class Session 
{
    
    public function __construct()
    {
        session_start();
    }

    public function destroy()
    {
        session_destroy();
        $_SESSION = [];
    }

    //Funkcję set i get zapisują i pobierają wartości z sesji
    public function setVariable($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function getVariable($key)
    {
        return $_SESSION[$key];  
    }
}
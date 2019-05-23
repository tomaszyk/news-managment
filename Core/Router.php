<?php

namespace Core;

/**Klasa routera */
class Router
{
    /**Tablica z routami */
    protected $routes = [];
    /**Tablica asacjacyjna z nazwą kontrolera i akcji */
    protected $param = [];

    /**
     * Dodawanie nowych rout
     */
    public function addRoute($route, $params)
    {
        $this -> routes[$route] = $params;
    }
    /**
     * Pobieranie tablicy z routami
     */
    public function getRoutes()
    {
        return $this -> routes;
    }
    /**
     * Funkcja zwraca odpowiednią tablicę z nazwą kontrolera i nazwą akcji, na podstawie wartości adresu $url
     */
    public function match($url)
    {
        foreach($this -> routes as $key => $value)
        {
            if($key == $url)
            {
                $this -> param = $value;
                return true;
            }
        }

        return false;
    }

    public function getParam()
    {
        return $this -> param;
    }

    /**
     * Funkcja tworzy obiekt odpowiedniego kontrolera i wywołyje odpowiednią akcję tego obiektu
     */
    public function dispatcher($url)
    {
        if($this -> match($url))
        {
            $controller = $this -> param['controller'];
            $controller = "App\Controllers\\$controller";

            if(class_exists($controller))
            {
                $controller_object = new $controller();

                $method = $this -> param['action'];

                if(is_callable([$controller_object, $method]))
                {
                    $controller_object -> $method();
                    
                }
                else
                {
                    echo 'Nie można wywołać akcji';
                }

            }
            else
            {
                echo 'Kontroler nie istnieje';
            }

        }
        else
        {
            echo 'Nie ma takiej routy';
        }
    }
}
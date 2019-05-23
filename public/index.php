<?php

use Core\Router;


require '../autoload.php';


$url = $_SERVER['QUERY_STRING'];

/**Obiekt routera */
$router = new Router();

/**Dodawanie rout */

$router -> addRoute("register", ['controller' => 'Welcome', 'action' => 'register']);
$router -> addRoute("login", ['controller' => 'Welcome', 'action' => 'login'] );
$router -> addRoute("mainlogout", ['controller' => 'Welcome', 'action' => 'mainlogout'] );
$router -> addRoute("destruct", ['controller' => 'Welcome', 'action' => 'destruct']);

$router -> addRoute("mainlogin", ['controller' => 'News', 'action' => 'mainlogin']);
$router -> addRoute("add", ['controller' => 'News', 'action' => 'add']);
$router -> addRoute("edit", ['controller' => 'News', 'action' => 'edit']);
$router -> addRoute("delete", ['controller' => 'News', 'action' => 'delete']);
$router -> addRoute("active", ['controller' => 'News', 'action' => 'active']);

/**
 * Wywołanie funkcji, która na podstawie adresu $url i tablicy z routami stworzu odpowiedni obiekt kontrolera
 * i wywoła odpowiednią akcję
 */
$router -> dispatcher($url);
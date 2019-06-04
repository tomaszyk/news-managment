<?php

namespace App\Controllers;

ob_start();

use Core\Controller;
use Core\View;
use App\Model\DB_register;

/**
 * kontroler News zawiera akcję do zarządzania newsami dodawanie (addAction), edytownie (editAction), usuwanie (deleteAction)
 * panel zarządzania dla użytkownikó zalogowanych (mainloginAction) oraz zmaina statusu ActiveAction
 * Kontroler zawiera też funkcję before, która sprawdza czy użytkownik jest zalogowany zanim  wygeneruje odpowiednie pliki widoku 
 * 
 */
class News extends Controller
{
    protected function before()
    {
        if($this -> session -> getVariable('id_user') != NULL)
        {
            return true;
        }
        else 
        {
            header('Location:login');
            return false;
        }
    }

    public function addAction()
    {
        if(isset($_POST['submit']))
        {
            DB_register::add(htmlspecialchars($_POST['name']), 
            htmlspecialchars($_POST['description']), 
            $_POST['is_active'], 
            $this -> session -> getVariable('id_user'));

            header('Location:mainlogin');
        }
        View::render('add.php');
    }

    public function editAction()
    {
        if(isset($_POST['id_news']))
        {
            $news = DB_register::edit($_POST['id_news']);
            View::render('edit.php', ['news' => @$news]);
        }

        if(isset($_POST['submit']))
        {
            DB_register::update($_POST['id_news'], htmlspecialchars($_POST['description']), htmlspecialchars($_POST['name']));
            header('Location:mainlogin');
        }
   
    }

    public function deleteAction()
    {
        DB_register::delete($_POST['id_news']);
        header('Location:mainlogin');
        
    }

    public function mainloginAction()
    {
        $results = DB_register::select();
        
        View::render('mainlogin.php', ['results' => $results]);
    }

    public function activeAction()
    {
        DB_register::active($_POST['id_news']);
        header('Location:mainlogin');
    }
}
<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;
use App\Model\DB_register;

/**
 * plik autoloadera
 */
require '../autoload.php';

/**
 * Kontroler zawiera akcję do rejestracji nowego użytkownika wraz z szeregiem testów
 * dla wartości wprowadzanych przez użytkownika, akcję do logowania, akcję pokazującą listę newsów
 * oraz akcję kasującą dane po wylogowaniu użytkownika
 * 
 */
class Welcome extends Controller
{

    public function register()
    {
        /**
         * testy dla poszczególnych pół formularza rejestracyjnego
         */
        if(@$_POST['submit'])
        {
            /**
             * flaga, która zmieni wartość na false tylko wtedy gdy, któryś z testów nie zostanie zaliczony.
             * Wówczas tworzona jest odpowiednia zmienna z komunikatem o błędzie
             */
            $wszystkoOK = true;

            if(strlen($_POST['first_name']) < 3 || strlen($_POST['first_name']) > 15)
            {
                
                $error_first_name = 'Imię musi posiadać od 3 do 15 liter';
                $wszystkoOK = false;
                
            }
           

            if(strlen($_POST['last_name']) < 3 || strlen($_POST['last_name']) > 15)
            {
                
                $error_last_name = 'Nazwisko musi posiadać od 3 do 15 liter';
                $wszystkoOK = false;
            
            }  
            
            $email_sanit = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

            
            if(filter_var($email_sanit, FILTER_VALIDATE_EMAIL) == false || ($_POST['email'] != $email_sanit))
            {
                $error_email = 'Podaj poprawny email'; 
                $wszystkoOK = false;
            
            }

            if(@$_POST['gender'] == NULL)
            {
                $error_gender = 'Zaznacz płeć';
            }

            if(strlen($_POST['password']) < 8 || strlen($_POST['password']) > 20)
            {
                $error_password = 'Hasło musi posiadać od 8 do 20 liter';
            
                $wszystkoOK = false;
            }

            if($_POST['password'] != $_POST['repeted_password'])
            {
                $error_repeted_password = 'Hasła w obu polach muszą być identyczne';

                $wszystkoOK = false;
               
            }
            /**
             * Jeżeli wartość flagi równa się false, do widoku przekazywane są zmienne z odpowiednią informacją
             */
            if($wszystkoOK == false)
            {
                View::render('register.php', [
                    'error_first_name' => @$error_first_name,
                     'error_last_name' => @$error_last_name,
                      'error_email' => @$error_email,
                       'error_gender' => @$error_gender,
                        'error_password' => @$error_password,
                         'error_repeted_password' => @$error_repeted_password
                         ]);
                         return false;
            }
            /**
             * Jeżeli testy wypadły pomyślnie, (flaga ma wartośś true) użytkownik zostaje zapisany do bazy
             * i zostaje przekierowany do strony z logowaniem
             */
            if($wszystkoOK == true)
            {
                DB_register::register($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], md5($_POST['password']));
                header('Location:login');
            }
        }

        View::render('register.php');           
    }

    /**
     * Logowanie, sprawdzenie czy w bazie istnieje tylko jeden użytkownik o podanym emailu i haśle
     */
    public function login()
    {
        if(isset($_POST['submit']))
        {

            $result = DB_register::login($_POST['email'], md5($_POST['password']));

            if($result -> num_rows == 1)
            {
                $login = mysqli_fetch_array($result);
                /**
                 * Tworzenie zmiennej sesyjnej, któta przechowuje id użytkownika
                 * Mechanizm sesji jest dziedziczony z klasy Controller
                 */
                $this -> session -> setVariable('id_user', $login['id_users']);
                /**
                 * Zapis do bazy daty i godziny logowania
                 */
                DB_register::updated_at($this -> session -> getVariable('id_user'));
                
                header('Location:mainlogin');
            }
            else
            {
                $error_login = "Błędne dane logowania";
                View::render('login.php', ['error_login' => $error_login]);
                return false;
            }
        }
        View::render('login.php');
    }
    /**
     * lista newsów
     */
    public function mainlogout()
    {
        $results = DB_register::select();

        View::render('mainlogout.php', ['results' => $results]);
    }
    /**
     * Niszczenie danych użytkownika (wylogowanie się)
     */
    public function destruct()
    {
        if($_POST['logout'] == true)
        {
            $this -> session -> destroy();
            header('Location:mainlogout');
        }
    }

}
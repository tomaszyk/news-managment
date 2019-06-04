<?php

namespace App\Model;

use Core\Model;

/**
 * Klasa DB_register dziedziczy połączenie z bazą po klasie kontroler
 * Klasa zawiera funkcję, które pobierają dane i przekazują je do kontrolerów (News i Welcome), aktualizują, usuwają odpowiednie dane z bazy
 */

class DB_register extends Model
{
    /**
     * Zapisuje użytkownika do bazy
     */
    public static function register($first_name, $last_name, $email, $gender, $password)
    {
        $db_connect = parent::dbConnect();

        $first_name = mysqli_real_escape_string($db_connect, $first_name);
        $last_name = mysqli_real_escape_string($db_connect, $last_name);
        $email = mysqli_real_escape_string($db_connect, $email);
        $password = mysqli_real_escape_string($db_connect, $password);

        $is_active = 1;

        $date = new \DateTime();

        $created_at = $date -> format('Y-m-d H:i:s');

        $db_connect -> query("INSERT INTO users VALUES('','$first_name', '$last_name', '$is_active', '$created_at', '$created_at', '$email', '$gender', '$password')");

    }

    /**
     * Pobiera dane potrzebne przy logowaniu
     */
    public static function login($email, $password)
    {
        $db_connect = parent::dbConnect();

        $email = mysqli_real_escape_string($db_connect, $email);
        $password = mysqli_real_escape_string($db_connect, $password);
        
        return $login = $db_connect -> query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    }
    /**
     * Aktualizacja daty odtatniego logowania
     */
    public static function updated_at($id_user)
    {
        $date = new \DateTime();

        $updated_at = $date -> format('Y-m-d H:i:s');

        $db_connect = parent::dbConnect();

        $db_connect -> query("UPDATE users SET updated_at='$updated_at' WHERE id_users=$id_user ");
    }

    /**
     * Dodawanie Newsa
     */
    public static function add($name, $description, $is_active, $id_user)
    {
        $db_connect = parent::dbConnect();

        $name = mysqli_real_escape_string($db_connect, $name);
        $description = mysqli_real_escape_string($db_connect, $description);


        $date = new \DateTime();

        $created_at = $date -> format('Y-m-d H:i:s');

        $db_connect -> query("INSERT INTO news VALUES ('', '$name', '$description', '$is_active', '$created_at', '$created_at', '$id_user')");
    }

    /**
     * Pobieranie News
     */
    public static function select()
    {
        $db_connect = parent::dbConnect();

        return $results = $db_connect -> query("SELECT news.id_news, news.name, news.description, news.created_at, news.updated_at, users.first_name, users.last_name, news.is_active FROM news, users WHERE news.id_user=users.id_users");  
    }

    /**
     * Pobieranie z bazy newsa do edycji
     */
    public static function edit($id_news)
    {
        $db_connect = parent::dbConnect();

        return $news = $db_connect -> query("SELECT id_news, description, name FROM news WHERE id_news=$id_news");
    }

    /**
     * Zapis do bazy wyedytowanego (zmienionego) newsa
     */
    public static function update($id_news, $description, $name)
    {
        $db_connect = parent::dbConnect();

        $description = mysqli_real_escape_string($db_connect, $description);
        $name = mysqli_real_escape_string($db_connect, $name);

        $date = new \DateTime();

        $updated_at = $date -> format('Y-m-d H:i:s');

        $db_connect -> query("UPDATE news SET name = '$name', description = '$description', updated_at='$updated_at' WHERE id_news='$id_news'");
    }

    /**
     * Usuwanie newsa
     */
    public static function delete($id_news)
    {
        $db_connect = parent::dbConnect();

        $db_connect -> query("DELETE FROM news WHERE id_news=$id_news");
    }

    /**
     * Zmiana statusu newsa
     */
    public static function active($id_news)
    {
        $db_connect = parent::dbConnect();

        $result = $db_connect -> query("SELECT is_active from news WHERE id_news=$id_news");

        if($is_active = mysqli_fetch_array($result))
        {
            if($is_active['is_active'] == 0)
            {
                $is_active['is_active'] = 1;
                $is_active = $is_active['is_active'];
            }
            else
            {
                $is_active['is_active'] = 0;
                $is_active = $is_active['is_active'];
            }

        }

        $db_connect -> query("UPDATE news SET is_active=$is_active WHERE id_news='$id_news'");
    }
}
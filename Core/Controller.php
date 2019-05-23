<?php

namespace Core;

use vendor\session\Session;

/**Kontroler z którego dziedziczą inne kontrolery */
class Controller
{
    protected $session;
    /**
     * Kontrolery News i Welcome odziedziczą ten konstruktor,
     * zatem ich obiety będą mogły używać sesji
     */
    public function __construct()
    {
        $this -> session = new Session();
        
    }
    /**
        * metoda __call jest wywoływana podczas próby wywołania nieistniejącej metody $name
        * dzięki temu można wykonać funkcję before (sprawdzić czy np. użytkownik jest zalogowany)
        * dopiero potem wywołujemy metodę $name.Action, dzięki funkcj call_user_func_array
        * Sprawdzenie czy użytkownik jest zalogowany dotczy tylko akcji w kontrolerze News
        * To dlatego nazwy tamtych akcji są zakończone przyrostkiem Action. Nie ma to miejsca w kontrolerze Welcome
     */
    

    public function __call($name, $args)
    {
        $method = $name . 'Action';

        if(is_callable([$this, $method]))
        {
                if($this -> before() !== false)
                {
                    call_user_func_array([$this, $method], $args);

                }
            
        }
    
       
    }

    /**
     * Kontroler News nadpisuje tą metodę, dzięki czemu sprawdza czy użytkownik jest zalogowany
     * Kontroler Welcome tego nie robi, więc on odziedziczy pustą metodę before
     */
    protected function before()
    {

    }

    

}
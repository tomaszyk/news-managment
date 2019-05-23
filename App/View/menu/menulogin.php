<?php
ECHO<<<Start
<ul>
    <li><a class = "button" href = "mainlogin">Newsy</a></li>
    <li><a class = "button" href = "add">Dodaj Newsa</a></li>   
</ul>


    <form action="destruct" method="POST">
        <input type="hidden" name="logout" value="true">
        <input class = "button" type="submit" value="WYLOGUJ">
    </form>

Start;
?>
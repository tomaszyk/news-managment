<!DOCTYPE html>
<html>
    <head>
        <title>edytowanie newsa</title>
        <link rel = "stylesheet" href = "../style.css">
    </head>
    <body>
        <div class = "menu">
            <?php include 'menu/menulogin.php'?>
        </div>
        <h1 class = "form">Edytowanie Newsa</h1>
        <div class = "container">
        <?php
        echo "<form class = \"form\" action = \"edit\" method=\"post\">";
    
        foreach($news as $new)
        { 
            echo "<input type=\"text\" name=\"name\" value=\"".$new['name']."\"><br>";
            echo "<textarea name=\"description\" cols=\"80\" rows=\"20\">".$new['description']."</textarea><br>";
            echo "<input type=\"hidden\" name=\"id_news\" value=\"".$new['id_news']."\">";
            echo "<input class = \"center\" type=\"submit\" name=\"submit\" value=\"ZAPISZ\">";
                
        }
        echo "</form>";
        ?>
        </div>
<?php include 'footer/footer.php';?>
        <body>
    
</html>
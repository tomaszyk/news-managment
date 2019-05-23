<!DOCTYPE html>
<html>
    <head>
        <title>Witaj</title>
        <link rel = "stylesheet" href = "../style.css">
    </head>
    <body>
        <div class = "menu">
        <?php include 'menu/menulogout.php'?>
        </div>
        
        <div class = "container">
        <?php
            foreach($results as $result)
            {
                if($result['is_active'] == 1)
                {
                    echo "<div>";
                    echo "<br>";
                    echo "<hr>";
                    echo "<h1>".$result['name']."</h1>";
                    echo "<h3 class = \"news\">Opublikował: ".$result['first_name']. ' ' . $result['last_name']."</h3>";
                    echo "<h5>Utworzony: ".$result['created_at']."</h5>";
                    echo "<h5>Zmodyfikowany: ".$result['updated_at']."</h5>";
                    echo "<p>".$result['description']."</p>";
                    echo "</div>";
                    echo "<br>";
                }
               
            }
        ?>
        </div>
        <?php include 'footer/footer.php';?>
    </body>
</html>
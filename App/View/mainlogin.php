<!DOCTYPE html>
<html>
    <head>
        <title>Witaj</title>
        <link rel = "stylesheet" href = "../style.css">
    </head>
    <body>
    <div class = "menu">
        <?php include 'menu/menulogin.php'?>
    </div>
  
    <div class = "container">
    <div>
        
        
        </div>
        <?php
            foreach($results as $result)
            {
                    echo "<div>";
                    echo "<br>";
                    echo "<hr>";
                    echo "<h1>".$result['name']."</h1>";
                    echo "<h4>Status: ".$result['is_active']."</h4>";
                    echo "<h3 class = \"news\">Opublikował: ".$result['first_name']. ' ' . $result['last_name']."</h3>";
                    echo "<h5>Utworzony: ".$result['created_at']."</h5>";
                    echo "<h5>Zmodyfikowany: ".$result['updated_at']."</h5>";
                    echo "<p>".$result['description']."</p>";
                    echo "<form action=\"active\" method=\"POST\">
                        <input type=\"hidden\" name=\"id_news\" value=".$result['id_news'].">
                        <input class = \"button\" type=\"submit\" value=\"ZMIEŃ STATUS\">
                    </form>";

                    echo "<form action=\"edit\" method=\"POST\">
                            <input type=\"hidden\" name=\"id_news\" value=".$result['id_news'].">
                            <input class = \"button\" type=\"submit\" value=\"EDYTUJ\">
                        </form>";
    
                    echo "<form action=\"delete\" method=\"POST\">
                        <input type=\"hidden\" name=\"id_news\" value=".$result['id_news'].">
                        <input class = \"button\" type=\"submit\" value=\"USUŃ\">
                    </form>";
                
                    echo "</div>";
                    echo "<br>";

            }
        ?>
    </div>
    <?php include 'footer/footer.php';?>
    </body>
</html>
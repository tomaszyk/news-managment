<!DOCTYPE html>
<html>
    <head>
        <title>dodawanie newsa</title>
        <link rel = "stylesheet" href = "../style.css">
    </head>
    <body>
        <div class = "menu">
        <?php include 'menu/menulogin.php'?>
        </div>
        <h1 class = "form">Dowawanie nowego Newsa</h1>
        <div class = "container">
        <form action = "add" class = "form" method="POST">
            <label>Tytuł</label><br>
            <input type = "text" name = "name"><br>
            <label>News</label><br>
            <textarea cols= "80" rows = "20" name = "description"></textarea><br>
            <div class = "radio">
            <input type="radio" name = "is_active" value="1">Aktywny
            <input type="radio" name = "is_active" value="0">Nieaktywny<br>
            </div>
            <input class = "center" type = "submit" name = "submit" value = "DODAJ">
        </form>
        </div>
        <?php include 'footer/footer.php';?>
        <body>
        
</html>
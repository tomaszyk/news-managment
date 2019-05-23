<!DOCTYPE html>
<head>
    <title>Logowanie</title>
    <link rel = "stylesheet" href = "../style.css">
</head>
<body>
    <div class = "menu">
        <?php include 'menu/menulogout.php'?>
    </div>
    <h1 class = "form">Zaloguj się</h1>
    <div class = "container">
    <form class = "form" action = "login" method = "post">
        <label>Email</label><br>
        <input type = "email" name = email><br>
        <label>Hasło</label><br>
        <input type = "password" name = "password"><br>
        <span class = "error"><?php echo @$error_login; ?></span>
        
        <input class = "center" type = "submit" name = "submit" value = "ZALOGUJ"><br>
    </form>
    <?php include 'footer/footer.php';?>
</div>

    
    
</body>

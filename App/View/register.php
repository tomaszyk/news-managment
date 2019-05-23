<!DOCTYPE html>
<head>
    <title>Rejestracja</title>
    <link rel = "stylesheet" href = "../style.css">
</head>
<body>
    <div class = "menu">
        <?php include 'menu/menulogout.php'?>
    </div>
    <h1 class = "form">Zarejestruj się</h1>
    <div class = "container">
    <form class = "form" action = "register" method = "post">
        <label>Imię</label><br>
        <input type = "text" name = "first_name"><br>
        <span class = "error"><?php echo @$error_first_name; ?></span><br>
        <label>Nazwisko</label><br>
        <input type = "text" name = "last_name"><br>
        <span class = "error"><?php echo @$error_last_name; ?></span><br>
        <label>Email</label><br>
        <input type = "email" name = "email"><br>
        <span class = "error"><?php echo @$error_email; ?></span><br>
        <label>Płeć</label><br>
        <div class = "radio">
        <input type="radio" name = "gender" value="male"><label>Mężczyzna</label>
        <input type="radio" name = "gender" value="female"><label>Kobieta</label><br>
        </div>
        <span class = "error"><?php echo @$error_gender; ?></span><br>
        <label>Hasło</label><br>
        <input type = "password" name = "password"><br>
        <span class = "error"><?php echo @$error_password; ?></span><br>
        <label>Powtórz hasło</label><br>
        <input type = "password" name = "repeted_password"><br>
        <span class = "error"><?php echo @$error_repeted_password; ?></span><br>
        <input class = "center" type = "submit" name = "submit" value = "ZAREJESTRUJ"><br>
    </form>
    </div>
    <?php include 'footer/footer.php';?>
</body>




<?php
    require_once "controller/login.php"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Matrices</title>
</head>
<body>
    <div class="form">
        <form action="controller/login.php" method="POST" autocomplete="off">
            <div class="zone title">
                Login
            </div>
            <div class="zone">
                <label class="label">Username</label>
                <input class="input" placeholder="username" type="text" name="username" id="user">

                <label class="label">Password</label>
                <input class="input" placeholder="password" type="password" name="password" id="pass">

                <input class="input" placeholder="submit" type="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
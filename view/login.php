<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="../controller/UserController.php">
            <label>Login</label>
            <input id="login" type="text" name="login" required=""/><br />
            <label>Passowrd</label>
            <input id="pass" type="password" name="password"  required=""/><br />
            <input type="submit" name="log" value="Login">
        </form>
    </body>
</html>

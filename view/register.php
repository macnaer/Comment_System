<?php

session_start();

if(!isset($_SESSION['login']) || !isset($_SESSION['id']))
{

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="../controller/UserController.php">
            <label>Login</label>
            <input id="login" type="text" name="login" required="" /><br />
            <label>Passowrd</label>
            <input id="pass" type="password" name="password" required=""/><br />
            <label>Confirm password</label>
            <input id="re_pass" type="password" name="password2" required="" /><br />
            <input type="submit" name="reg" value="Register">
        </form>
    </body>
</html>

<?php } 

if(isset($_SESSION['login']) && isset($_SESSION['id']))
{
 
    include '../model/DB_Manager.php';
    $user = $_SESSION['login'];
    $res = mysql_query("SELECT * FROM `users` WHERE `login`='$user' ");
    $user_data = mysql_fetch_array($res);
 
    echo "<p style='float:right'>";
    echo "Hello, <b>". $user_data['login']."</b><br>";
    echo "<a href='exit.php'>Exit</a>";
    echo "</p>";
}

?>
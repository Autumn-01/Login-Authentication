<?php
    $usr="root";
    $pwd="root";

    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ) {
       $username=$_POST['username'];
       $password=$_POST['password'];
        if(($username==$usr) && ($password==$pwd)) {
            echo '<br>login successfull';
        }
        else {
            echo '<br>login unsuccessful';
        } 
    }
    else {
        echo '<br>Cannot be left empty!';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="loginpage.php" method="POST" align="center">
            <br>
            Username:<input type="text" name="username"><br><br><br>
            Password:<input type="password" name="password"><br><br>
            
            <input type="Submit" value="Submit">
        </form>
    </body>
</html>
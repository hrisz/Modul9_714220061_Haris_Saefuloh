<?php
session_start();

if (isset($_POST["insert"]))
{
    if (($_POST["user"]!="")&&($_POST["password"]!=""))
    {
        $_SESSION["session_status"]=["login"];
        $_SESSION["session_user"]=$_POST["user"];
        $_SESSION["session_password"]=$_POST["password"];
        header("Location: proses_login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h2>Penggunaan session</h2>
    <pre>
    <form action="login.php" method="POST">
        Username : <input type="text" name="user" size="15">
        Password : <input type="password" name="password" size="15">
                   <input type="hidden" name="insert">
                   <input type="submit" name="login" value="login">
    </form>
    </pre>
</body>
</html>
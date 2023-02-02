<?php
session_start();
if(isset($_SESSION["Email"])){

    $email=$_SESSION["Email"];

}
else{
    header("Location: index.php");
}
if(isset($_POST["logout"])){
    $_SESSION=null;
    session_destroy();
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        Email:<?php echo"$email";?>
        <form method="post" > 
        <button name="logout" type="submit">Logout</button>
</form>
    </body>
</html>

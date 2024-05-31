<?php
session_start();

 if(isset($_SESSION['username']))

{
        unset($_SESSION['username']);
        $_SESSION['message']="Logged Out Successfully";
}

header('Location:index.php');

?>



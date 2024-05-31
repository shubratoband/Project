<?php 
include('./authcode.php');

function getAll($table)
{
    global $conn;
    $query= "SELECT * FROM $table";
    return $query_run= mysqli_query($conn,$query);
}

function redirect($url,$message)
{
    $_SESSION['message']=$message;
    header('Location:' .$url);
    exit();
}

?>

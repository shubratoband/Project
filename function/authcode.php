<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
        <!-- Altertify JS -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>
</head>
<body>
      
</body>
</html>

<?php session_start(); ?>

<?php  

$host="localhost";
$username="root";
$password="";
$database="ecom";
$conn=mysqli_connect($host,$username,$password,$database);

?>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

<!-- Altertify JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 


            <?php {
            if(isset($_SESSION['message']))  
            ?>
                   <script> alertify.set('notifier','position', 'top-center');
                    alertify.success('<?= $_SESSION['message']; ?>');
                    </script>
                    <?php
                    unset($_SESSION['message']);
             }
             ?>










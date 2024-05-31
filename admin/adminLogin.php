<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>


<body class="body-b">
    
  <?php

  session_start();

  if(isset($_SESSION['message']))
         {
          ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong><?=$_SESSION['message']?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

        <?php
        unset($_SESSION['message']);
         }
    ?>




    <div class="container">
   <style>
    body{

        background-image: url(../css/img/adminL.jpg);
    }
    </style>
        <h1>Admin Login</h1>
        <form method="POST" action="">
            <div class="form-control">
                <input name="email" id="email" type="text" required />
                <label>Your Email</label>
            </div>
            <div class="password">
                <input name="password" id="password" type="password" required />
                <label>Your Password</label>
            </div>
            <input class="btn" id="submit" name="submit" type="submit" value="Log in"  />
        </form>
    </div>
  <?php
 
 
      $host="localhost";
      $username="root";
      $password="";
      $database="ecom";
      $conn=mysqli_connect($host,$username,$password,$database);

   
   if(!$conn)
   {
        die("Connect Failed :".mysqli_connect_error());

   }

 else if(isset($_POST['submit']))
   {
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    

   $sql_query = "SELECT * FROM admin WHERE email = '$email' ";
   $pass = "SELECT * FROM admin WHERE password = '$password' ";
   $name="SELECT name FROM admin WHERE email='$email'";
   $id="SELECT id FROM admin WHERE password= '$password'";

   $result=$conn->query($name);
   if(!$result){
    die("Query failed:".$conn->error);
   }
   while($row=$result->fetch_assoc()){
    $username=$row['name'];
   }
   
   $query=mysqli_query($conn,$sql_query);
   $p_pass =mysqli_query($conn,$pass);
   $id_pass =mysqli_query($conn,$id);

   $email_count=mysqli_num_rows($query);
   $p_count=mysqli_num_rows($p_pass);
   $id=mysqli_num_rows($id_pass);


  
   if($email_count){
         $email_pass=mysqli_fetch_assoc($query);
         if($p_count){
               $_SESSION['message']="Welcome Admin!";    //------------------------all alerts are created from here
               $_SESSION['username']="$username";
               header('Location:./dashboard.php');
         }else{
            $_SESSION['message'] = "Invalid Password";
            header('Location:./adminLogin.php');
         }
    }else{
        $_SESSION['message'] = "Invalid Email";
        header('Location:./adminLogin.php');
   }
    mysqli_close($conn);
}
    

?> 
</body>
</html>
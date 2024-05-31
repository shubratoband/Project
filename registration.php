<!-- Follow the step to create a database in phpmyadmin panel
    1] open the phpnpmyadmin and create a new database name as "coffee"
    2] the inside the database create a table name is "registration" and add the 4 rows
    3] give the name of the rows name, email, password, cpassword and also set the datatype
-->
<?php
session_start();
if(isset($_SESSION['username']))

{
        $_SESSION['message']="You are already logged in";
        header('Location: index.php');
        exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="pagestyle" href="./css/material-kit.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Project/css/registration.css">
    <title>Document</title>
</head>
<body>


<style>
  input[type="submit"]
  {
      background: transparent;
      color: #e9f4fb;
      transition: .5s;
  }

  input[type="submit"]:hover
  {
      background: #44918B;
      color: #e9f4fb;
      transition: .5s;
  }
</style>



        <img src="./css/img/register.jpg" alt="images not found" width="100%" height="100%">
        <div class="container">
         <div class="center">
      
         <?php  if(isset($_SESSION['message']))
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


<style>
  input
  {
    color: white !important ;
  }
</style>

              <h1 style="font-size: 40px;" >Register</h1>
              <form method="post" action="">
              <div class="txt_field">
              <input id="name" type="text" name="name" required maxlength="20"/>
               <span></span>
              <label>Name</label>
                
                </div>
                <div class="txt_field">
                  <input id="email" type="email" name="email" required />
                  <span></span>
                  <label>Email</label>
                </div>
                <div class="txt_field">
                  <input id="password" type="password" name="password" required />
                  <span></span>
                  <label>Password</label>
                </div>
                <div class="txt_field">
                    <input id="cpassword" type="password" name="cpassword" required />
                    <span></span>
                    <label>Confirm Password</label>
                  </div>
                  <input id="submit" name="submit" type="submit" value="Sign Up"  style="font-weight: 300; margin-bottom:10px;"/>
                    <div class="signup_link" style="font-weight: 300;">
                      Have an Account ?  <a href="./login.php" style="font-weight:400; text-decoration:none; color: white;">Login Here</a>
                    </div>
            </form>
         </div>
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
      if(isset($_POST['submit']))
      {
           $name=$_POST['name'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $cpassword=$_POST['cpassword'];

           $check_name_query = "SELECT email FROM registration WHERE name = '$name' ";
           $check_name_query_run = mysqli_query($conn,$check_name_query);
       
           if(mysqli_num_rows($check_name_query_run) > 0)
           {
               $_SESSION['message'] = "Username already exists!";
               header('Location:./registration.php');
           }

           else{


            if(isset($_POST['submit']))
        {
           $name=$_POST['name'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $cpassword=$_POST['cpassword'];

           $check_email_query = "SELECT email FROM registration WHERE email = '$email' ";
           $check_email_query_run = mysqli_query($conn,$check_email_query);
       
           if(mysqli_num_rows($check_email_query_run) > 0)
           {
              $_SESSION['message'] = "Email already registered!";
              header('Location:./registration.php');
           } 

          else{
  
            if($password == $cpassword ) 
            {
             $sql_query="INSERT INTO registration(name,email,password,cpassword) VALUES ( '$name','$email','$password','$cpassword')";
            
            if(mysqli_query($conn,$sql_query))
            { 
              $_SESSION['message'] = "Registered Successfully!";
              header('Location:./registration.php');
            }

           }

           else
           {
            
            $_SESSION['message'] = "Password does not match!";
            header('Location:./registration.php');
            
          }

          }
                 
           mysqli_close($conn);
      }

    }
  }

   ?>
  
</body>
</html>
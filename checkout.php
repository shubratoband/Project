<?php
include('./function/authcode.php');
?>

<?php   
      if(!$conn)
      {
           die("Connect Failed :".mysqli_connect_error());
   
      }
      if($_SESSION['username']==null){
        echo"<script>
                 window.location.href='login.php';
                 </script>";
       }else{
         
      if(isset($_POST['ordered']))
      {
        $_SESSION['message']="Order Successfull";

        if(isset($_POST['removeCartItems']))
        {
          mysqli_query($conn,"delete from `cart`");
        }

         $name=$_POST['name'];
         $email=$_POST['email'];
         $address=$_POST['address'];
         $mobile_no=$_POST['mobile_no'];
         $city=$_POST['city'];
         $state=$_POST['state'];
         $zip=$_POST['zip'];

        $sql="INSERT INTO orders(name,email,address,mobile_no,city,state,zip)VALUES('$name','$email','$address','$mobile_no','$city','$state','$zip')";
         
         if(mysqli_query($conn,$sql))
         { 
           header('Location: checkout.php'); 
         }else{
           echo "error".$sql."". mysqli_error($conn);
           
         }
        
         mysqli_close($conn);
      }}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
    
  <form action="" method="POST">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST" action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
    
        <label for="fname"><i class="fa fa-user"></i>Name</label>

        <input type="text" id="fname" name="name" placeholder="John Doe">

           

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">


            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="at post belkhed" required>


            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="akola" required>


            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>

              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="444108" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Only C.O.D</h3>
            <label for="fname"></label>
            

            <label for="ccnum">Mobil No.</label>
            <input type="text" id="mobile" name="mobile_no" placeholder="1234567890" pattern="[0-9]{10}" required >
            <div class="row">
              <div class="col-50">

                <div class="container" style="border:2px solid #04AA6D; margin-bottom:10px; text-align:left;width:300px;">
              
                <label for="expyear" style="color:#04AA6D;"><h4>Products Name</h4></label>
                <?php $select_cart_products=mysqli_query($conn,"select * from `cart`");?>
                  <?php
            $num=1;
            $grand_total=0;
            while($display_cart_products=mysqli_fetch_assoc($select_cart_products))
            {
                ?>
                <?php
                $total=number_format($display_cart_products['product_price']*$display_cart_products['product_quantity'])
                ?>
                 <?php echo $num;echo "."; echo $display_cart_products['product_name'] ?><span>&nbsp;&nbsp;x <b>
                  <?php echo $display_cart_products['product_quantity']?></b></span>
                 <label for=""></label>
                <?php

            $grand_total=$grand_total+($display_cart_products['product_price']*$display_cart_products['product_quantity']); 
            $num++;
          };

          ?>
            
            <h4>Total Price:&nbsp;<?php  echo number_format($grand_total)?>/-</h4>
              
              
                </div>
                <div class="col-50">
                  
                </div>
              </div>
            </div>
            
          </div>
          <label> 
        </label>

        
        <input name="ordered" type="submit" value="Place an order | COD" class="btn" style="margin-left:750px;width:300px;">
        

        <?php
        ?>
        <input type="hidden" name="removeCartItems" href='cart.php?removeCartItems';>
        <?php
        ?>
      </form>
    </div>
  </div>
  
</div>








  </form>

</body>
</html>

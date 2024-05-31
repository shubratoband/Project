<?php
$host="localhost";
$username="root";
$password="";
$database="ecom";
$conn=mysqli_connect($host,$username,$password,$database);

if(isset($_POST['update']))
{
   $update_quantity=$_POST['update_quantity'];
   $update_id=$_POST['update_quantity_id'];
   
   $update_quantity_query=mysqli_query($conn,"update `cart` set 
   product_quantity=$update_quantity where id=$update_id");
   if($update_quantity_query)
   {
    header('location:cart.php');
   }
}  

if(isset($_GET['remove']))
{
  $remove_id=$_GET['remove'];
  // echo $remove_id;
  mysqli_query($conn,"delete from `cart` where id = $remove_id");
}

if(isset($_GET['removeAll']))
{
  mysqli_query($conn,"delete from `cart`");
  header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <!-- < src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <title>Cart</title>
    

</head>
<body>

<style>
  img
  {
    height: 150px;
    width: 150px;
  }
  </style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn-lg pl-15 ml-5" style="color: black;" href="index.php">Home </a>
      </li>
      
    </ul>
  </div>
</nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Cart</h1>
        </div>

        <div class="col-lg-9" style="margin-left:200px;">
 <table class="table text-center">
  <?php $select_cart_products=mysqli_query($conn,"select * from `cart`");
  $num=1;
  $grand_total=0;
  if(mysqli_num_rows($select_cart_products)>0)
  {
    echo "<thead>
    <th>Serial No.</th>
    <th>Product Name</th>
    <th>Product Image</th=>
    <th>Product Price</th=>
    <th>Product Quantity</th=>
    <th>Total</th=>
    <th>Delete</th=>
    </thead>";
    
while($display_cart_products=mysqli_fetch_assoc($select_cart_products))
{
  ?>

<tbody>
    <tr>
      <td><?php echo $num ?></td>
      <td><?php echo $display_cart_products['product_name'] ?></td>
      <td><img src="<?php echo $display_cart_products['product_img'] ?>" alt=""></td>
      <td><?php echo $display_cart_products['product_price'] ?></td>
      <td>
        <form action="" method="post">
          <input type="hidden" value="<?php echo $display_cart_products['id'] ?>" name="update_quantity_id">
          <div class="quantity_box">
          <input type="number" value="<?php echo $display_cart_products['product_quantity'] ?>" min="1" max="5" style="width: 80px; text-align:center;" name="update_quantity">
          <input type="submit" class="update_quantity" value="Update" name="update">
        </div>
        </form>
      </td>
      <td><?php echo $total=number_format($display_cart_products['product_price']*$display_cart_products['product_quantity'])?>Rs</td>
      <td>
        <a href="cart.php?remove=<?php echo $display_cart_products['id'] ?>"  
        onclick="return confirm('Are you sure to want to delete this product?')">
        <span class="material-symbols-outlined">
        delete
        </span>
        </a>
      </td>
    </tr>
  </tbody>

  <?php
  $num++;
  $grand_total=$grand_total+($display_cart_products['product_price']*$display_cart_products['product_quantity']);
}

  }else
  {
    ?>
    <h4 style="text-align:center;color:#414141;"><?php echo "Your cart is empty";?></h4>
   <?php
  }
  ?>
  

</table>

<!-- php query -->
<?php 

if($grand_total>0)
{
  ?>


  <?php
  echo "
  <div style='color:orangered;display:flex;margin-bottom:50px;'>
  <a href='./shop.php' style='text-decoration:none;'><h6>Continue Shopping</h6></a>
  <h5 style='margin-left:300px;color:green;'>Grand Total: <span>$grand_total</span>/-</h5>
  <a href='cart.php?removeAll' onclick='return confirm('are you sure to want to  delete all products?')'>
  <i class='fa-solid fa-trash' style='margin-left:40px;color:red;'>Delete All</i></a>
  <a href='checkout.php' name='checkout_btn' style='margin-left:40px;text-decoration:none;'><h6>Proceed To Checkout</h6></a>"
  ?></div>



</div>
<?php


}else
{
  echo "";
}

?>

   
<script src="https://kit.fontawesome.com/eb62b10a2e.js" crossorigin="anonymous"></script>
      

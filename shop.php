<?php 
include('./function/authcode.php');
?>

<?php

if(isset($_POST['add_to_cart']))
    {
        $product_name=$_POST['product_name'];
        $product_img=$_POST['product_img'];
        $product_price=$_POST['product_price'];
        $company_name=$_POST['company_name'];

        $product_quantity=1;

        //check the product if it already exists
        $select_query = mysqli_query($conn,"select product_name from cart where product_name='$product_name'");
        if(mysqli_num_rows($select_query)>0)
        {
            $_SESSION['message']="Product already exists";
        }
        else{
            $cart_query=mysqli_query($conn,"insert into `cart` (product_name,product_price,product_img,company_name,product_quantity)values('$product_name','$product_price','$product_img','$company_name',$product_quantity)");
            $_SESSION['message']="Product added to cart !!";
        
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix</title>
    <link rel="stylesheet" href="./css/style.css">
    <link id="pagestyle" href="./css/material-kit.css" rel="stylesheet" />


</head>

   <?php
    if($_SESSION['username'] == null)
    {
        header('Location:login.php');
        $_SESSION['message'] = "Log in to continue";
    }
    ?>


    <?php include('function/shop2.php'); ?>
   
    


        <section class="page-header" id="shop-header">
            <h2 style="color: lightblue;">#stayhome</h2>
            <p style="color: lightblue;">Enjoy Shopping</p>        
        </section>


    <!-- -----------------1st Row---------------------- -->

            <section  class="section-p1" id="products" >
            <?php $select_products=mysqli_query($conn,"select * from `products`"); 
               if(mysqli_num_rows($select_products)>0)
               {
                   while($fetch_product=mysqli_fetch_assoc($select_products))
                   {
                       ?>
                       <div class="pro-container">
                           <form method="post" action="">
                               <img src="<?php echo $fetch_product['img'] ?>" alt="">
                               <div class="des">
                                   <p><?php echo $fetch_product['company_name']?></p>
                                   <h6><?php echo $fetch_product['product_name'] ?></h6>
                                    <i style="top:5px;" class="fas fa-star"></i>
                                     <i style="top:5px;" class="fas fa-star"></i>
                                     <i style="top:5px;" class="fas fa-star"></i>
                                     <i style="top:5px;" class="fas fa-star"></i>
                                     <i style="top:5px;" class="fas fa-star"></i>
                                        <h5><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $fetch_product['d_price'] ?></h5>
                                        <del><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $fetch_product['o_price'] ?></del>
                                        <input type="hidden" name="product_name"    value="<?php echo $fetch_product['product_name']?>">
                                        <input type="hidden" name="company_name"    value="<?php echo $fetch_product['company_name']?>">
                                        <input type="hidden" name="product_img"     value="<?php echo $fetch_product['img']?>">
                                        <input type="hidden" name="product_price"   value="<?php echo $fetch_product['d_price']?>">
                                        <span style="margin-left:50px; margin-bottom:10px;"><input style="padding: 10px;color:black;background-color:white; border:2px solid orange; border-radius:10px;" type="submit" class="cart_btn" name="add_to_cart" value="Add To Cart"></span>
                                        <div class="star">
                                        </div>
                                        </div>
                                    </div>
                                    </form>
                                    <?php
                    }
                    
                } 
                else
                {
                    echo "no products available";
                }
                ?>

                </section>
               <!-- ')
            });  
            }
        });
    } -->
 </script>

 <footer class="foot" style="margin-top: 100px;">
     
     <div style="margin-top: 60px;">
         <h4>Links</h4>
     <div class="links">
     <a href="./index.php">Home</a>
     <a href="./shop.php">Shop</a>
     <a href="./about.php">About</a>
     <a href="./contact.php">Contact</a>
 </div>
     </div>
     
     <div>
         <h4>About</h4>
         <div class="links">
     <a href="./about.php">About us</a>
     <a href="./contact.php">Contact us</a>
     </div>
     </div>

     <div style="margin-bottom: 30px;">
         <h4>Contact</h4>
         <div class="links">
             <h6 style="font-size: 15px; color: #949494;">Address: <a href="#">Saraswati College,Shegaon</a></h6>
     <h6 style="font-size: 15px; color: #949494; margin-top: 5px;">Phone:<a href="">+91000333344</a></h6>
     </div>
     </div>
     

     <div class="footer"><p> Copyright  &copy; Phoenix 2024-25</p></div>
     
 </footer>

<script src="https://kit.fontawesome.com/eb62b10a2e.js" crossorigin="anonymous"></script>
<script src="alert.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


</body>
</html>
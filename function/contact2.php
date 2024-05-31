<?php
if(isset($_SESSION['username']))
{
?>

    <div class="nav">
            
            <a href="#"><img src="./css/img/logo.png" alt=""></a>

            <ul>

            <style>
                .nav {
                    display: flex;
                    justify-content: space-around;
                }
            </style>
            <ul>
                <a href="./index.php"><li>Home</li></a>
                <a href="./shop.php"><li>Shop</li></a>
                <a href="./about.php"><li>About</li></a>
                <a href="./contact.php"><li class="active">Contact</li></a>
                
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <strong><?=$_SESSION['username']?></strong> 
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
    </div>

    <?php
    $select_product=mysqli_query($conn,"select * from `cart`") or die('query failed');
    $count_products=mysqli_num_rows($select_product);
    ?>

    <a href="./cart.php" id="bag"><i class="fa-solid fa-bag-shopping"><span><sup><?php echo $count_products;?></sup></span></i></a>


        </div>
        
  </button>

  <?php
}

else{

    ?>

            <style>
                .nav {
                    display: flex;
                    justify-content: space-around;
                }
            </style>


 <div class="nav">
            
            <a href="#" style="margin-right:500px"><img src="./css/img/logo.png" alt=""></a>
            
            <ul style="margin-right:100px">
                <a href="./index.php"><li>Home</li></a>
                <a href="./shop.php"><li>Shop</li></a>
                <a href="./about.php"><li>About</li></a>
                <a href="./contact.php"><li class="active">Contact</li></a>
                <a href="./login.php"><li>Login</li></a>

            </ul>
            </div>

<?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

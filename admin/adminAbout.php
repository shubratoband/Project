<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix</title>
    <link rel="stylesheet" href="../css/style.css">
    <link id="pagestyle" href="../css/material-kit.css" rel="stylesheet" />

    
</head>
<body>

<?php include('../function/authcode.php'); ?>


      <?php
        if(isset($_SESSION['username']))
    {
    ?>

    <div class="nav">
            
            <a href="#"><img src="../css/img/logo.png" alt=""></a>

            <ul>

            <style>
                .nav {
                    display: flex;
                    justify-content: space-around;
                }
            </style>
            <ul>
                <a href="./adminIndex.php"><li>Home</li></a>
                <a href="./adminShop.php"><li>Shop</li></a>
                <a href="./adminAbout.php"><li class="active">About</li></a>
                <a href="./adminContact.php"><li>Contact</li></a>
                
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <strong><?=$_SESSION['username']?></strong> 
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            </ul>
    </div>

    <?php
    $select_product=mysqli_query($conn,"select * from `cart`") or die('query failed');
    $count_products=mysqli_num_rows($select_product);
    ?>

    <a href="../cart.php" id="bag"><i class="fa-solid fa-bag-shopping"><span><sup><?php echo $count_products;?></sup></span></i></a>


        </div>
        
  </button>

  <?php
}
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 



        <section class="page-header" id="about-header">
            <h2 style="color: lightblue;">#aboutus</h2>
            <p style="color: lightblue;">Who we are?</p>        
        </section>

        <section class="about" class="section-p1">
                <img src="../css/img/about/a6.jpg" alt="" >

                <div class="about-us">
                    <p>At <span style="color: lightgreen; font-weight: 700">Phoenix</span>, we pride ourselves on offering an extensive and diverse product selection that caters to every taste, preference, and lifestyle. Explore products ensuring there's something for everyone. Whether you're searching for the latest fashion trends.</p>
                </div>
        </section>

        <section class="about-video">
            <h1>Download Our App</h1>
            <video autoplay loop  src="../css/img/about/1.mp4"></video>
        </section>


    <!-- -----------------1st Row---------------------- -->


        <footer class="foot" style="margin-top: 100px;">
            
    <div style="margin-top: 60px;">
        <h4>Links</h4>
    <div class="links">
    <a href="./adminIndex.php">Home</a>
    <a href="./adminShop.php">Shop</a>
    <a href="./adminAbout.php">About</a>
    <a href="./adminContact.php">Contact</a>
</div>
    </div>
    
    <div>
        <h4>About</h4>
        <div class="links">
    <a href="./adminAbout.php">About us</a>
    <a href="./adminContact.php">Contact us</a>
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
 <script src="script.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>
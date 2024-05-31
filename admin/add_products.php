 <?php
  include("../function/authcode.php");
  $host="localhost";
  $username="root";
  $password="";
  $database="ecom";
  $conn=mysqli_connect($host,$username,$password,$database);
  ?>

<!DOCTYPE html>
<html lang="en">
  
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" type="image/png" href="../css/img/logo.png">

<title>
  
   Admin Panel

</title>


<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">


<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

 <!-- Altertify JS -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>

  </head>



  <body class="g-sidenav-show  bg-gray-100">
 
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="../css/img/logo.png" style="width: 50px; height: 100px; " alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">       
  
  <li class="nav-item">
    <a class="nav-link text-white " href="./dashboard.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
      
      <span class="nav-link-text ms-1">Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="./users.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">groups</i>
        </div>
      
      <span class="nav-link-text ms-1">Users</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="./products.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">groups</i>
        </div>
      
      <span class="nav-link-text ms-1">Products</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-white " href="./add_products.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">devices</i>
        </div>
      
      <span class="nav-link-text ms-1">Add Product</span>
    </a>
  </li>

  

  
  <li class="nav-item">
    <a class="nav-link text-white " href="./orders.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">shopping_cart</i>
        </div>
      
      <span class="nav-link-text ms-1">Orders</span>
    </a>
  </li>


  <li class="nav-item" style="margin-top:25vh;">
    <a class="nav-link text-white " href="./adminIndex.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">arrow_back</i>
        </div>
      
      <span class="nav-link-text ms-1">Home</span>
    </a>
  </li>
  
  </aside>

        <main class="main-content border-radius-lg ">
                         
  <div class="row">
    <div class="col-lg-7 position-relative z-index-2">
      <div class="card card-plain mb-4">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
  </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-5 col-sm-5">


        <form action="../function/code.php" class="form-control-lg" method="POST" enctype="multipart/form-data">
    <div class="container" style="margin-left:200px; width:500px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
              <h4>Add Product</h4>
            </div>

        <div class="col-md-5" style="margin-left:100px;">
        <label for=""><h6>Upload Image</h6></label>
        <input type="text" name="Image" required placeholder="Image" class="form-input mb-2" value="./css/img/products/f1.jpg"> 
        <!-- <input type="file"value="<img src='../css/img/pr' alt=''>"> -->
        </div>
             
        <div class="col-md-5" style="margin-left:100px;">
        <label for=""><h6>Company_Name</h6></label>
        <input type="text" required placeholder="Enter Company Name" class="form-input mb-2" name="Company_Name">
        </div>
        
        <div class="col-md-5" style="margin-left:100px;">
        <label for=""><h6>Product_Name</h6></label>
        <input type="text" required placeholder="Enter Product Name" class="form-input mb-2" name="Product_Name">
        </div>

        <div class="col-md-5" style="margin-left:100px;">
        <label for=""><h6>Discounted_Price</h6></label>
        <input type="text" required placeholder="Enter Selling Price" class="form-input mb-2" name="P_Price">
        </div>

        <div class="col-md-5" style="margin-left:100px;">
        <label for=""><h6>Original_Price</h6></label>
        <input type="text" required placeholder="Enter Original Price" class="form-input mb-2" name="A_Price">
        </div>

        <div>
            <button class="btn btn-primary ml-3" name="add-product-btn" style="margin-left:150px;">Save</button>
        </div>
            </div>
            </div>
        </div>
    </div>
</div>

</form>



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


             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
             <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </body>

</html>

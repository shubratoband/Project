  <?php 
  session_start();

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
    <h2 class="font-weight-bolder mb-0">Website Data</h2>
  </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-5 col-sm-5">

<!-- ------------------------------------------------------------------------------------------------------------ -->


    <div class="card  mb-2" style="height: 150px;">
    <div class="card-header p-3 pt-2">
    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">person</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize">Total Users</p>
      <h4 class="mb-0">
        <?php                                                           //Query to display total users
        $user_query="SELECT * FROM registration";
        $user_query_run=mysqli_query($conn,$user_query);

        if($result=mysqli_num_rows($user_query_run))
        {
          echo '<h4 class="mb-0">'.$result.'</h4>';

        }
        else{
          echo '<h4 class="mb-0">No Data Available</h4>';
        }
        ?>
      </h4>
    </div>
  </div>

  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
  </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------ -->


    <div class="card  mb-2" style="height: 150px; margin-top: 100px;">
    <div class="card-header p-3 pt-2">
    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">dashboard</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize">Total Products</p>
      <h4 class="mb-0">
      <?php                                                           //Query to display total users
        $user_query="SELECT * FROM products";
        $user_query_run=mysqli_query($conn,$user_query);

        if($result=mysqli_num_rows($user_query_run))
        {
          echo '<h4 class="mb-0">'.$result.'</h4>';

        }
        else{
          echo '<h4 class="mb-0">No Data Available</h4>';
        }
        ?>
      </h4>
    </div>
  </div>

  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
  </div>
</div>

      </div>
      <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">

<!-- ------------------------------------------------------------------------------------------------------------ -->

        
        <div class="card  mb-2">
  <div class="card-header p-3 pt-2 bg-transparent">
    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">shopping_bag</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize ">Total Orders</p>
      <h4 class="mb-0 ">
      <?php                                                           //Query to display total users
        $user_query="SELECT * FROM orders";
        $user_query_run=mysqli_query($conn,$user_query);

        if($result=mysqli_num_rows($user_query_run))
        {
          echo '<h4 class="mb-0">'.$result.'</h4>';

        }
        else{
          echo '<h4 class="mb-0">No Data Available</h4>';
        }
        ?>
      </h4>
    </div>
  </div>

  <hr class="horizontal my-0 dark">
  <div class="card-footer p-3">
    <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
  </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------ -->

    <div class="card " style="height: 150px; margin-top: 100px;">
  <div class="card-header p-3 pt-2 bg-transparent">
    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">bar_chart</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize ">Brands</p>
      <h4 class="mb-0 ">500+</h4>
    </div>
  </div>

  <hr class="horizontal my-0 dark">
  <div class="card-footer p-3">
    <p class="mb-0 ">Just updated</p>
  </div>
</div>

<!-- -------------------------------------------------------------------------------------------------------------->


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>

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
  </body>

</html>

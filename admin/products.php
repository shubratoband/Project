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
        <div class="col-lg-5 col-sm-5">


    <div class="container" style="margin-left:120px; width:1000px;margin-top:50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
              <h4>Products</h4>
            </div>

        <table class="table table-light users" style="text-align:center; margin-bottom:0px;">
          <thead class="table-info">
            <td>Company</td>
            <td>Product</td>
            <td>Image</td>
            <td>Discounted Price</td>
            <td>Original   Price</td>
          </thead>
        </table>
    </div>
</div>

</form>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
    getdata();  
    });

    function getdata()
    {
        $.ajax({
            type: "get",
            url: "../jquery-crud/fetch-products.php",
            success: function (response) {
            $.each(response, function(key, value) {$('.users').append('<tbody>'+
                '<td>'+value['company_name']+'</td>\
                <td>'+value['product_name']+'</td>\
                <td><img style="width:100px; height:100px;" src=".'+value['img']+'";></td>\
                <td>'+value['d_price']+'</td>\
                <td>'+value['o_price']+'</td>\
              </tbody>\
                    ')
            });  
            }
        });
    }
 </script>





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

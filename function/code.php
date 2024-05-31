<?php
include('./myFun.php'); 

if(isset($_POST['add-product-btn']))
{
    // $img = $FILES['image']['name'];
    // $path = "../css/img/products";
    // $image_ext= pathinfo($image,PATHINFO_EXTENSION);
    
    $filename = $_POST['Image'];
    $company=$_POST['Company_Name'];
    $p_name=$_POST['Product_Name'];
    $d_price=$_POST['P_Price']; 
    $o_price=$_POST['A_Price'];

if($filename != "" &&  $company != "" && $p_name != "")
{

    $product_query = "INSERT INTO products(img,company_name,product_name,d_price,o_price) VALUES
    ('$filename','$company','$p_name','$d_price','$o_price')";
    
    $product_query_run= mysqli_query($conn,$product_query);

    if($product_query_run)
    {
        // move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

        redirect("../admin/add_products.php","Product Added Successfully");
    }
    else
    {
        redirect("../admin/add_products.php","Something went wrong!");
    }
}
else
{
    redirect("../admin/add_products.php","Enter required fileds");
}

}
?>
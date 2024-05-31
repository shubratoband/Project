<?php
   $conn= mysqli_connect("localhost","root","","ecom");

   $query= "SELECT * FROM orders";

   $query_run=mysqli_query($conn,$query);
   $result= [];
   if(mysqli_num_rows($query_run) > 0)
   {
        foreach($query_run as $row)
        {
            array_push($result,$row);
        }
        header('Content-type: application/json');
        echo json_encode($result);
   }

   else
   {
     echo $not_execute= "<h4>No record available</h4>";
   }
?>
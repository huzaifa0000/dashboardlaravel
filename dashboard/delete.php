<?php

include ('connect.php');

$pro_id=$_GET['pro_id'];

$query="delete from `customer` where C_id=$pro_id";
echo $query;
$result=mysqli_query($conn,$query);

if($result){
    
    header('Location:viewcustomer.php');
}
else
{
    echo "Not Deleted";
}



?>
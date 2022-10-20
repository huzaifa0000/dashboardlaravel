<?php

include ('connect.php');
$pid=$_GET['pro_id'];


$query="DELETE FROM `product` WHERE P_id=$pid";
$result=mysqli_query($conn,$query);

if($result){
    header('Location:viewproduct.php');
}
else
{
    echo "Not Deleted";
}




?>
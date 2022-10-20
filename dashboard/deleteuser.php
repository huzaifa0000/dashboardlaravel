<?php

include ('connect.php');

$pro_id=$_GET['pro_id'];

$query="delete from `signup` where id=$pro_id";

$result=mysqli_query($conn,$query);

if($result){
    
    header('Location:user.php');
}
else
{
    echo "Not Deleted";
}



?>
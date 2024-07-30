<?php

 $conn = new mysqli("localhost","root","","multi");
 if($conn){
    echo "Connection successfull!";
 }else{
    die(mysqli_error($conn));
 }
 

?>

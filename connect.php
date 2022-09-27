<?php

 $servername="localhost";
$username="root";
$password="";
$database="shalomdb";


$con=new mysqli($servername,$username,$password,$database);
if(!$con){
    die(mysqli_error($con));
}


?>
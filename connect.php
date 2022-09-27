<?php

 //$servername="localhost";
//$username="root";
//$password="";
//$database="shalomdb";

$severname='remotemysql.com';
$database='eaz1Ivi4PE';
$username='eaz1Ivi4PE';
$password='pgTGK9YvMB';

$con=new mysqli($servername,$username,$password,$database);
if(!$con){
    die(mysqli_error($con));
}


?>
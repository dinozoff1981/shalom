<?php

 //$servername="localhost";
//$username="root";
//$password="";
//$database="shalomdb";

$severname='remotemysql.com';

$username='eaz1Ivi4PE';
$password='pgTGK9YvMB';
$database='eaz1Ivi4PE';

$con=new mysqli($servername,$username,$password,$database);
if(!$con){
    die(mysqli_error($con));
}


?>
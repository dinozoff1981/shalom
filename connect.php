<?php

//$servername="localhost";
//$username="root";
//$password="";
//$database="shalomdb";

//$host='remotemysql.com';
//$db='eaz1Ivi4PE';
//$user='eaz1Ivi4PE';
//$pass='pgTGK9YvMB';
//$charset='utf8mb4';


//$dsn="mysql:host=$host;dbname=$db;charset=$charset";
//$con=new mysqli($servername,$username,$password,$database);
//if(!$con){
    //die(mysqli_error($con));
//}


$con=new mysqli("remotemysql.com","eaz1Ivi4PE","pgTGK9YvMB","eaz1Ivi4PE");
//$con=new mysqli("localhost","root","","shalomdb");

if(!$con){
    die('Connection Failed'. mysqli_connect_error($con));
}




?>
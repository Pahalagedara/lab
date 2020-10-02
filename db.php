<?php 
$DB_name="test";
$DB_username="root";
$DB_password="";
$DB_server="localhost";

try{
   $conn=new pdo("mysql:host=$DB_server;dbname=$DB_name",$DB_username,$DB_password);
   
}catch(Exception $e){
    echo $e;
    echo"error";
}

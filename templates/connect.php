<?php
// parameters for database connections 
$username = 'gbolly11';
$password = 'sammie';
$hostname = 'localhost';
$database = 'recipes_db';

// database connection
$connection = mysqli_connect($hostname,$username,$password,$database);

// check if there is a connection error
if(!$connection){
  echo 'could not connect' . mysqli_connect_error();  
}





?>
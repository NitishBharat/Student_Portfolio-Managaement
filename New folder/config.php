<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');   //name of db server
define('DB_USERNAME', 'root');      //default username of xampp
define('DB_PASSWORD', '');          //defaukt password
define('DB_NAME', 'login');         //name of database we want to use

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
else{
    //  echo 'Hello World';  if it is displayed then no error is shown.
}
?>

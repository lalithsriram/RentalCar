<?php 
 define('DB_SERVER', 'localhost:8080'); //database server url and port
 define('DB_USERNAME', 'root');  //database server username
//  define('DB_PASSWORD', 'root123'); //database server password
 define('DB_DATABASE', 'rental'); //where profile is the database 
 
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_DATABASE); 
?>
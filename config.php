<?php

session_start();
// connect ot database
$conn = mysqli_connect("localhost","root", "user123","blog_2_db");

if(!$conn){
    die("Error connecting to database: " . mysqli_connect_error());
}
// define global constants
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL','http://192.168.1.116/blog_2/');
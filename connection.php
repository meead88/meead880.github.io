<?php
$host="localhost";
$user="root";
$pass="";
$db="library";

$conn = mysqli_connect($host , $user , $pass , $db);

if($conn){
    echo "connection to database successful" ;
}
else{
    echo "check your DB connection";
}
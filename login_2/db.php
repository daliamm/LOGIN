<?php
$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$dbName="login2";
$conn=mysqli_connect($dbServername,$dbUsername,$dbpassword,$dbName);
if($conn){
    die("Connection failed:".mysqli_connect_error());
}
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "housing-management-system";

$conn = new mysqli("localhost", "root", "", "housing-management-system");
if(!$conn){
    echo "error";
}
?>
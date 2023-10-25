<?php 
// $conn = new PDO('mysql:host=localhost;dbname=scandiweb', 'root', '');
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn= new mysqli("localhost", "u503529497_malek", "Rima1198", "u503529497_sw");
if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

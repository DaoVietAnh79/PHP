<?php
$localhost ="localhost";
$databaseName = "wd18412_quanlyoto";
$user = "root";
$password="";

$conn = new PDO("mysql:host=$localhost;dbname=$databaseName", $user, $password);

if($conn){
    //echo "ket noi thanh cong";
}else {
    echo "ket noi k thanh cong";
}
?>
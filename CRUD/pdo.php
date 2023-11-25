<?php
    function connection() {
        $localhost = 'localhost';
        $dbname = 'demo';
        $user = 'root';
        $pass = '';
        $conn = new PDO ("mysql:host=$localhost; dbname=$dbname",$user, $pass);
        return $conn;
    }
    function getClass() {
        $connect = connection();
        $sql = "SELECT * FROM `class`";
        $kq = $connect->query($sql);
        $lissClass = $kq->fetchAll(PDO::FETCH_ASSOC);
        return $lissClass;
    }

    function insert($name) {
        $connect = connection();
        $sql = "INSERT INTO `class`(`name`) VALUES ('$name')";
        $kq = $connect->prepare($sql);
        $kq -> execute();
    }
    function update($id,$name) {
        $connect = connection();
        $sql = "UPDATE `class` SET `name` = '$name' WHERE id = $id";
        $kq = $connect->prepare($sql);
        $kq -> execute();
    }

    function delete($id) {
        $connect = connection();
        $sql = "DELETE FROM `class` WHERE `id` = '$id'";
        $kq = $connect->prepare($sql);
        $kq -> execute();
    }




?>
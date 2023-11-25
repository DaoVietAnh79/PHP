<?php
    function connection() {
        $localhost = 'localhost';
        $dbname = 'wd18412_quanlyoto';
        $user = 'root';
        $pass = '';
        $conn = new PDO ("mysql:host=$localhost; dbname=$dbname",$user, $pass);
        return $conn;
    }
    function getOto() {
        $connect = connection();
        $sql = "SELECT xe.id, `tenLoaiXe`, `xuatXu`, `mauSac`, `hinhAnh`, danhmuc.tenHangXe
        FROM xe JOIN danhmuc on xe.idDanhMuc = danhmuc.id;";
        $kq = $connect->query($sql);
        $lissOto = $kq->fetchAll(PDO::FETCH_ASSOC);
        return $lissOto;
    }

    function insert($name,$xuatXu, $tenHangXe, $mauSac, $img) {
        $connect = connection();
        $sql = "INSERT INTO `xe`(`tenLoaiXe`, `xuatXu`,`idDanhMuc`, `mauSac`, `hinhAnh`) VALUES ('$name','$xuatXu','$tenHangXe','$mauSac','$img')";
        $kq = $connect->prepare($sql);
        $kq -> execute();
    }
    function update($id,$name,$xuatXu,$tenHangXe,$mauSac,$img) {
        $connect = connection();
        if($img == null) {
            $sql = "UPDATE `xe` SET `id` = $id, `tenLoaiXe` = '$name', `xuatXu` = '$xuatXu', `idDanhMuc` = '$tenHangXe', `mauSac` = '$mauSac'
        WHERE id = $id";
        } else {
            $sql = "UPDATE `xe` SET `id` = $id, `tenLoaiXe` = '$name', `xuatXu` = '$xuatXu', `idDanhMuc` = '$tenHangXe', `mauSac` = '$mauSac', `hinhAnh` = '$img'
        WHERE id = $id";
        }
        $kq = $connect->prepare($sql);
        $kq -> execute();
    }

    function delete($id) {
        $connect = connection();
        $sql = "DELETE FROM `xe` WHERE `id` = '$id'";
        $kq = $connect->prepare($sql);
        $kq -> execute();
    }




?>
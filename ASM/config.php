<?php
function connection()
{
    $result = new PDO('mysql:host=localhost;dbname=product;charset=utf8', 'root', '');
    return $result;
};

function getProducts()
{
    try {
        $dbConnection = connection();

        // Chuẩn bị và thực thi truy vấn SQL
        $query = "SELECT * FROM listproduct"; 
        $statement = $dbConnection->prepare($query);
        $statement->execute();

        // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Lỗi: " . $e->getMessage();
        return array();
    }
}
function setLogin($user, $pass)
{
    $connect = connection();
    $query = "insert into account (username, password) values('$user', '$pass')";
    $stmt = $connect->prepare($query);
    $stmt->execute();
}
function checkLogin($user, $pass)
{
    $connect = connection();
    $query = "select * from account where username='$user' and password='$pass'";
    $stmt = $connect->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
function setProduct($masp, $tensp, $anhsp, $gia, $soluong, $thoigian)
{
    $connect = connection();
    $query = "insert into listproduct (masp,tensp,anhsp,gia,soluong,thoigian) values('$masp','$tensp','$anhsp','$gia','$soluong', '$thoigian')";
    $stmt = $connect->prepare($query);
    $stmt->execute();
}
function showProduct()
{
    $connect = connection();
    $query = "select * from listproduct";
    $stmt = $connect->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
function delete($masp)
{
    $connect = connection();
    $query = "delete from listproduct where masp='$masp'";
    $stmt = $connect->prepare($query);
    $stmt->execute();
}
function updateProduct($id, $masp, $tensp, $anhsp, $gia, $soluong,$thoigian)
{
    $connect = connection();
    $query = "update listproduct set id='$id', masp='$masp', tensp='$tensp', anhsp='$anhsp', gia='$gia', soluong='$soluong' ,thoigian='$thoigian'  where masp='$masp'";
    $stmt = $connect->prepare($query);
    $stmt->execute();
}
<?php
if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $database  = 'sanpham';
    $conn = mysqli_connect($database, $product_name, $price);

    // Thêm dữ liệu vào cơ sở dữ liệu (sử dụng MySQLi hoặc PDO)
    // ...

    header("Location: index.php"); // Chuyển hướng trở lại trang danh sách sản phẩm
    exit;
}
?>

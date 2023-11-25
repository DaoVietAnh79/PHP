<?php
include_once('config.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$format = "g:i:s a  d/m/y";
if (isset($_POST['submit']) && $_POST['submit']) {
    $time = date($format, time());
    $arr = [
        'id' => $_POST['id'],
        'masp' => $_POST['masp'],
        'tensp' => $_POST['tensp'],
        'anhsp' => $_FILES['anhsp'],
        'gia' => $_POST['gia'],
        'soluong' => $_POST['soluong']
    ];
    $error = [];
    foreach ($arr as $key => $value) {
        if (empty($value)) {
            $error["$key"] = 'Trường dữ liệu không được bỏ trống';
        }
    }
    if (empty($error)) {
        $path_file = "./img/" . $arr['anhsp']['name'];
        move_uploaded_file($arr['anhsp']['tmp_name'], $path_file);
        setProduct($arr['masp'], $arr['tensp'], $arr['anhsp']['name'], $arr['gia'], $arr['soluong'], $time);
        header('location:cart.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
    span {
        color: red;
    }
    </style>
</head>

<body>
    <h1>Thêm sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" placeholder="Id sản phẩm" name="id">
            <br>
            <span>
                <?php
                if (!empty($error['id'])) {
                    echo $error['id'];
                }
                ?>
            </span>
        </div>
        <div>
            <input type="text" placeholder="Mã sản phẩm" name="masp">
            <br>
            <span>
                <?php
                if (!empty($error['masp'])) {
                    echo $error['masp'];
                }
                ?>
            </span>
        </div>
        <div>
            <input type="text" placeholder="Tên sản phẩm" name="tensp">
            <br>
            <span>
                <?php
                if (!empty($error['tensp'])) {
                    echo $error['tensp'];
                }
                ?>
            </span>
        </div>
        <div>
            <input type="file" name="anhsp">
            <br>
            <span>
                <?php
                if (!empty($error['anhsp'])) {
                    echo $error['anhsp'];
                }
                ?>
            </span>
        </div>
        <div>
            <input type="number" placeholder="Giá sản phẩm" name="gia">
            <br>
            <span>
                <?php
                if (!empty($error['gia'])) {
                    echo $error['gia'];
                }
                ?>
            </span>
        </div>
        <div>
            <input type="number" placeholder="Số lượng" name="soluong">
            <br>
            <span>
                <?php
                if (!empty($error['soluong'])) {
                    echo $error['soluong'];
                }
                ?>
            </span>
        </div>
        <div>
            <input type="submit" value="Thêm" name="submit">
        </div>
    </form>
</body>

</html>
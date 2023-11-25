<?php
$masp = $_GET['sua'];
include_once 'config.php';
$connect = connection();
$query = "select * from listproduct where masp = '$masp'";
$stmt = $connect->prepare($query);
$stmt->execute();
$sp = $stmt->fetch();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$format = "g:i:s a  d/m/y";

if (isset($_POST['masp']) && $_POST['masp']) {
    $time = date($format, time());
    $arr = [
        'id' => $_POST['id'],  
        'masp' => $_POST['masp'],
        'tensp' => $_POST['tensp'],
        'gia' => $_POST['gia'],
        'soluong' => $_POST['soluong']
    ];


    if ($_FILES['anhsp']['name'] == "" || $_FILES['anhsp']['name'] == null) {
        $arr['anhsp']['name'] = $sp['anhsp'];
    } else {
        $arr['anhsp'] = $_FILES['anhsp'];
        $path_file = "./img/" . $arr['anhsp']['name'];
        move_uploaded_file($arr['anhsp']['tmp_name'], $path_file);
    }
    updateProduct($id['id'], $arr['masp'], $arr['tensp'], $arr['anhsp']['name'], $arr['gia'], $arr['soluong'], $time);
    header('location:admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sản phẩm</title>
    <link rel="stylesheet" href="style-button.css">
    <style>
        * {
            margin: 0 auto;
            padding: 0;
        }
        span {
            color: red;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            margin-top: 10px;
            font-size: 270%;

        }

        form {
            line-height: 40px;
            text-align: center;
        }
        input {
            line-height: 25px;
        }
        .container {
            border: 1px solid black;
            max-width: 350px;
            height: auto;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
    <h1>Sửa sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" placeholder="Id sản phẩm" name="id" value="1">

        </div>
        <div>
            <input type="text" placeholder="Mã sản phẩm" name="masp" value="<?php echo  $sp['masp'];?>">

        </div>
        <div>
            <input type="text" placeholder="Tên sản phẩm" name="tensp" value="<?php echo  $sp['tensp']; ?>">

        </div>
        <div>
            <input type="file" name="anhsp" value="<?php echo $sp['anhsp'] ?>">

        </div>
        <div>
            <input type="number" placeholder="Giá sản phẩm" name="gia" value="<?php echo  $sp['gia']; ?>">

        </div>
        <div>
            <input type="number" placeholder="Số lượng" name="soluong" value="<?php echo  $sp['soluong']; ?>">

        </div>
        <div>
            <input class="btn" type="submit" value="Cập Nhập" name="submit">
        </div>
    </form>
    </div>
</body>

</html>
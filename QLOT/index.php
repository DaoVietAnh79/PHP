<?php
    if (isset($_COOKIE['username'])) {
        echo 'Xin chào ' . $_COOKIE['username'];
        echo ' <a class="a" href="logout.php">Đăng xuất</a>';
    }else {
        echo '<a class="a" href="login.php">Đăng nhập</a>';
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <?php
        include 'pdo.php';
        
        $getOto = getOto();
        $a = 1;
    ?>
    <form action="index.php" method="POST">
        <h1>Bảng Ê Tô</h1>
        <table border>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Xuất xứ</th>
                <th>Màu sắc</th>
                <th>Hình ảnh</th>
                <th>Danh mục</th>
                <th>Sửa - Xóa</th>
            </tr>
            <tr>
                <?php foreach ($getOto as $value) : ?>
            <tr>
                <td><?= $a++ ?></td>
                <td><?= $value['tenLoaiXe'] ?></td>
                <td><?= $value['xuatXu'] ?></td>
                <td><input type="color" value="<?= $value['mauSac'] ?>"></td>
                <td><img class="img" src="images/<?=$value['hinhAnh']?> " alt=""></td>
                <td><?= $value['tenHangXe'] ?></td>
                <td>

                    <a href="edit.php?id=<?=$value['id']?>">Sửa</a> |
                    <a href="delete.php?id=<?=$value['id']?>"
                        onclick=" return confirm('Bạn có chắc chắn muốn xóa ? ')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </form>
    <button>
        <span class="circle1"></span>
        <span class="circle2"></span>
        <span class="circle3"></span>
        <span class="circle4"></span>
        <span class="circle5"></span>
        <span class="text"><a class="a" href="add.php">Thêm</a></span>
    </button>
</body>

</html>
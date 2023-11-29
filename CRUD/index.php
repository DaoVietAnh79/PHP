<?php
    session_start();
    if(isset($_SESSION['username'])) {
        echo 'Xin chào ' . $_SESSION['username'];
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
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php
        include 'pdo.php';
        $getClass = getClass();
    ?>
    <form action="index.php" method="POST">
        <h1>Bảng class</h1>
        <table border>
            <tr>
                <th>STT</th>
                <th>Lớp</th>
                <th>Sửa - Xóa</th>
            </tr>
            <tr>
                <?php foreach ($getClass as $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
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
        <span class="text"><a href="add.php">Thêm</a></span>
    </button>
</body>

</html>
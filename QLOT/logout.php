<?php
    if (isset($_COOKIE['username'])) {
        setcookie('username','', 0);
        header('location: index.php');
    }else {
        echo 'Bạn chưa đăng nhập';
    }
?>
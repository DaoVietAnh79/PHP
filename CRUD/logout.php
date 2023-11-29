<?php
    session_start();
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);
        header('location: index.php');
    }else {
        echo 'Bạn chưa đăng nhập';
    }
?>
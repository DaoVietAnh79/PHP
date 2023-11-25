<?php
session_start(); // Khởi động session

if (isset($_POST['deleteSession'])) {
    session_unset();    // Xóa tất cả các biến session
    session_destroy();  // Hủy session
    

} 
?>

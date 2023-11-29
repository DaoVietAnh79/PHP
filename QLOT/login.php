<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        if ($username == 'admin' && $pass == '123'){
            echo "Đăng nhập thành công";
            if(!isset($_COOKIE['username'])){
                setcookie('username', $username, time()+60*60*24);
                header('location: index.php');
            }else {
                echo 'Bạn chưa đăng xuất';
            }
        }else {
            echo "Sai tài khoản hoặc mật khẩu";
        }
    }

?>
<style>
form {
    line-height: 35px;
}

input {
    height: 25px;
}

.submit {
    text-align: center;
    border-radius: 5px;
    margin-left: 30px;
    margin-top: 10px;
}
</style>
<form action="login.php" method="post">
    <label for="">User Name</label>
    <input type="text" name="username">
    <br>
    <label for="">Pass Word</label>
    <input type="password" name="pass">
    <br>
    <input type="submit" name="submit" class="submit">
</form>
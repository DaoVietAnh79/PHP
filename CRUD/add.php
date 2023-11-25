<?php
    include 'pdo.php';
    $connect = connection();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        insert($name);
        header('location: index.php');
    }



?>
<form action="add.php" method="POST">
    <label for="">Thêm tên lớp: </label>
    <input type="text" name="name">
    <input type="submit" name="submit" value="Thêm">

</form>
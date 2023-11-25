<?php
    include 'pdo.php';
    $connect = connection();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if($id) {
            $sql = "SELECT * FROM class WHERE id = $id";
            try {
                $kq = $connect->query($sql);
                if($kq) {
                    $sv = $kq -> fetch(PDO::FETCH_ASSOC);
                    if($sv) {
                        $name = $sv['name'];
                    }
                }
            } catch (\Throwable $th) {
                echo "Không tìm thấy sinh viên";
                die();
            }
        }
    }
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        update($id,$name);
        header('location: index.php');
    }
?>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">    

    <label for="">Sửa tên lớp: </label>
    <input type="text" name="name" value="<?= $name ?>">
    <input type="submit" name="submit" value="Sửa">

</form>
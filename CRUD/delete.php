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
                        $id = $sv['id'];
                        delete($id);
                        header('location: index.php');
                    }
                }
            } catch (\Throwable $th) {
                echo "Không tìm thấy sinh viên";
                die();
            }
        }
    }
    // if(isset($_POST[''])){
    //     $name = $_POST['id'];
    //     delete($id);
    //     header('location: index.php');
    // }



?>
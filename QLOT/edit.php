<?php
    include 'pdo.php';
    $connect = connection();
    $option = "";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if($id) {
            $sql = "SELECT * FROM xe WHERE id = $id";
            try {
                $kq = $connect->query($sql);
                if($kq) {
                    $xe = $kq -> fetch(PDO::FETCH_ASSOC);
                    if($xe) {
                        $id = $xe['id'];
                        $name = $xe['tenLoaiXe'];
                        $xuatXu = $xe['xuatXu'];
                        $tenLoaiXe = $xe['tenLoaiXe'];
                        $tenHangXe = $xe['idDanhMuc'];
                        $mauSac = $xe['mauSac'];
                        $img = $xe['hinhAnh'];
                    }
                }
            } catch (\Throwable $th) {
                echo "Không tìm thấy xe";
                die();
            }
        }
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $tenHangXe = $_POST['idDanhMuc'];
        $xuatXu = $_POST['xuatXu'];
        $mauSac = $_POST['mauSac'];
        $img = basename($_FILES['img']['name']);

        $target_img = "images/";
        $target_file = $target_img . $img;
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        update($id, $name,$xuatXu, $tenHangXe, $mauSac, $img);
        header('location: index.php');
    }
    
    $sql = "SELECT * FROM danhmuc";
    $result = $connect->query($sql);
    $option="";
    if($result){
        $listdm = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($listdm as $item){
            $option .= '<option '.($item["id"] == $tenHangXe ? "selected":"").' value="'.$item["id"].'">'.$item["tenHangXe"].'</option>';
        }
    }



?>
<style>
    form {
        line-height: 40px;
        margin-left: 20px;
    }
    input {
        height: 30px;
    }
    label {
        margin-right: 10px;
    }
    span {
        color: red;
    }
    img {
        border-radius:15px ;
    }
</style>
<h2>Sửa xe</h2>
<form action="edit.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$id?>">
    <label for="">Tên xe: </label>
    <input type="text" name="name" value="<?=$name?>"> <br>
    
    <label for="">Xuất xứ: </label>
    <input type="text" name="xuatXu" value="<?=$xuatXu?>"> <br>

    <label for="" >Danh mục</label>
    <select name="idDanhMuc">
        <?php echo $option;?>
    </select>
    <br>
    
    <label for="">Màu sắc: </label>
    <input type="color" name="mauSac" value="<?=$mauSac?>"> <br>

    <label for="">Hình ảnh: </label>
    <span><img src="images/<?=$img?>" alt="Uploaded Image" id="uploaded-image" height="100px" width="170px"></span>
    <br>

    <input type="file" name="img" value="<?=$img?>" id="upload-input"> <br>
    <input type="submit" name="submit" value="Sửa">

</form>
<script>
    const uploadInput = document.getElementById('upload-input');
    const uploadedImage = document.getElementById('uploaded-image');
    uploadInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        uploadedImage.src = URL.createObjectURL(file);;
    });
</script>
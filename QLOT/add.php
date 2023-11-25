<?php
    include 'pdo.php';
    $connect = connection();
    $isCheck = true;
    $err = '';
   
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $tenHangXe = $_POST['tenHangXe'];
        $xuatXu = $_POST['xuatXu'];
        $mauSac = $_POST['mauSac'];
        $img = basename($_FILES['img']['name']);

        $target_img = "images/";
        $target_file = $target_img . $img;
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

        if(empty($name) && empty($xuatXu)) {
            $err = '<br>'.'Không được bỏ trống';
            $isCheck = false;
        } 
        if ($isCheck) {
            insert($name,$xuatXu, $tenHangXe, $mauSac, $img);
            header('location: index.php');
        }



    }
    $sql = "SELECT * FROM danhmuc";// viết ra 1 câu sql lấy danh sách lớp
    $result = $connect->query($sql);//thực hiện câu sql
    $option="";
    if($result){//kiểm tra có thành công hay không
        $listdanhmuc = $result->fetchAll(PDO::FETCH_ASSOC);//gán gt vào 1 biến
        if($listdanhmuc){
            //echo "<pre>";
            // print_r($listLop);
            foreach($listdanhmuc as $item){
                // print_r($item);
            $option .= '<option value="'.$item["id"].'">'.$item["tenHangXe"].'</option>';
            }

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
        border-radius: 15px;
    }
</style>
<h2>Thêm xe</h2>
<form action="add.php" method="POST" enctype="multipart/form-data">
    <label for="">Tên xe: </label>
    <input type="text" name="name">
    <span><?=$err?></span>
    <br>
    <img src="img" alt="">
    <label for="">Xuất xứ: </label>
    <input type="text" name="xuatXu"> 
    <span><?=$err?></span>
    <br>

    <label for="" >Danh mục: </label>
    <select name="tenHangXe">
        <?=$option?>
    </select>
    <br>
    <label for="">Màu sắc: </label>
    <input type="color" name="mauSac">
    <br>

    <label for="">Hình ảnh: </label>
    <img src="" alt="Uploaded Image" id="uploaded-image" height="100px" width="170px"><br>
    <input type="file" name="img" id="upload-input">
    <span><?=$err?></span>
    <br>
    <input type="submit" name="submit" value="Thêm">
</form>
<script>
    const uploadInput = document.getElementById('upload-input');
    const uploadedImage = document.getElementById('uploaded-image');
    uploadInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        uploadedImage.src = URL.createObjectURL(file);;
    });
</script>
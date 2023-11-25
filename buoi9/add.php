<?php
 require_once("connect.php");
 $tenLoaiXe='';
 $xuatXu='';
 $idDanhMuc='';
 $mauSac='';
 $hinhAnh='';

 $errTenLoaiXe='';
 $errXuatXu='';
 $errIdDanhMuc='';
 $errMauSac= '';
 $errHinhAnh= '';
 $isCheck = true;

 $sql = "SELECT * FROM danhmuc";
 $result = $conn->query( $sql);
 $option="";

 if(isset($_POST["submit"])){
    $tenLoaiXe = trim($_POST["tenLoaiXe"]);
    $xuatXu = trim($_POST["xuatXu"]);
    //$idDanhMuc = $_POST["idDanhMuc"];
    $mauSac = $_POST["mauSac"];
    $hinhAnh =$_POST["hinhAnh"];

    
    if(empty($tenLoaiXe)){
        $errTenLoaiXe ="Người dùng nhập lọai xe";
        $isCheck= false;
    }
    if(empty($xuatXu)){
        $isCheck= false;
        $errXuatXu ="Người dùng nhập xuất xứ";
    }
    if(empty($mauSac)){
        $isCheck= false;
        $errMauSac ="Người dùng nhập màu sắc";
        
    }
    if(empty($hinhAnh)){
        $isCheck= false;
        $errHinhAnh ="Người dùng nhập hình ảnh";
        
    if($isCheck){
        $sql = "INSERT INTO xe(tenLoaiXe,xuatXu,idDanhMuc,mauSac,hinhAnh)
        VALUE ('$tenLoaiXe','$xuatXu','$mauSac',          "
    }
    
        if($result){
            header("Location: index.php");
        }else{
            echo "thêm thất bại";
        }
    
    } 
 }


?>

<form action="add.php" method="post"> 
    <label for="">Tên Loại Xe</label>
    <input type="text" name="tenLoaiXe" value="<?= $tenLoaiXe?>">
    <span style="color:red"><?= $errTenLoaiXe; ?></span><br>

    <label for="">Xuất Xứ</label>
    <input type="text" name="xuatXu" value ="<?= $xuatXu?>">
    <span style="color:red"><?= $errXuatXu; ?></span><br>

    <label for="">Màu Sắc</label>
    <input type="color" name="mauSac" id="" value="<?= $mauSac?>">
    <span style="color:red"><?= $errMauSac; ?></span><br>
    
    <label for="">Hình Ảnh</label>
    <input type="file" name="hinhAnh" id="" value="<?= $hinhAnh?>">
    <span style="color:red"><?= $errHinhAnh; ?></span><br>


    <label for="">Danh Mục</label>
    <select name="idDanhMuc" id="">
        <?php echo $option;?>
    </select><br>

    <input type="submit" value="Gửi" name ="submit">

</form>
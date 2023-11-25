<?php
include("connect.php");
$hang='';
$sql = "SELECT xe.id, tenLoaiXe,xuatXu,idDanhMuc,mauSac,hinhAnh, danhmuc.tenHangXe FROM xe INNER JOIN danhmuc ON xe.idDanhMuc = danhmuc.id ";
$result = $conn->query($sql);

if($result){
    $listxe = $result->fetchAll(PDO::FETCH_ASSOC);
    if($listxe){
        echo "<pre>";
        print_r($listxe);
        foreach ($listxe as $item){
        $hang .= '
        <tr>
        <td>'.($item['id']+1).'</td>
        <td>'.$item["tenLoaiXe"].'</td>
        <td>'.$item["xuatXu"].'</td>
        <td>'.$item["mausac"].'</td>
        <td>'.$item["hinhAnh"].'</td>
        <td><a href="edit.php?id='.$item["id"].'">Sua</a></td>
        </tr>';
        
        }
    }
}
?>

<button> <a href="add.php" style="text-decoration"></a>  </button>
<table border>
    <thead>
        <th>STT</th>
        <th>Ten loai Xe</th>
        <th>Xuat Xu</th>
        <th>Mau Sac</th>
        <th>Hinh Anh</th>
        <th></th>
    </thead>
    <tbody>
        <?php
        echo $hang;
        ?>
    </tbody>
</table>
<?php
include_once 'config.php';
if (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    delete($id);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .fa-solid,
      .fa-wrench {
        padding: 5px;
      }
    </style>

    <title>Vanh Store</title>
  </head>
  <body>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== CART ===============-->
      <section class="cart section--lg container">
        <div class="table__container">
          <table class="table">
            <tr>
              <th>Hình Ảnh</th>
              <th>Tên Sản Phẩm</th>
              <th>Giá</th>
              <th>Số Lượng</th>
              <th>Tổng Tiền</th>
              <th>Sửa-Xóa</th>
            </tr>

            <tr>
            <?php
                $arr = showProduct();
                $tongTien = 0;
                $phiVanChuyen = 20;
                $tongTienHang = 0;
                foreach ($arr as $value) :
                  $tongTien = (int)$value['soluong'] * (int)$value['gia'];
                  $tongTienHang += $tongTien;
                  $thanhTien = $tongTienHang + $phiVanChuyen;

                ?>
                    <tr>
                      <td><img src="./img/<?php echo $value['anhsp']  ?>" alt=""></td>
                      <td>
                            <p><?php echo $value['tensp']  ?></p><span>Cập nhập <?php echo $value['thoigian']  ?></span>
                        </td>
                        <td>₫<?php echo $value['gia']  ?></td>
                        <td><?php echo $value['soluong']  ?></td>
                        <td>₫<?php echo $tongTien  ?></td>
                        <td>
                            <a href="./update.php?sua=<?php echo $value['masp'] ?>"> <i class="fa-solid fa-wrench"></i></a>
                            <a onclick="return confirm('Bạn chắc chắn muốn xoá sản phẩm này không?')" href="?xoa=<?php echo $value['masp'] ?>"> <i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    
                <?php endforeach ?>
            </tr>
          </table>
        </div>

        <div class="cart__actions">
          <a href="./Formadd.php" class="btn flex btn--md">
            <i class="fi-rs-shuffle"></i> Thêm sản phẩm
          </a>

          <a href="./shop.php" class="btn flex btn--md">
            <i class="fi-rs-shopping-bag"></i>  Tiếp tục mua
          </a>
        </div>

        <div class="divider">
          <i class="fi fi-rs-fingerprint"></i>
        </div>

        <div class="cart__group grid">
          <div class="cart__total">
            <h3 class="section__title">Tổng Tiền </h3>

            <table class="cart__total-table">
              <tr>
                <td><span class="cart__total-title">Tổng</span></td>
                <td><span class="cart__total-price">₫<?php 
                  echo $tongTienHang;
                ?></span></td>
              </tr>

              <tr>
                <td><span class="cart__total-title">Phí Vận Chuyển</span></td>
                <td><span class="cart__total-price">₫20.000</span></td>
              </tr>

              <tr>
                <td><span class="cart__total-title">Tổng Cộng</span></td>
                <td><span class="cart__total-price">₫<?php 
                  echo $thanhTien;
                ?></span></td>
              </tr>
            </table>

            <a href="checkout.html" class="btn flex btn-md">
              <i class="fi fi-rs-box-alt"></i> Tiến hành kiểm tra
            </a>
          </div>
        </div>
      </section>

    </main>
    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>

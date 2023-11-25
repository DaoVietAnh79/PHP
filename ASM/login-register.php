<?php
include_once('./config.php');
if (isset($_POST['submit']) && $_POST['submit']) {
    $arr = [
        'user' => $_POST['user'],
        'pass' => $_POST['pass'],
    ];
    $error = [];
    foreach ($arr as $key => $value) {
        if (empty($value)) {
            $error["$key"] = 'Trường dữ liệu không được bỏ trống';
        }
    }
    if (!empty(checkLogin($arr['user'], $arr['pass']))) {
        header('location:index.php');
    }
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

    <title>Vanh Store</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header">
      <div class="header__top">
        <div class="header__container container">
          <div class="header__contact">
            <span> (+84) 0339 125 387</span>
            <span> Hưng Yên</span>
          </div>
          <p class="header__alert-news">
            Ưu đãi siêu giá trị - Tiết kiệm nhiều hơn với phiếu giảm giá
          </p>
          <a href="login-register.php" class="header__top-action">
            Đăng Nhập / Đăng Ký
          </a>
        </div>
      </div>

      <nav class="nav container">
        <a href="index.php" class="nav__logo">
          <img src="assets/img/Va store.jpg" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php" class="nav__link active-link">Trang Chủ</a>
            </li>

            <li class="nav__item">
              <a href="shop.php" class="nav__link">Shop</a>
            </li>

            <li class="nav__item">
              <a href="accounts.php" class="nav__link">Hồ sơ cá nhân</a>
            </li>

            <li class="nav__item">
              <a href="submit-register.php" class="nav__link">Đăng Ký</a>
            </li>

            <li class="nav__item">
              <a href="login-register.php" class="nav__link">Đăng Nhập</a>
            </li>
          </ul>

          <div class="header__search">
            <input type="text" placeholder= "Nhập đồ bạn muốn tìm..." class="form__input"
            />
            <button class="search__btn">
              <img src="assets/img/search.png" alt="">
            </button>
          </div>
        </div>

        <div class="header__user-actions">
          <a href="wishlist.php" class="header__action-btn">
            <img src="assets/img/icon-heart.svg" alt="">
            <span class="count">3</span>
          </a>

          <a href="cart.php" class="header__action-btn">
            <img src="assets/img/icon-cart.svg" alt="">
            <span class="count">3</span>
          </a>
        </div>
      </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.html" class="breadcrumb__link">Trang Chủ</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Đăng Nhập / Đăng Ký</span></li>
        </ul>
      </section>

      <!--=============== LOGIN-REGISTER ===============-->
      <section class="login-register section--lg">
        <div class="login-register__container container grid">
          <div class="login">
          <?php
            if (isset($_POST['submit'])) {
                $tmp = checkLogin($arr['user'], $arr['pass']);
                if (empty($tmp)) {
                    echo '<h1>Sai tài khoản mật khẩu</h1>';
                }
            }
          ?>
            <h3 class="section__title">Đăng Nhập</h3>

            <form action="" method="post" class="form grid">
              <input type="text" name="user" placeholder="Nhập tài khoản của bạn" class="form__input">
              <span>
                <?php
                if (!empty($error['user'])) {
                    echo '<span>' . $error['user'] . '</span>';
                }
                ?>
            </span>
              <input type="password" name="pass" placeholder="Nhập password của bạn" class="form__input">
              <span>
                <?php
                    if (!empty($error['pass'])) {
                        echo '<span>' . $error['pass'] . '</span>';
                    }
                ?>
            </span>
              <div class="form__btn">
                <button type="submit" class="btn" name="submit" value="submit">Đăng Nhập</button>
              </div>
            </form>

          </div>

          
        </div>
        
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="assets/img/icon-email.svg" alt="" class="newsletter__icon">
            Đăng ký để nhận thêm nhiều ưu đãi
          </h3>

          <p class="newsletter__description">
            ...và nhận phiếu giảm giá 35% cho lần mua sắm đầu tiên.
          </p>

          <form action="" class="newsletter__form">
            <input type="text" placeholder="Nhập email của bạn" class="newsletter__input">
            <button type="submit" class="newsletter__btn">ĐăngKý</button>
          </form>
        </div>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer container">
      <div class="footer__container grid">
        <div class="footer__content">
          <a href="index.html" class="footer__logo">
            <img src="assets/img/Va store.jpg" alt="" class="footer__logo-img">
          </a>

          <h4 class="footer__subtitle">Thông tin liên hệ</h4>

          <p class="footer__description">
            <span>Địa chỉ:</span> 51 Ngọa Long, Minh Khai, Bắc Từ Liêm, Hà Nội
          </p>

          <p class="footer__description">
            <span>Sđt:</span> (+84) 339 125 387 - 395 779 298
          </p>

          <p class="footer__description">
            <span>Thời gian:</span> 08:00 - 22:00 <br> Các ngày trong tuần
          </p>

          <div class="footer__social">
            <h4 class="footer__subtitle">Theo dõi chúng tôi</h4>

            <div class="footer__social-links flex">
              <a href="">
                <img src="assets/img/icon-facebook.svg" alt="" class="footer__social-icon">
              </a>

              <a href="">
                <img src="assets/img/icon-instagram.svg" alt="" class="footer__social-icon">
              </a>

              <a href="">
                <img src="assets/img/icon-twitter.svg" alt="" class="footer__social-icon">
              </a>

              <a href="">
                <img src="assets/img/icon-youtube.svg" alt="" class="footer__social-icon">
              </a>

              <a href="">
                <img src="assets/img/icon-pinterest.svg" alt="" class="footer__social-icon">
              </a>
            </div>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Về Shop</h3>

          <ul class="footer__links">
            <li><a href="#" class="footer__link">Giới thiệu</a></li>
            <li><a href="#" class="footer__link">Tuyển dụng</a></li>
            <li><a href="#" class="footer__link">Điều khoản</a></li>
            <li><a href="#" class="footer__link">Chính sách bảo mật</a></li>
            <li><a href="#" class="footer__link">Kênh người bán</a></li>
            <li><a href="#" class="footer__link">Chăm sóc khách hàng</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Tài khoản cá nhân</h3>

          <ul class="footer__links">
            <li><a href="#" class="footer__link">Đăng nhập</a></li>
            <li><a href="#" class="footer__link">Xem Giỏ Hàng</a></li>
            <li><a href="#" class="footer__link">Danh Sách Yêu Thích</a></li>
            <li><a href="#" class="footer__link">Theo Dõi Đơn Hàng</a></li>
            <li><a href="#" class="footer__link">Trợ Giúp</a></li>
            <li><a href="#" class="footer__link">Khác..</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Thanh Toán</h3>

          <img src="assets/img/payment-method.png" alt="" class="payment__img">
        </div>
      </div>

      <div class="footer__bottom">
        <p class="copyright">&copy; 2023 Bản quyền của Đào Việt Anh</p>
        <span class="designer">Được thiết kế bới Đào Việt Anh &#10084; </span>
      </div>
    </footer>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>

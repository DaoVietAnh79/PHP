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
          <li><span class="breadcrumb__link">Thời Trang</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Áo Sơ Mi</span></li>
        </ul>
      </section>

      <!--=============== DETAILS ===============-->
      <form action="" method="post" enctype="multipart/form-data">
      <section class="details section--lg">
        <div class="details__container container grid">
          <div class="details__group">
            <img name="anhsp" src="assets/img/product-8-1.jpg" alt="" class="details__img">
            <span>
                <?php
                if (!empty($error['anhsp'])) {
                    echo $error['anhsp'];
                }
                ?>
            </span>
            <div class="details__small-images grid">
              <img src="assets/img/product-8-2.jpg" class="details__small-img" alt="">

              <img src="assets/img/product-8-1.jpg" class="details__small-img" alt="">
              
              <img src="assets/img/product-8-2.jpg" class="details__small-img" alt="">
              
            </div>
          </div>

          <div class="details__group">
            <div class="h3 details__title">Áo Sơ Mi</div>
            <p class="details__brand">Thương hiệu: <span>adidas</span></p>

            <div class="details__price flex">
              <span name="gia" class="new__price">₫129.000</span>
              <span class="old__price">₫175.000</span>
              <span class="save__price">Giảm 15%</span>
            </div>

            <p class="short__description">
              100% thương hiệu sản phẩm mới và chất lượng cao 
              Cotton và spandex.
              Chiếc áo này được làm từ chất liệu cotton siêu mềm mại, mặc rất thoải mái. Thích hợp cho bạn mặc ở nhà hoặc đi chơi.
              Áo sơ mi rộng, thoải mái, đơn giản phù hợp với thanh thiếu niên.
            </p>

            <ul class="product__list">
              <li class="list_item flex">
                <i class="fi-rs-crown"></i> Bảo hành thương hiệu AL Jazeera 1 năm
              </li>

              <li class="list_item flex">
                <i class="fi-rs-refresh"></i> Chính sách hoàn trả trong 30 ngày
              </li>
              
              <li class="list_item flex">
                <i class="fi-rs-credit-card"></i> Tiền mặt khi giao hàng có sẵn
              </li>
            </ul>

            <div class="details__color flex">
              <span class="details__color-title">Màu</span>

              <ul class="color__list">
                <li>
                  <a href="#" class="color__link" style="background-color: hsl(37, 100%, 65%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(353, 100%, 67%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(49, 100%, 60%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(304, 100%, 78%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(126, 61%, 52%);"></a>
                </li>
              </ul>
            </div>

            <div class="details__size flex">
              <span class="details__size-title">Size</span>

              <ul class="size__list">
                <li>
                  <a href="#" class="size__link size-active">M</a>
                </li>
                
                <li>
                  <a href="#" class="size__link">L</a>
                </li>

                <li>
                  <a href="#" class="size__link">XL</a>
                </li>

                <li>
                  <a href="#" class="size__link">XXL</a>
                </li>
              </ul>
            </div>

            <div class="details__action">
              <input type="number" name="quantity" class="quantity" value="1" />
              <?php
                if (!empty($error['soluong'])) {
                    echo $error['soluong'];
                }
                ?>
              <input type="submit" name="submit" class="btn btn--sm" value="Thêm vào giỏ hàng">
              <a href="#" class="details__action-btn">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>

            <ul class="details__meta">
              <li class="meta__list flex"><span>Mã:</span> FWM15VKT</li>
              <li class="meta__list flex"><span>Loại:</span> Vải</li>
              <li class="meta__list flex"><span>Sẵn Có:</span> Các mặt hàng còn hàng</li>
            </ul>
          </div>
        </div>
      </section>
      </form>

      <!--=============== DETAILS TAB ===============-->
      <section class="details__tab"></section>

      <!--=============== PRODUCTS ===============-->
      <section class="products"></section>

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

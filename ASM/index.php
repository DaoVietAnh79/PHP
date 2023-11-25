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
      <!--=============== HOME ===============-->
      <section class="home section--lg">
        <div class="home__container container grid">
          <div class="home__content">
            <span class="home__subtitle">Khuyến mãi hấp dẫn</span>
            <h1 class="home__title">Xu Hướng Thời Trang <span> Bộ Sưu Tập Tuyệt Vời </span></h1>
            <p class="home__description">
              Tiết kiệm hơn với phiếu giảm giá & giảm giá tới 20%
            </p>
            <a href="shop.php" class="btn">Mua Ngay</a>
          </div>
          <img src="assets/img/home-img.png" alt="" class="home__img">
        </div>
      </section>

      <!--=============== CATEGORIES ===============-->
      <section class="categories container section">
        <h3 class="section__title">
           <span>Danh Mục</span> Phổ Biến
        </h3>

        <div class="categories__container swiper">
          <div class="swiper-wrapper">
            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-1.jpg" alt="" class="category__img">

              <h3 class="catelory__title">T-Shirt</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-2.jpg" alt="" class="category__img">

              <h3 class="catelory__title">Túi</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-3.jpg" alt="" class="category__img">

              <h3 class="catelory__title">Dép</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-4.jpg" alt="" class="category__img">

              <h3 class="catelory__title">Mũ khăn</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-5.jpg" alt="" class="category__img">

              <h3 class="catelory__title">Giày</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-6.jpg" alt="" class="category__img">

              <h3 class="catelory__title">Vỏ gối</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-7.jpg" alt="" class="category__img">

              <h3 class="catelory__title">Áo liền quần</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/category-8.jpg" alt="" class="category__img">

              <h3 class="catelory__title">Mũ</h3>
            </a>
          </div>

          <div class="swiper-button-next">
            <i class="fi fi-rs-angle-right"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
        </div>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section container">
        <div class="tab__btns">
          <span class="tab__btn active-tab" data-target="#featured">Nổi Bật</span>
          <span class="tab__btn" data-target="#popular">Phổ Biến</span>
          <span class="tab__btn" data-target="#new-addred">Hàng Mới</span>
        </div>

        <div class="tab__items">
          <div class="tab__item active-tab" content id="featured">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-1-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-1-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-2-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-2-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi Cuban LeeZone form rộng mặc hằng ngày Fullbox</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫199.000</span>
                    <span class="old__price">₫280.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-3-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-3-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-orange">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Giày Sneaker _New_Blance CRT300 2.0</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫265.000</span>
                    <span class="old__price">₫565.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-4-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-4-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-blue">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Quần hoa ống rộng nữ</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫110.000</span>
                    <span class="old__price">₫199.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-5-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-5-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">-30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Mũ bucket trơn vành cụp CAPMAN phong cách unisex CM65 dành cho nam nữ</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫99.000</span>
                    <span class="old__price">₫138.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-6-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-6-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi nam ROWAY vải lụa thoáng mát, form regular, Sơ mi họa tiết summer</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫189.000</span>
                    <span class="old__price">₫280.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-7-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-7-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo Sweater Nam Nữ Form Rộng Có Cổ Tay Dài Hàng Cao Cấp - Chanyoou Sweater</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫199.000</span>
                    <span class="old__price">₫345.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-8-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-8-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi basic chất kaki cao cấp, Áo sơ mi nam nữ cực đẹp</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫155.000</span>
                    <span class="old__price">₫162.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab__item" content id="popular">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-9-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-9-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-2-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-2-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-10-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-10-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-orange">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-4-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-4-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-blue">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-5-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-5-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">-30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-11-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-11-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-7-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-7-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-8-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-8-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab__item" content id="new-addred">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-1-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-1-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-12-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-12-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-3-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-3-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-orange">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-13-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-13-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-blue">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-10-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-10-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">-30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-6-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-6-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-9-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-9-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-8-1.jpg" alt="" class="product__img default">
                    <img src="assets/img/product-8-2.jpg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem nhanh">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="So sánh">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                </div>

                <div class="product__content">
                  <span class="product__category">Quần áo</span>
                  <a href="details.php">
                    <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">₫129.000</span>
                    <span class="old__price">₫175.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== DEALS ===============-->
      <section class="deals section">
        <div class="deals__container container grid">
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Flash Sale</h3>
              <span class="deals__category">Số lượng có hạn </span>
            </div>

            <h4 class="deals__title">Bộ sưu tập mùa hè - Thiết kế hiện đại mới mẻ</h4>

            <div class="deals__price flex">
              <span class="new__price">₫139.000</span>
              <span class="old__price">₫210.000</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Nhanh nào! Chương trình sẽ kết thúc trong:</p>
              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Ngày</span>
                </div>

                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Giờ</span>
                </div>

                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Phút</span>
                </div>

                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="unit">Giây</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="details.php" class="btn btn--md">Mua Ngay</a>
            </div>
          </div>

          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Thời trang Nữ</h3>
              <span class="deals__category">Áo & túi xách</span>
            </div>

            <h4 class="deals__title">Bạn hãy thử một cái gì đó mới vào mùa hè</h4>

            <div class="deals__price flex">
              <span class="new__price">₫139.000</span>
              <span class="old__price">₫210.000</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Nhanh nào! Chương trình sẽ kết thúc trong:</p>
              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Ngày</span>
                </div>

                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Giờ</span>
                </div>

                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Phút</span>
                </div>

                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="unit">Giây</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="details.php" class="btn btn--md">Mua Ngay</a>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEW ARRIVALS ===============-->
      <section class="new__arrivals container section">

        <h3 class="section__title">
          Hàng<span> Mới Về</span> 
       </h3>

       <div class="new__container swiper">
         <div class="swiper-wrapper">
          <div class="product__item swiper-slide">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img src="assets/img/product-1-1.jpg" alt="" class="product__img default">
                <img src="assets/img/product-1-2.jpg" alt="" class="product__img hover">
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Xem nhanh">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="So sánh">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-pink">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Quần áo</span>
              <a href="details.php">
                <h3 class="product__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">₫129.000</span>
                <span class="old__price">₫175.000</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item swiper-slide">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img src="assets/img/product-2-1.jpg" alt="" class="product__img default">
                <img src="assets/img/product-2-2.jpg" alt="" class="product__img hover">
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Xem nhanh">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="So sánh">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-green">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Quần áo</span>
              <a href="details.php">
                <h3 class="product__title">Áo sơ mi Cuban LeeZone form rộng mặc hằng ngày Fullbox</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">₫199.000</span>
                <span class="old__price">₫280.000</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item swiper-slide">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img src="assets/img/product-3-1.jpg" alt="" class="product__img default">
                <img src="assets/img/product-3-2.jpg" alt="" class="product__img hover">
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Xem nhanh">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="So sánh">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-orange">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Quần áo</span>
              <a href="details.php">
                <h3 class="product__title">Giày Sneaker _New_Blance CRT300 2.0</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">₫265.000</span>
                <span class="old__price">₫565.000</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item swiper-slide">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img src="assets/img/product-4-1.jpg" alt="" class="product__img default">
                <img src="assets/img/product-4-2.jpg" alt="" class="product__img hover">
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Xem nhanh">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="So sánh">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-blue">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Quần áo</span>
              <a href="details.php">
                <h3 class="product__title">Quần hoa ống rộng nữ</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">₫110.000</span>
                <span class="old__price">₫199.000</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item swiper-slide">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img src="assets/img/product-5-1.jpg" alt="" class="product__img default">
                <img src="assets/img/product-5-2.jpg" alt="" class="product__img hover">
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Xem nhanh">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="So sánh">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-pink">-30%</div>
            </div>

            <div class="product__content">
              <span class="product__category">Quần áo</span>
              <a href="details.php">
                <h3 class="product__title">Mũ bucket trơn vành cụp CAPMAN phong cách unisex CM65 dành cho nam nữ</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">₫99.000</span>
                <span class="old__price">₫138.000</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item swiper-slide">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img src="assets/img/product-6-1.jpg" alt="" class="product__img default">
                <img src="assets/img/product-6-2.jpg" alt="" class="product__img hover">
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Xem nhanh">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="So sánh">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-pink">-22%</div>
            </div>

            <div class="product__content">
              <span class="product__category">Quần áo</span>
              <a href="details.php">
                <h3 class="product__title">Áo sơ mi nam ROWAY vải lụa thoáng mát, form regular, Sơ mi họa tiết summer</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">₫199.000</span>
                <span class="old__price">₫280.000</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item swiper-slide">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img src="assets/img/product-7-1.jpg" alt="" class="product__img default">
                <img src="assets/img/product-7-2.jpg" alt="" class="product__img hover">
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Xem nhanh">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Thêm vào danh sách yêu thích">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="So sánh">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-green">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Quần áo</span>
              <a href="details.php">
                <h3 class="product__title">Áo Sweater Nam Nữ Form Rộng Có Cổ Tay Dài Hàng Cao Cấp - Chanyoou Sweater</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">₫199.000</span>
                <span class="old__price">₫345.000</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Thêm vào giỏ hàng">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>
         </div>

         <div class="swiper-button-next">
           <i class="fi fi-rs-angle-right"></i>
         </div>
         <div class="swiper-button-prev">
           <i class="fi fi-rs-angle-left"></i>
         </div>
       </div>
      </section>

      <!--=============== SHOWCASE ===============-->
      <section class="showcase section">
        <div class="showcase__container container grid">
          <div class="showcase__wrapper">
            <h3 class="section__title">Hàng Hot</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-1.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách Nữ Đeo Chéo Chính Hãng</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫199.000</span>
                  <span class="old__price">₫243.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-2.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Vỏ gối nằm cotton poly</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫50.000</span>
                  <span class="old__price">₫99.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-3.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách nữ đeo chéo đeo vai thời trang công sở</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫158.000</span>
                  <span class="old__price">₫210.000</span>
                </div>
              </div>
            </div>

          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Deals & Outlet</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-4.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách Nữ Đeo Chéo Chính Hãng </h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫199.000</span>
                  <span class="old__price">₫243.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-5.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Vỏ gối nằm cotton poly</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫50.000</span>
                  <span class="old__price">₫99.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-6.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách nữ đeo chéo đeo vai thời trang công sở</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫158.000</span>
                  <span class="old__price">₫210.000</span>
                </div>
              </div>
            </div>
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Bán Chạy Nhất</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-7.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách Nữ Đeo Chéo Chính Hãng </h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫199.000</span>
                  <span class="old__price">₫243.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-8.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Vỏ gối nằm cotton poly</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫50.000</span>
                  <span class="old__price">₫99.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-9.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách nữ đeo chéo đeo vai thời trang công sở</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫158.000</span>
                  <span class="old__price">₫210.000</span>
                </div>
              </div>
            </div>
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Xu Hướng</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-6.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách Nữ Đeo Chéo Chính Hãng </h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫199.000</span>
                  <span class="old__price">₫243.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-9.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Vỏ gối nằm cotton poly</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫50.000</span>
                  <span class="old__price">₫99.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/showcase-img-4.jpg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Túi Xách nữ đeo chéo đeo vai thời trang công sở</h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">₫158.000</span>
                  <span class="old__price">₫210.000</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section home__newsletter">
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
          <a href="index.php" class="footer__logo">
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

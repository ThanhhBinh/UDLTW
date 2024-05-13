@extends('layouts.site')
@section('title','Trang chủ')
@section('content')
<div>
    <main class="main_content">
        <section class="slider">
          <!-- Carousel -->
          <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="0"
                class="active"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="1"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="2"
              ></button>
            </div>
  
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="assets/images/1.jpg"
                  alt="Los Angeles"
                  class="d-block w-100"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="assets/images/2.jpg"
                  alt="Chicago"
                  class="d-block w-100"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="assets/images/vn-50009109-b6c4d5546273c01ef9c72a89856f02ca_xxhdpi.jpg"
                  alt="New York"
                  class="d-block w-100"
                />
              </div>
            </div>
  
            <!-- Left and right controls/icons -->
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </section>
        <section class="product__sale-sec">
          <div class="product__sale">
            <h1 class="product__sale-heading">Siêu sale hàng hiệu</h1>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
  
            <footer class="header__notify-footer" style="font-size: 1.8rem">
              <a
                href=""
                class="header__notify-footer-btn"
                style="color: var(--white-color)"
                >Xem tất cả</a
              >
            </footer>
          </div>
        </section>
        <section class="product__new-sec">
          <div class="product__new">
            <h1 class="product__new-heading">Sản phẩm mới nhất</h1>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
            <footer class="header__notify-footer" style="font-size: 1.8rem">
              <a
                href=""
                class="header__notify-footer-btn"
                style="color: var(--primary-color)"
                >Xem tất cả</a
              >
            </footer>
          </div>
        </section>
        <section class="product-sec">
          <div class="product">
            <h1 class="product-heading">Đồ gia dụng</h1>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
            <footer class="header__notify-footer" style="font-size: 1.8rem">
              <a
                href=""
                class="header__notify-footer-btn"
                style="color: var(--primary-color)"
                >Xem tất cả</a
              >
            </footer>
          </div>
          <div class="product">
            <h1 class="product-heading">Đồ gia dụng</h1>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
            <footer class="header__notify-footer" style="font-size: 1.8rem">
              <a
                href=""
                class="header__notify-footer-btn"
                style="color: var(--primary-color)"
                >Xem tất cả</a
              >
            </footer>
          </div>
          <div class="product">
            <h1 class="product-heading">Đồ gia dụng</h1>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin: auto">
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="home-product-item">
                  <div
                    class="product-item_img"
                    style="background-image: url(assets/images/tainghe.jpg)"
                  ></div>
                  <h4 class="product-item_name">
                    Converse Chuck Taylor All Star Mono Leather Low Top
                  </h4>
                  <div class="product-item_price">
                    <span class="product-item_price-old">1.500.000</span>
                    <span class="product-item_price-current">1.320.000</span>
                  </div>
                  <div class="product-item_action">
                    <span class="product-item_like">
                      <i class="far fa-heart"></i>
                    </span>
                    <div class="product-item_rating">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span class="product-item_sold">50 đã bán</span>
                  </div>
                  <div class="product-item_origin">
                    <span class="product-item_brand">Whoo</span>
                    <span class="product-item_origin-name">Hàn quốc</span>
                  </div>
                  <div class="product-item_favorite">
                    <i class="fas fa-check"></i>
                    Yêu thích
                  </div>
                  <div class="product-item_sale-off">
                    <span class="product-item_sale-off-percent">43%</span>
                    <span class="product-item_sale-off-label">GIẢM</span>
                  </div>
                </div>
              </div>
            </div>
            <footer class="header__notify-footer" style="font-size: 1.8rem">
              <a
                href=""
                class="header__notify-footer-btn"
                style="color: var(--primary-color)"
                >Xem tất cả</a
              >
            </footer>
          </div>
        </section>
        <section class="product__pos">
          <div class="product__pos-container my-5">
            <div class="row">
              <h1 class="product__pos-heading">Post new</h1>
              <div class="new-post" style="width: 400px; margin-left: 40px">
                <img
                  class="card-img-top"
                  src="assets/images/vn-50009109-132c71c4be70f7071d3df99c5068643e.png"
                />
                <div class="article-item-bottom">
                  <h3>
                    TRẢI NGHIỆM CON ĐƯỜNG MÀU SẮC ĐẦY HOA DÀI VÔ TẬN CỦA CONVERSE
                    PRIDE
                  </h3>
                  <span>
                    <i class="far fa-calendar-alt fa-fw"></i> 04.11.2021
                  </span>
                  <span> Công Ty TNHH KTCN F1GENZ </span>
                  <p>
                    Chuck Taylor Classic là dòng giày truyền thống của Converse
                    được giữ đúng với nguyên bản ban đầu. Từ lúc xuất hiện cho đến
                    nay dòng Classic vẫn nhận được sự quan tâm của nhiều khách
                    hàng trên thế giới.
                  </p>
                </div>
              </div>
              <div class="new-post" style="width: 400px; margin-left: 20px">
                <img
                  class="card-img-top"
                  src="assets/images/vn-50009109-132c71c4be70f7071d3df99c5068643e.png"
                  alt="Card image"
                />
                <div>
                  <div>
                    <h3>CONVERSE X KIM JONES</h3>
                    <span>
                      <i class="far fa-calendar-alt fa-fw"></i> 04.11.2021
                    </span>
                    <span> Công Ty TNHH KTCN F1GENZ </span>
                    <p>
                      Chuck Taylor Classic là dòng giày truyền thống của Converse
                      được giữ đúng với nguyên bản ban đầu. Từ lúc xuất hiện cho
                      đến nay dòng Classic vẫn nhận được sự quan tâm của nhiều
                      khách hàng trên thế giới. Chuck Taylor Classic có thiết kế
                      giống như dòng Converse All Star được cho ra mắt...
                    </p>
                  </div>
                </div>
              </div>
              <div class="new-post" style="width: 400px; margin-left: 20px">
                <img
                  class="card-img-top"
                  src="assets/images/vn-50009109-132c71c4be70f7071d3df99c5068643e.png"
                  alt="Card image"
                />
                <div>
                  <div>
                    <h3>CONVERSE X KIM JONES</h3>
                    <span>
                      <i class="far fa-calendar-alt fa-fw"></i> 04.11.2021
                    </span>
                    <span> Công Ty TNHH KTCN F1GENZ </span>
                    <p>
                      Chuck Taylor Classic là dòng giày truyền thống của Converse
                      được giữ đúng với nguyên bản ban đầu. Từ lúc xuất hiện cho
                      đến nay dòng Classic vẫn nhận được sự quan tâm của nhiều
                      khách hàng trên thế giới.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <footer class="header__notify-footer" style="font-size: 1.8rem">
              <a
                href=""
                class="header__notify-footer-btn"
                style="color: var(--primary-color)"
                >Xem tất cả</a
              >
            </footer>
          </div>
        </section>
      </main>
</div>
@endsection
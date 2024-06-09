@extends('layouts.site')
@section('title','Trang chủ')
@section('content')
<div>
    <main class="main_content">
        <section class="slider">
          <div class="col l-8 m-12 c12" style="margin: auto;display: flex ">
            <div class="w3-content w3-section col l-8 m-4 c-6">
                <img class="mySlides" src="assets/img/1.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/2.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/1.jpg" style="width:100%">
            </div>
            <div class="slider-right col l-4 m-4 c-6">
                <div class="slider-item">
                    <img class="img-right" src="assets/img/1.jpg" style="width:100%">
                </div>
                <div class="slider-item" style="margin-top: 5px">
                    <img class="img-right" src="assets/img/1.jpg" style="width:100%">
                </div>
            </div>            
          </div>
          <div class="slider__menu col l-8 m-12 c12" style="margin: auto; display: flex;">
            <div class="slider__menu-item-wrapper col l-1">
                <a href="#" class="slider__menu-item">
                    <div class="slider__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                    <span>Siêu sale</span>
                </a>
            </div>
            <div class="slider__menu-item-wrapper col l-1">
                <a href="#" class="slider__menu-item">
                    <div class="slider__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                    <span>Siêu sale</span>
                </a>
            </div>
            <div class="slider__menu-item-wrapper col l-1">
                <a href="#" class="slider__menu-item">
                    <div class="slider__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                    <span>Siêu sale</span>
                </a>
            </div>
            <div class="slider__menu-item-wrapper col l-1">
                <a href="#" class="slider__menu-item">
                    <div class="slider__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                    <span>Siêu sale</span>
                </a>
            </div>
            <div class="slider__menu-item-wrapper col l-1">
                <a href="#" class="slider__menu-item">
                    <div class="slider__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                    <span>Siêu sale</span>
                </a>
            </div>
            <div class="slider__menu-item-wrapper col l-1">
                <a href="#" class="slider__menu-item">
                    <div class="slider__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                    <span>Siêu sale</span>
                </a>
            </div>
            <div class="slider__menu-item-wrapper col l-1">
                <a href="#" class="slider__menu-item">
                    <div class="slider__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                    <span>Siêu sale</span>
                </a>
            </div>
          </div>
        </section>
        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>
        <section class="col l-8 m-12 c-12" style="margin: auto">
            <a href="#">
                <img src="assets/img/banner.png" alt="banner" style="width:100%">
            </a>
        </section>
        <section class="category-sec">
            <div class="category col l-8 m-12 c-12" style="margin: auto">
                <div class="category__heading_first">
                    <h1 class="category__heading-item">Danh mục</h1>
                </div>
                
                <div class="home-category">
                    <div class="row sm-gutter" style="display: flex; flex-wrap: wrap; justify-content: space-around;">
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Thời trang Nam</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Điện thoại</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Máy tính</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Máy ảnh</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Đồng hồ</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Thiết bị điện gia dụng</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Thời trang nữ</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Sức khỏe</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Túi ví</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Khuyến mãi</span>
                            </a>
                        </div>                        
                    </div>
                    <div class="row sm-gutter" style="display: flex; flex-wrap: wrap; justify-content: space-around;">
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Thời trang Nam</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Điện thoại</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Máy tính</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Máy ảnh</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Đồng hồ</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Thiết bị điện gia dụng</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Thời trang nữ</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Sức khỏe</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Túi ví</span>
                            </a>
                        </div>
                        <div class="category-product l-1">
                            <a href="#" class="category__item">
                                <div class="category__menu-item-img" style="background-image: url(assets/img/voucher.png);"></div>
                                <span>Khuyến mãi</span>
                            </a>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        <section class="product__sale-sec">
          <div class="col l-8 m-12 c-12" style="margin: auto">
            <h1 class="product__sale-heading" style="margin-left: 30px">Siêu sale hàng hiệu</h1>
            <div class="home-product ">
              <div class="row sm-gutter">
                  <div class="col l-2-4 m-4 c-6">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                        <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                        <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
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
            
          </div>
        </section>
        <section class="product__new-sec">
          <div class="col l-8 m-12 c-12" style="margin: auto">
            <h1 class="product__new-heading" style="margin-left: 30px">Sản phẩm mới nhất</h1>
            <div class="home-product ">
              <div class="row sm-gutter">
                  <div class="col l-2-4 m-4 c-6">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                        <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                        <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
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
          <div class="col l-8 m-12 c-12" style="margin: auto">
            <h1 class="product-heading" style="margin-left: 30px">Đồ gia dụng</h1>
            <div class="home-product ">
              <div class="row sm-gutter">
                  <div class="col l-2-4 m-4 c-6">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                        <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                        <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
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
            <div class="home-product ">
              <div class="row sm-gutter">
                  <div class="col l-2-4 m-4 c-6">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                        <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                        <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
                  </div>
                  <div class="col l-2-4 m-4 c-6 ">
                      <!-- Product item -->

                      <a class="home-product-item" href="">
                          <div class="home-product-item__img" style="background-image: url(./assets/img/cart_list_dh1.jpg)"></div>
                          <h4 class="home-product-item__name">Các ký hiệu trên mặt của đồng hồ Casio của đồng hồ Casio </h4>
                          <div class="home-product-item__price">
                              <span class="home-product-item__price-old">1.200.000đ</span>
                              <span class="home-product-item__price-current">999.000đ</span>
                          </div>
                          <div class="home-product-item__action">
                              <span class="home-product-item__like home-product-item__liked">
                                  <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                  <i class="home-product-item__like-icon-empty far fa-heart"></i>
                              </span>
                              <div class="home-product-item__rating">
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class="home-product-item__rating__star-gold fas fa-star"></i>
                                  <i class=" fas fa-star"></i>
                              </div>
                              <span class="home-product-item__sold">88 đã bán</span>
                          </div>
                          <div class="home-product-item__origin">
                              <span class="home-product-item__brand">Whoo</span>
                              <span class="home-product-item__origin-name">Nhật Bản</span>
                          </div>
                          <div class="home-product-item__favourite">
                              <i class="home-product-item__favourite-icon fas fa-check"></i>
                              <span>Yêu thích</span>
                          </div>
                          <div class="home-product-item__sale-off">
                              <span class="home-product-item__sale-off-percent">10%</span>
                              <span class="home-product-item__sale-off-lable">GIẢM</span>
                          </div>
                      </a>
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
          <div class="col l-9 m-12 c-12" style="margin: auto">
            <h1 class="product__pos-heading">Post new</h1>
            <div class="row sm-gutter" style="display: flex;justify-content: space-between;">       
              <div class="new-post col l-4 m-4 c-6" >
                <img
                  class="card-img-top"
                  src="assets/img/vn-50009109-132c71c4be70f7071d3df99c5068643e.png"
                  style="width: 100%"
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
              <div class="new-post  col l-4 m-4 c-6">
                <img
                  class="card-img-top"
                  src="assets/img/vn-50009109-132c71c4be70f7071d3df99c5068643e.png"
                  alt="Card image"
                  style="width: 100%"
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
              <div class="new-post col l-4 m-4 c-6">
                <img
                  class="card-img-top"
                  src="assets/img/vn-50009109-132c71c4be70f7071d3df99c5068643e.png"
                  alt="Card image"
                  style="width: 100%"
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
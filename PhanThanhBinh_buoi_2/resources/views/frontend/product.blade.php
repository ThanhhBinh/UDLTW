@extends('layouts.site')
@section('title','Tất cả sản phẩm')
@section('content')
<div>
    <main class="main_content">
        <section class="product_content">
          <h1 class="product__heading">Tất cả sản phẩm</h1>
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="shop-filter-wrap shop-filter-mobile">
                <div class="shop-filter" data-type="vendor">
                  <h4 class="product__layout-heading">
                    <i class="fas fa-bars product__layout-heading-icon"></i>
                    Tất cả các danh mục
                  </h4>
                  <div class="shop-filter-list">
                    <div class="shop-filter-item">
                      <ul class="product__layout-list">
                        <li
                          class="product__layout-item product__layout-item--active"
                        >
                          <i class="fas fa-angle-left product__layout-icon"></i>
                          <a href="#" class="product__layout-link"
                            >Máy tính & laptop</a
                          >
                        </li>
                        <li class="product__layout-item">
                          <a href="#" class="product__layout-link"
                            >Máy tính bàn</a
                          >
                        </li>
                        <li class="product__layout-item">
                          <a href="#" class="product__layout-link">Màn hình</a>
                        </li>
                        <li class="product__layout-item">
                          <a href="#" class="product__layout-link"
                            >Linh kiện điện tử</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="shop-filter"
                  data-type="type"
                  style="border-bottom: 1px solid #ccc; width: 210px"
                >
                  <h4 class="product__layout-heading">
                    <i class="fas fa-filter product__layout-heading-icon"></i>
                    Bộ lọc
                  </h4>
                  <h4 class="product__filter-heading">Theo danh mục</h4>
                  <div class="shop-filter-list">
                    <div class="shop-filter-item">
                      <input
                        type="checkbox"
                        id="shop-filter-type1"
                        data-group="type"
                        data-field="product_type"
                        data-text="Giày cổ cao"
                        value="(Giày cổ cao)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-type1">Chuột</label>
                    </div>
                    <div class="shop-filter-item">
                      <input
                        type="checkbox"
                        id="shop-filter-type2"
                        data-group="type"
                        data-field="product_type"
                        data-text="Giày cổ thấp"
                        value="(Giày cổ thấp)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-type2">Máy in</label>
                    </div>
                    <div class="shop-filter-item">
                      <input
                        type="checkbox"
                        id="shop-filter-type3"
                        data-group="type"
                        data-field="product_type"
                        data-text="Socks"
                        value="(Socks)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-type3">Thiết bị mạng</label>
                    </div>
                  </div>
                </div>
                <div
                  class="shop-filter"
                  data-type="variant1"
                  style="border-bottom: 1px solid #ccc; width: 210px"
                >
                  <h4 class="product__filter-heading">Nơi bán</h4>
                  <div class="shop-filter-list">
                    <div class="shop-filter-item">
                      <input
                        type="checkbox"
                        id="shop-filter-tag-item11"
                        data-group="tag1"
                        data-text="33x40cm"
                        data-field="tags"
                        value="(33x40cm)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-tag-item11">TP.Hồ Chí Mình</label>
                    </div>
                    <div class="shop-filter-item">
                      <input
                        type="checkbox"
                        id="shop-filter-tag-item12"
                        data-group="tag1"
                        data-text="40x30cm"
                        data-field="tags"
                        value="(40x30cm)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-tag-item12">Đồng Nai</label>
                    </div>
                    <div class="shop-filter-item">
                      <input
                        type="checkbox"
                        id="shop-filter-tag-item13"
                        data-group="tag1"
                        data-text="100x30cm"
                        data-field="tags"
                        value="(100x30cm)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-tag-item13">Hà Nội</label>
                    </div>
                    <div class="shop-filter-item">
                      <input
                        type="checkbox"
                        id="shop-filter-tag-item14"
                        data-group="tag1"
                        data-text="50x30cm"
                        data-field="tags"
                        value="(50x30cm)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-tag-item14">Bình Dương</label>
                    </div>
                  </div>
                </div>
                <div
                  class="shop-filter"
                  data-type="variant3"
                  style="border-bottom: 1px solid #ccc; width: 210px"
                >
                  <h4 class="product__filter-heading">Đơn vị vận chuyển</h4>
                  <div class="shop-filter-list color">
                    <div class="shop-filter-item color xanh">
                      <input
                        type="checkbox"
                        id="shop-filter-tag-item31"
                        data-group="tag3"
                        data-field="tags"
                        data-text="Xanh"
                        value="(Xanh)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-tag-item31" title="Xanh"
                        >Hỏa Tốc</label
                      >
                    </div>
                    <div class="shop-filter-item color do">
                      <input
                        type="checkbox"
                        id="shop-filter-tag-item32"
                        data-group="tag3"
                        data-field="tags"
                        data-text="Đỏ"
                        value="(Đỏ)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-tag-item32" title="Đỏ">Nhanh</label>
                    </div>
                    <div class="shop-filter-item color den">
                      <input
                        type="checkbox"
                        id="shop-filter-tag-item33"
                        data-group="tag3"
                        data-field="tags"
                        data-text="Đen"
                        value="(Đen)"
                        data-operator="OR"
                      />
                      <label for="shop-filter-tag-item33" title="Đen"
                        >Tiết Kiệm</label
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-6 mb-4">
              <div class="main-collection-head">
                <div class="row pt-5">
                    <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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
  
                <div class="row pt-5">
                    <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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

                <div class="row pt-5">
                    <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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

                <div class="row pt-5">
                    <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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
                      <div class="col-md-3">
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
              </div>
            </div>
          </div>
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <ul class="pagination pagination-sm">
                <li class="page-item">
                  <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </li>
          </ul>
        </section>
      </main>
</div>
@endsection
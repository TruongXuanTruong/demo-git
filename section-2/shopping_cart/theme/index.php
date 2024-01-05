<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!--    CSS-->
    <link rel="stylesheet" href="../css/shopping.css">
</head>
<body>
<!-- header -->
<header>
    <nav>
        <div class="img-nav">
<!--            <img src="../img/logo.png" alt="" />-->
        </div>
        <div class="content-nav">
            <ul>
                <li><a href="#">Trang Chủ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li><a href="#">Liên Hệ</a></li>
                <li><a href="#">Giới Thiệu</a></li>
            </ul>
            <form>
                <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <!-- The Modal -->
        <button id="cart">
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
            Giỏ Hàng
        </button>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Giỏ Hàng</h5>
                    <span class="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                        <span class="cart-price cart-header cart-column">Giá</span>
                        <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                    </div>
                    <div class="cart-items">

                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Tổng Cộng:</strong>
                        <span class="cart-total-price">0VNĐ</span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                    <button type="button" class="btn btn-primary order">Thanh Toán</button>
                </div>
            </div>
        </div>
    </nav>

</header>

<!--Content-->
<!-- content -->
<section class="wrapper">
    <div class="products">
        <ul>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/sualai.jpg?v=1573720306000"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Mũi Hàn 500</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">25.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/sp1-57698689-e2c0-429a-bf4f-3bd0f39230d8.jpg?v=1575337954000"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Trạm Hàn Hakko 942 75W 200-480*C 220VAC Cực Nóng</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">1.299.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://cf.shopee.vn/file/d86e667c263d6da4a53ac878178a3ba6"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Máy Bơm Chìm Hộ Gia Đình QDX 1500W 220VAC 40L/1min H=8m</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">1.599.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product no-margin">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/module-diy-sac-khong-day-5.jpg?v=1570011041000"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Module DIY Sạc Không Dây Qi IOS/Androi - Bộ phát V2</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">89.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/bo-dieu-chinh-dien-ap-sdty-200p.jpg?v=1560155769920"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Bộ Điều Chỉnh Điện Áp CHLVFU SDTY-200P 20KW 200A (BH 06 Tháng)
                    </h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">2.199.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/isd1760-thu-am-thanh-phat-am-thanh-2.jpg?v=1568951032960"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Module ISD1760 Thu Âm Thanh - Phát Âm Thanh 75s</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">115.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/medium/100/228/168/products/kit-stm32f407vet6-cortex-m4-1-883505c1-4404-4abc-850c-f02fd8cc0495.jpg?v=1562748843493"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Raspberry Pi 3 E14 Model B Plus B+ 2.4G/5G Bluetooth</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">1.295.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product no-margin">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/medium/100/228/168/products/sp5-4b0e50c3-e5bf-4604-8f85-21c27af420be.jpg?v=1586941618937"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Module IOT ESP8266 ESP-12E CH340 V3</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">85.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--Footer-->
<!-- footer -->
<footer>
    <div class="footer-item">
        <div class="img-footer">
<!--            <img src="img/logo.png" alt="" />-->
        </div>
        <div class="social-footer">
            <li><a target="_blank" href="https://www.facebook.com/thanhlongdev">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a></li>
            <li><a target="_blank" href="https://github.com/long1211">
                    <i class="fa fa-github-square" aria-hidden="true"></i>
                </a></li>

        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

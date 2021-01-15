<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
?>
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Bảng điều khiển</p>
            <div class="right__cards">
                <a class="right__card" href="view_product.html">
                    <div class="right__cardTitle">Sản Phẩm</div>
                    <div class="right__cardNumber">72</div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="view_customers.html">
                    <div class="right__cardTitle">Khách Hàng</div>
                    <div class="right__cardNumber">12</div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="view_p_category.html">
                    <div class="right__cardTitle">Danh Mục</div>
                    <div class="right__cardNumber">4</div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
                <a class="right__card" href="view_orders.html">
                    <div class="right__cardTitle">Đơn Hàng</div>
                    <div class="right__cardNumber">72</div>
                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                </a>
            </div>
        </div>
    </div>
<?php
require_once 'views/footer.php';

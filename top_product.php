<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FloSun - Flower Shop HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-free-6.4.0-web/css/all.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>

.product-grid{
    font-family: 'Poppins', sans-serif;
    text-align: center;
    transition: all 0.7s ease 0s;
}
.product-grid:hover{ box-shadow: 0 0 10px rgba(0,0,0,0.15),10px 10px rgba(0,0,0,0.05); }
.product-grid .product-image{
    overflow: hidden;
    position: relative;
}
.product-grid .product-image a.image{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-grid .product-image .pic-1{ transition: all 200ms ease 0s; }
.product-grid .product-image:hover .pic-1{ opacity: 0; }
.product-grid .product-image .pic-2{
    width: 100%;
    height: 100%;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: transform 3s;
}
.product-grid .product-image:hover .pic-2{
    opacity: 1;
    transform: scale(1.5);
}
.product-grid .product-hot-label{
    color: #fff;
    background: #222;
    font-size: 14px;
    font-weight: 500;
    text-transform: capitalize;
    padding: 7px 12px;
    position: absolute;
    top: 0;
    left: 0;
}
.product-grid .product-links{
    background: #f1f1f1;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    transform: scaleX(2);
    position: absolute;
    bottom: -50px;
    left: 0;
    transition: all 0.5s ease-in-out 0s;
}
.product-grid:hover .product-links{
    opacity: 1;
    transform: scaleX(1);
    bottom: 0;
}
.product-grid .product-links li{
    margin: 0 -2px;
    display: inline-block;
}
.product-grid .product-links li a{
    color: #444;
    font-size: 16px;
    line-height: 41px;
    width: 40px;
    height: 40px;
    display: block;
    position: relative;
    transition: all .2s ease-out;
}
.product-grid .product-links li a:hover{
    color: #fff;
    background-color: #88c000;
}
.product-grid .product-links li a:before,
.product-grid .product-links li a:after{
    content: attr(data-tip);
    color: #fff;
    background-color: #222;
    font-size: 12px;
    line-height: 18px;
    padding: 5px 10px;
    white-space: nowrap;
    display: none;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: -40px;
    transition: all 0.3s;
}
.product-grid .product-links li a:after{
    content: '';
    height: 15px;
    width: 15px;
    transform: translateX(-50%) rotate(45deg);
    top: -25px;
    z-index: -1;
}
.product-grid .product-links li a:hover:before,
.product-grid .product-links li a:hover:after{
    display: block;
}
.product-grid .product-content{
    background: #fff;
    padding: 15px 12px;
    position: relative;
}
.product-grid .add-to-cart{
    color: #88c000;
    font-size: 15px;
    font-weight: 600;
    transform: translateX(-50%);
    position: absolute;
    top: 13px;
    left: 50%;
    opacity: 0;
    transition: all 1s ease 0s;
}
.product-grid:hover .add-to-cart{ opacity: 1; }
.product-grid .add-to-cart i.fas{
    font-size: 14px;
    margin: 0 5px 0 0;
}
.product-grid .title{
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 10px;
    transition: all 0.3s ease 0s;
}
.product-grid .title a{ color: #444; }
.product-grid:hover .title{ opacity: 0; }
.product-grid .rating{
    color: #1c1a19;
    font-size: 12px;
    padding: 0;
    margin: 0 0 11px;
    list-style: none;
}
.product-grid .price{
    color: #88c000;
    font-size: 16px;
    font-weight: 700;
}
@media screen and (max-width: 990px){
    .product-grid{ margin: 0 0 30px; }}
</style>

<body>

    

    
    <!--Product Area Start-->
    <div class="product-area mt-text-3">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">The Most Trendy</span>
                        <h3 class="section-title-3">Top Products</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="product-slider swiper-container anime-element-multi">
                        <div class="swiper-wrapper">
                            <div class="single-item swiper-slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<div class="row">

		<?php 
		include('connect.php');
		$sql = "SELECT * FROM product";
    $rs = mysqli_query($con,$sql);
    while($data=mysqli_Fetch_array($rs)){
		?>

    <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="uploads/<?= $data['image']?>">
                    <img class="pic-2" src="uploads/<?= $data['image']?>">
                </a>
            </div>
            <div class="product-content">
                <a class="add-to-cart" href="#">
                    <i class="fas fa-plus"></i>Add to cart
                </a>
                <h3 class="title"><a style="color: #E72463;" href="#"><?= $data['p_name']?></a></h3>
                <ul class="rating">
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="far fa-star"></li>
                    <li class="far fa-star"></li>
                </ul>
                <div class="price" style="color: #E72463"><?= $data['price']?></div>
            </div>
        </div>
    </div>
	<?php
	}
	?>
</div>
<!--Product Area End-->

    

    <!-- JS
============================================ -->


    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>


    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- Ajaxchimpt js -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Ui js -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- Jquery Countdown js -->
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <!-- jquery magnific popup js -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from htmldemo.net/flosun/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:17 GMT -->
</html>
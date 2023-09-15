<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:26 GMT -->
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
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
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
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>

<body>


    <!-- Header Area Start Here -->
    <?php include('index_navbar.php');?>
  <?php
  error_reporting(0);
  include('connect.php');
if($_GET['sku'] == null){
}else{
  
      $p_name = $_GET['p_name'];
      $p_sku = $_GET['sku'];
      $p_desc = $_GET['p_desc'];
      $p_price = $_GET['price'];
      $p_qty = $_GET['p_qty'];
      $p_total = $_GET['p_total'];
      $p_image = $_GET['image'];
     
      $cart = $_SESSION['cart'];
      $_SESSION['cart'][$p_sku] = array("id"=>$p_sku, "name"=>$p_name, "desc"=>$p_desc, "price"=>$p_price, "qty"=>$p_qty, "total"=>$p_total, "image"=>$p_image,);
    }
    
    
  ?>
    <!-- Header Area End Here -->
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Shopping Cart</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                   
                                        $cart = $_SESSION['cart'];
                                        if($cart == null){
                                            echo "<h3 style='color:red'> Your cart is empty</h3>";
                                        }else{

                                        foreach($cart as $c){
                                    ?>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="uploads/<?= $c['image']?>" /></a></td>
                                    <td class="pro-title"><a href="#"><?= $c['name']?></a></td>
                                    <td class="pro-price"><span><?= $c['price']?></span></td>
                                    <td class="pro-quantity">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="<?= $c['qty']?>" type="text">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span><?= $c['total']?><span></td>
                                    <td class="pro-remove"><a href="removecart.php?id=<?=$c['id']?>"><i class="lnr lnr-trash"></i></a></td>
                                </tr>
                                <?php 
                                
                                }}?>
                            </tbody>
                            
                        </table>
                    </div> 
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
    <!-- order form start-->
    <?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
    ?>
    <div class="contact1" style="background: white;">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="assets/images/jknmwmxdztjjgiwsno22.jpg" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="#" method="post">
				<span class="contact1-form-title">
					Order form
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name" require>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="phone" placeholder="Phone#" require>
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<textarea class="input1" type="text" name="address" placeholder="address" require></textarea>
					<span class="shadow-input1"></span>
				</div>

                <div class="form-check">
					<input type="radio" class="form-check-input" name="pay_mode" value="COD" require>
					<label class="label-check" >Cash on Delivery</label>
				</div>
                <div class="form-check">
					<input type="radio" class="form-check-input" name="pay_mode" value="OP" require>
					<label class="label-check" >Online Payment</label>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" name="order" type="submit">
						<span>
							Place order
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
    <?php
if(isset($_POST['order'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pay_mode = $_POST['pay_mode'];
     
    $sql = "INSERT INTO `order_detail`(`full_name`, `phone`, `address`, `pay_mode`) VALUES ('$name','$phone','$address','$pay_mode')";
    if(mysqli_query($con,$sql)){
        $order_id=mysqli_insert_id($con);
        $sql1 = "INSERT INTO `order_detail2`(`order_id`,`p_name`, `price`, `qty`, `sku`) VALUES (?,?,?,?,?)";
        $stmt=mysqli_prepare($con,$sql1);
        if($stmt){
            mysqli_stmt_bind_param($stmt,"isiii",$order_id,$item_name,$price,$qty,$sku);
            foreach($_SESSION['cart'] as $key => $value){
                
                $item_name=$value['name'];
                $price=$value['price'];
                $qty=$value['qty'];
                $sku=$value['id'];
                mysqli_stmt_execute($stmt);
            }
            unset($_SESSION['cart']);
            echo "<script>alert('Order placed')</script>";

        }else{
            echo "<script>alert('Could not Prepared')</script>";    
        }
    }else{
        echo "<script>alert('Could not placed Order')</script>";
    }
}

    }
    ?>
<!-- order form end-->


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <!--Footer Area Start-->
    <?php include('index_footer.php') ?>
    <!--Footer Area End-->

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


<!-- Mirrored from htmldemo.net/flosun/flosun/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:26 GMT -->
</html>





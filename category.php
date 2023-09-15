<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

<!-- CSS
============================================ -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css">
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

 <?php  include('admin_navbar.php');
 ?>
  <!-- Login Area Start Here -->
  <div class="login-register-area mt-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                <div class="login-register-wrapper">
                    <div class="section-content text-center mb-5">
                        <h2 class="title-4 mb-2">Category form</h2>
                        <p class="desc-content">Please add new Category.</p>
                    </div>
                    <form action="#" method="post">
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Email or Username" name="name">
                        </div>
                        
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                        </div>
                        <div class="single-input-item mb-3">
                            <button class="btn flosun-button secondary-btn theme-color rounded-0" name="add">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br>  
<h1><center>Categories</center></h1>
<center><table class="table" style="width: 50%; margin-top: 50px; border: 1px solid black;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>

    <?php
    include('connect.php');

    $sql = "SELECT * FROM category";
    $rs = mysqli_query($con,$sql);
    while($data=mysqli_Fetch_array($rs)){

    
    ?>

    <tr>
        <td><?= $data['c_id']?></td>
        <td><?= $data['c_name']?></td>
        <td class="btn btn-info" style="margin: 5px;"><a href='category.php?id=<?=$data['c_id']?>' >Edit</a>
        <td class="btn btn-danger" style="margin: 5px;"><a href='category.php?id=<?=$data['c_id']?>' >Delete</a>
      </td>
    </tr>



    <?php
    
  }
    
    ?>
</table></center>

<?php



if(isset($_POST['add'])){

$name = $_POST['name'];

$sql = "INSERT INTO `category` (`c_name`) value ('$name')";

if(mysqli_query($con,$sql)){
  echo "<script>alert('Record Inserted')</script>";
}else{
    echo "<script>alert('Not Inserted')</script>";
}

}


?>
<!-- Login Area End Here -->
  <!--Navbar end-->
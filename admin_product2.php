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
    include('connect.php');
 ?>

 <!-- Login Area Start Here -->
 <div class="login-register-area mt-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                <div class="login-register-wrapper">
                    <div class="section-content text-center mb-5">
                        <h2 class="title-4 mb-2">Product form</h2>
                        <p class="desc-content">Please add new Product.</p>
                    </div>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="single-input-item mb-3">
                            <label >Product Name</label>
                            <input type="text" placeholder="Enter Product Name" name="p_name">
                        </div>
                        
                        <div class="single-input-item mb-3">
                            <label >Category</label>
                            <select name="c_id" class="form-control">
                                <option value="">Select Category</option>
                                <?php
                                $sql = "SELECT * FROM category";
                                $rs = mysqli_query($con,$sql);

                                if(mysqli_num_rows($rs)>0){
                                while($col = mysqli_fetch_array($rs)){
                                    ?><option value="<?= $col['c_id']?>"><?= $col['c_name']?></option><?php
                                }}else{
                                    ?><option>No Category Found</option><?php

                                }
                                ?>
                            </select>
                        </div>

                        <div class="single-input-item mb-3">
                            <label >Price</label>
                            <input type="text" placeholder="Price" name="price">
                        </div>
                        <div class="single-input-item mb-3">
                            <label >Description</label>
                            <input type="text" placeholder="Please Write Product Detail" name="desc">
                        </div>
                        <div class="single-input-item mb-3">
                            <label >Image</label>
                            <input type="file" class="form_control" name="image" accept=".jpg, .jpeg, .png">
                        </div>
                        
                        
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                        </div>
                        <div class="single-input-item mb-3">
                            <button type="submit" class="btn flosun-button secondary-btn theme-color rounded-0" name="add">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End Here -->

<br><br>  
<h1><center>Products</center></h1>
<center><table class="table" style="width: 95%;  border: 1px solid black">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    <?php
    include('connect.php');

    $sql = "SELECT * FROM product2";
    $rs = mysqli_query($con,$sql);
    while($data=mysqli_Fetch_array($rs)){

    
    ?>

    <tr>
        <td><?= $data['p_id']?></td>
        <td><?= $data['p_name']?></td>
        <td><?= $data['price']?></td>
        <td><?= $data['p_desc']?></td>
        <td><img src="uploads/<?= $data['image']?>" alt="" style="width: 100px; height: 100px;"></td>

        <td class="btn btn-info" style="margin: 5px;"><a href='admin_product.php?id=<?=$data['p_id']?>' >Edit</a>
        <td class="btn btn-danger" style="margin: 5px;"><a href='admin_product.php?id=<?=$data['p_id']?>' >Delete</a>
      </td>
    </tr>



    <?php
    
  }
    
    ?>
</table></center>



<?php


if(isset($_POST['add'])){

    $c_id = $_POST['c_id'];
    $p_name = $_POST['p_name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $file = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "uploads/$file");

    $sql = "INSERT INTO `product2` (`p_name`, `p_desc`, `c_id`, `price`, `image`) value ('$p_name','$desc','$c_id','$price','$file')";

if(mysqli_query($con,$sql)){
  echo "<script>alert('Record Inserted')</script>";
}else{
    echo "<script>alert('Not Inserted')</script>";
}

}


?>
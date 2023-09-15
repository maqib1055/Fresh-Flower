<?php
session_start();
include('connect.php');
$type = $_SESSION['type'];
if($type == 1){
    echo "<script>window.location.href='admin_dashboard.php'</script>";
}else{
    echo "<script>window.location.href='login.php'</script>";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <?php include('admin_navbar.php');?>
   
   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone#</th>
                    <th scope="col">Address</th>
                    <th scope="col">Pay mode</th>
                    <th scope="col">Orders</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `order_detail`";
                    $user_result = mysqli_query($con,$sql);
                    while($user_fetch=mysqli_fetch_assoc($user_result)){
                        echo"
                        <tr>
                        <td>$user_fetch[order_id]</td>
                        <td>$user_fetch[full_name]</td>
                        <td>$user_fetch[phone]</td>
                        <td>$user_fetch[address]</td>
                        <td>$user_fetch[pay_mode]</td>
                        <td> 
                        <table class='table text-center'>
                        <thead>
                          <tr>
                            <th scope='col'>Item Name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Quantity</th>
                          </tr>
                        </thead>
                        <tbody>";
                        $sql1 = "SELECT * FROM `order_detail2` WHERE `order_id`='$user_fetch[order_id]'";
                        $order_result = mysqli_query($con,$sql1);
                        while($order_fetch=mysqli_fetch_assoc($order_result)){
                            echo"<tr>
                                   <td>$order_fetch[p_name]</td>
                                   <td>$order_fetch[price]</td>
                                   <td>$order_fetch[qty]</td>
                                 </tr>";
                        }
                        echo"
                        </tbody>
                        </table>
                        </td>
                      </tr>";
                    }
                    ?>
                  
                  
                </tbody>
              </table>

        </div>
    </div>
   </div>
</body>
</html>


<?php
session_start();
  $p_name = $_GET['p_name'];
  $p_sku = $_GET['sku'];
  $p_desc = $_GET['p_desc'];
  $p_price = $_GET['price'];
  $p_qty = $_GET['p_qty'];
  $p_total = $_GET['p_total'];
  $p_image = $_GET['image'];
 
  $cart = $_SESSION['cart'];
  $_SESSION['cart'][$p_sku] = array("id"=>$p_sku, "name"=>$p_name, "desc"=>$p_desc, "price"=>$p_price, "qty"=>$p_qty, "total"=>$p_total, "image"=>$p_image,);
  
 print_r ($cart);
?>
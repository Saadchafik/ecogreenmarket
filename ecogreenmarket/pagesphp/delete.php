<?php
session_start();
$con=mysqli_connect('localhost','root','','ecogreenmarketdb');
$id = $_GET['product_id'];
$sql = "DELETE FROM cart_details WHERE product_id='$id';";
$result = mysqli_query($con,$sql);
header("location:../index.php?page=panier");
?>

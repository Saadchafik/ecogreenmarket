<?php
session_start();
$con=mysqli_connect('localhost','root','','ecogreenmarketdb');
$id = $_GET['product_id'];
$sql = "INSERT INTO cart_details (product_id, user_id) VALUES ('$id', '".$_SESSION['user_id']."');";
$result = mysqli_query($con,$sql);
header("location:../index.php?page=panier");
?>

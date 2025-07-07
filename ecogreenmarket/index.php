<?php 
  session_start();
  include_once "pagesphp/conn.php";

  $db= connexion();
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>



     <!--Fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<!--Login links-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	
<link rel="stylesheet" href="style/login.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     
  
    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon"  type="image/jpg" href="images/main logo.png">
      <!-- Aos Link-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style/mainPage.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/general.css">
    <link rel="stylesheet" href="style/store.css">
    <link rel="stylesheet" href="style/deals.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/aboutUs.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/panier.css">
    <link rel="stylesheet" href="style/footer.css">

</head>

<body>
<?php
   include("header.php");

   if(isset($_GET['page']))
   {
    include($_GET['page'].".php");
   }
   else
   {
    ?>
 <main>
    <!--First page -->
    <?php 
    if(isset($_SESSION['username']))
    {
      ?>
       <script> alert("Hello <?php echo $_SESSION['username'];?>")</script>
      <?php
    }
    ?>
   <div class="firstPage">
    <img class="firstPageImg" src="images/format carrée.png" alt="">
    <div class="firstPageP"> <p class="IndexPub" >Take the  <mark>chance</mark> now!!!</p> <br> 
     <a href="index.php?page=deals"><button class="dealsBtn"  type="button"> Deals</button></a>
    </div>
    <img class="firstPageImg" src="images/format carrée.png" alt="">
   </div>
  <!--Slider -->
   <h1 class="sliderH1" data-aos="fade-right"  data-aos-duration="500"> Visit our Store</h1> 
   <?php 
     include_once "pagesphp/slider.php";
    ?>
   
   <a href="index.php?page=store"> <button data-aos="fade-right" data-aos-duration="500" class="sliderBtn" type="button"> View all</button></a> 
     
   <?php 
      include("videoPub.php")
   ?>
  </main>

<?php
   }
   ?>

 

</body>
<?php 
  include("footer.php")
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="script/aos.js"></script>


</script>
</html>

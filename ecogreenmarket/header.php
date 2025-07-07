
   <!--Header-->
   <header data-aos="fade-down" data-aos-duration="1000">
    <span><a href="mainPage.html"><img id="headerLogo"  src="images/main logo.png" alt="LOGO"> </a>
    </span>
    <!--navBar-->
    <nav >
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=store">Store</a></li>
        <li><a href="index.php?page=deals">Deals</a></li>
        <li><a href="index.php?page=contactUs">Contact Us</a></li>
        <li><a href="index.php?page=about">About Us </a></li>
        
        
      </ul>
    </nav>
    <div class="thirdSide"> 
      <a href="index.php?page=login"> <img  id="profil-icon"  src="icons/profil.svg" > </a>
      <div style="position: relative;">
        <a href="index.php?page=panier"><img class="icons" id="cart-icon" src="icons/cart.svg" alt="cart"></a>
        <?php 
       
          $con=mysqli_connect('localhost','root','','ecogreenmarketdb');
          $user_id=$_SESSION['user_id'];
          $select_query_cart="select product_id from cart_details where user_id='".$_SESSION['user_id']."';";
          $result_query_cart=mysqli_query($con,$select_query_cart);
          while($row_cart=mysqli_fetch_assoc($result_query_cart)){
              $cart_id[]= $row_cart['product_id'];
          }
          $num_of_rows=mysqli_num_rows($result_query_cart);

          if(isset($_GET['username'])) {
          ?>
            <span id="total_panier">0</span>
          <?php
          } else {
            ?>
            <span id="total_panier"><?php echo $num_of_rows?></span>
            <?php
          }
            ?>
        <span id="total_panier"></span>
      </div>
       
    </div>
    <!--Cart-->
  
       
  </header> 

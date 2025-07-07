<?php 
    $articles = $db->prepare("SELECT * FROM `products` WHERE deal=1");
    $articles->execute();
    $lesarticles = $articles->fetchAll();

        ?>

<div class="dealsCont"> 
<?php 

foreach ($lesarticles as $article) { 

?>
<div class="thedeal"  data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <img src="images/<?php echo $article['photo']; ?>.png" >
            <h1><?php echo $article['name']?></h1>
            
            <p class="price"> <?php echo $article['price']?> MAD</p>
            <a href="pagesphp/addtocart.php?product_id=<?php echo $article['product_id']; ?>"><button id="addPanBtn"  type="button"> ADD</button></a>
            
            
            </div>
            <?php 
}
            ?>





</div>




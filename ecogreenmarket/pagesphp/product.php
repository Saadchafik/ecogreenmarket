<?php 
    $articles = $db->prepare("SELECT * FROM `products`");
    $articles->execute();
    $lesarticles = $articles->fetchAll();

        ?>
          
 
    <!--Store Producats-->

    <div class="storeGrid">
    <?php                      
                            foreach ($lesarticles as $article) {
                                ?>
                                <div class="produitCont" data-aos="fade-up" >
                                <img src="images/<?php echo $article['photo']; ?>.png" alt="Article Image"/>
                                  <h1><?php echo $article['name']?></h1>
                                <p class="price"><?php echo $article['price'] ?> MAD</p>
                                <a href="pagesphp/addtocart.php?product_id=<?php echo $article['product_id']; ?>"><button id="addPanBtn"   type="button" >ADD</button></a>
                                
                                
                            </div>

        <?php                      
                            }
                                ?>
      
        
      </div>
     
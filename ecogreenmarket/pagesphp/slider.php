<?php 
    $images = $db->prepare("SELECT * FROM `products`");
    $images->execute();
    $images = $images->fetchAll();

        ?>
        <a href="index.php?page=store"> <div class="Slider" data-aos="fade-up" data-aos-duration="5000" > 
         <div class="slide-Track">
         <?php                      
                            foreach ($images as $image) {
                                ?>
                                 


     <div class="SlidCont"><img src="images/<?php echo $image['photo'];?>.png" alt="Sliderimgs"></div>
    
    
     
   

       <?php 
                            }
       ?>
        </div>
    </div> </a>
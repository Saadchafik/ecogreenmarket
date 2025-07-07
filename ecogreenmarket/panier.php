<main>
    <div class="cart-container" data-aos="fade-up" data-aos-duration="1500">
        <h1> Hello <?php echo $_SESSION['username'];?> this is your Shopping Cart</h1>
        <?php
                            $con=mysqli_connect('localhost','root','','ecogreenmarketdb');
                            $user_id=$_SESSION['user_id'];
                            $select_query_cart="select product_id from cart_details where user_id='".$_SESSION['user_id']."';";
                            $total_price=0;
                            $result_query_cart=mysqli_query($con,$select_query_cart);
                            while($row_cart=mysqli_fetch_assoc($result_query_cart)){
                                $cart_id[]= $row_cart['product_id'];
                            }
                            $num_of_rows=mysqli_num_rows($result_query_cart);
                            if($num_of_rows>0){
                                $strMissing = implode(',', $cart_id);
                                $select_query="select * from products where product_id IN (".$strMissing.") ORDER BY RAND()";
                                $result_query=mysqli_query($con,$select_query);
                                while($row=mysqli_fetch_assoc($result_query)){
                                    $product_price=array($row['price']);
                                    $product_values=array_sum($product_price);
                                    $total_price+=$product_values;
                            ?>
                                    <div class="cart-item" data-aos="fade-up" data-aos-duration="3000">
                                        <img src="images/<?php echo ($row['photo'])?>.png" alt="Product 1">
                                        <div class="item-details">
                                            <p class="item-name"><?php echo ($row['name']);?></p>
                                            <p class="item-price">MAD<?php echo ($row['price']);?></p>
                                            <a href="pagesphp/delete.php?product_id=<?php echo $row['product_id']; ?>"><button id="removeBtn">Remove</button></a>
                                            
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                            ?>
        <div class="cart-total">
          <p>Total: <?php echo $total_price;?> MAD</p>
        </div>
        <button class="checkout-button">Buy</button>
    </div>
    </main>

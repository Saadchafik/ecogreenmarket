									<!--Login-->
									<form class="center-wrap" method="post">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" class="form-style" name="user_mail" placeholder="Email">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" name="user_password" placeholder="Password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input id="SubmitLogin" type="submit" class="form-control btn-danger" value="Submit" name="user_info">
                   
				      					</div>
			      					</div>
</form>

<?php
        $con=mysqli_connect('localhost','root','','ecogreenmarketdb');
        if(isset($_POST['user_info'])){
            $user_mail=$_POST['user_mail'];
            $user_pass=$_POST['user_password'];

            $select_query="select * from user_table where user_email='$user_mail'";
            $result_query=mysqli_query($con,$select_query);
            $rows_count=mysqli_num_rows($result_query);
            $row_data=mysqli_fetch_assoc($result_query);
            // check if user exists
            if ($rows_count>0) {
                $_SESSION['username']= $row_data['username'];
                $_SESSION['user_id']= $row_data['user_id'];
                header("Location: index.php");
                
            } else {
                echo "<script>alert('Invalid mail')</script>";
            }
        }
		
?>
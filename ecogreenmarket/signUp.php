


<?php
        $con=mysqli_connect('localhost','root','','ecogreenmarketdb');
        if(isset($_POST['sign-up'])){
            $username= $_POST['fullName'];
            $user_mail=$_POST['email'];
            $user_pass=$_POST['password'];
						$user_phone=$_POST['phoneNumber'];

            $select_query="select * from user_table where user_email='$user_mail'";
            $result_query=mysqli_query($con,$select_query);
            $rows_count=mysqli_num_rows($result_query);
            $row_data=mysqli_fetch_assoc($result_query);
            // check if user exists
            if ($rows_count==0) {
                $insert_query="insert into user_table (username,user_email,user_password,phone_number) values ('$username','$user_mail','$user_pass','$user_phone')";
                
                $result=mysqli_query($con,$insert_query);
                if($result){
                    echo "<script>alert('Sucessfully registered')</script>";
                }
            } else {
                echo "<script>alert('Invalid mail')</script>";
            }
						echo "<script>alert(Welcome '$username')</script>";
        }
?>
<!--sign up-->

<form class="card-back" method="post" >
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" class="form-style" placeholder="Full Name" name="fullName">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="tel" class="form-style" placeholder="Phone Number" name="phoneNumber">
												<i class="input-icon uil uil-phone"></i>
											</div>	
                      <div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Email" name="email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input id="SIGNUP" type="submit" class="form-control btn-danger" value="register" name="sign-up" >
				      					</div>
			      					</div>
			      				</div>
			      			</div>
</form>


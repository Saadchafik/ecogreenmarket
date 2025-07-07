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




   

<main>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span style="font-weight: 900;">Log In </span><span style="font-weight: 900;">Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
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
  include_once("signUp.php")
?>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</main>



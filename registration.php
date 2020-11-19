<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>
<?php  include "includes/navigation.php"; ?>

<div class="container">
<?php 

	$msg="";
	if(isset($_POST['register_user'])){
		$user_name = $_POST['username'];
		$user_email = $_POST['useremail'];
		$user_password = $_POST['userpassword'];
		
		if(!empty($user_name) && !empty($user_email) && !empty($user_password)){
		
		$user_name = mysqli_real_escape_string($conn,$user_name);
		$user_email = mysqli_real_escape_string($conn,$user_email);
		$user_password = mysqli_real_escape_string($conn,$user_password);
				
		$user_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));	
		
		$query = "INSERT INTO user (user_name,user_email,user_password,user_role) "; 
		$query .= "VALUES ('$user_name','$user_email','$user_password','Subscriber')";
		$register_user = mysqli_query($conn, $query);
		
		$msg = "Registered Successfully!!!";
		}
		elseif(empty($user_name) && empty($user_email) && empty($user_password)){
			$msg = "Fields cannot be empty!!!";
		}	
	}
?>
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
				<?php echo "<h5><center>$msg</center></h5>";	 ?>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <label for="useremail" class="sr-only">Email</label>
                            <input type="email" name="useremail" id="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                         <div class="form-group">
                            <label for="userpassword" class="sr-only">Password</label>
                            <input type="password" name="userpassword" id="key" class="form-control" placeholder="Password" required>
                        </div>
                
                        <input type="submit" name="register_user" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
					<hr>
					<br><br>
					<?php echo "<center><a href='index.php'><b>Click here to login</b></a></center>"; ?>
                 
                </div>
            </div> 
        </div> 
    </div> 
</section>
<hr>






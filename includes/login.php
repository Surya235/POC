<?php include("db.php");?>
<?php session_start();?>
<?php
	if(isset($_POST['login'])){
		$username = $_POST['user_name'];
		$userpassword = $_POST['user_password'];
		
		$username = mysqli_real_escape_string($conn,$username);
		$userpassword = mysqli_real_escape_string($conn,$userpassword);		
				
		$query = "SELECT * FROM user WHERE user_name='$username'";
		$user = mysqli_query($conn, $query);
		
		if(!mysqli_num_rows($user)==0){
					
			while($row = mysqli_fetch_assoc($user)){
				$user_id = $row['user_id'];
				$user_name = $row['user_name'];
				$user_password = $row['user_password'];
				$user_role = $row['user_role'];	
				
				if(password_verify($userpassword, $user_password)){
					$_SESSION['userid'] = "$user_id";
					$_SESSION['username'] = "$user_name";
					$_SESSION['userrole'] = "$user_role";
			
					header("Location: ../admin/admin.php");
				}
				else{
					echo "<br><br><br><br><center><h3>Enter valid username or password..</h3></center>";
					echo "<center><a href='../index.php'>Click here to login </a></center>";
				}
			}
		}
		else{
			echo "<br><br><br><br><center><h3>Enter valid username or password</h3></center>";
			echo "<center><a href='../index.php'>Click here to login </a></center>";
		}
	}
?>
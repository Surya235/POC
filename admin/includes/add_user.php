<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="user_name">User Name</label>
		<input type="text" class="form-control" name="user_name" required>
	</div>
	
	<div class="form-group">
		<label for="author">E-mail</label>
		<input type="text" class="form-control" name="user_email" required>
	</div>
	
	<div class="form-group">
		<label for="user_password">Password</label>
		<input type="password" class="form-control" name="user_password" required>
	</div>
	
	<div class="form-group">
		<label for="user_role">Choose User Role</label><br>
		<select name ="user_role" required>
			<option>User Role</option>
			<option value="Admin">Admin</option>
			<option value="Subscriber">Subscriber</option>
		</select>
	</div><br>
		
	<div class="form-group">
		<label for="image">Image</label>
		<input type="file" class="form-control" name="image" required>
	</div>
	
	<div class="form-group">		
		<input type="submit" class="btn btn-primary" name="submit_user" value="submit">
	</div>

</form>

<?php 
	if(isset($_POST['submit_user'])){
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		$user_role = $_POST['user_role'];
		$user_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));	
		
		$user_image = $_FILES['image']['name'];
		$user_image_temp = $_FILES['image']['tmp_name'];
		move_uploaded_file($user_image_temp,"../images/$user_image");
		
		$query = "INSERT INTO user (user_name,user_email,user_password,user_role,user_image) "; 
		$query .= "VALUES ('$user_name','$user_email','$user_password','$user_role','$user_image')";
		$add_user = mysqli_query($conn, $query);
		header("Location: user.php?source=view_all_user");
	}
?>
<?php 
	if(isset($_GET['update_user_id'])){
		$update_user_id = $_GET['update_user_id'];
		$query = "SELECT * FROM user WHERE user_id='$update_user_id'";
		$user_update_query = mysqli_query($conn, $query);
		
		while($row = mysqli_fetch_assoc($user_update_query)){
			$user_id = $row['user_id'];
			$user_name = $row['user_name'];
			$user_email = $row['user_email'];
			$user_password = $row['user_password'];
			$user_image = $row['user_image'];
			$user_role = $row['user_role'];
		}
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="user_name">User Name</label>
		<input type="text" value='<?php echo "$user_name";?>' class="form-control" name="user_name" required>
	</div>
	
	<div class="form-group">
		<label for="author">E-mail</label>
		<input type="text" value='<?php echo "$user_email";?>' class="form-control" name="user_email" required>
	</div>
	
	<div class="form-group">
		<label for="user_password">Password</label>
		<input type="password" autocomplete='off' class="form-control" name="user_password" >
	</div>
	
	<div class="form-group">
		<label for="user_role">Choose User Role</label><br>
		<select name ="user_role">
			<option><?php echo "$user_role";?></option>
			<option value="Admin">Admin</option>
			<option value="Subscriber">Subscriber</option>
		</select>
	</div><br>
		
	<div class="form-group">
		<img src='../images/<?php echo "$user_image";?>' height=150 width=150 alt="image" ><br><br>
		<label for="image">Image</label>
		<input type="file" class="form-control" name="image" required>
	</div>
	
	<div class="form-group">		
		<input type="submit" class="btn btn-primary" name="update_user" value="Update">
	</div>

</form>
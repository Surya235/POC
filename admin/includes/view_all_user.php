<table class = "table table-bordered">
	<tr>
		<th> Id </th>
		<th> User Name </th>
		<th> E-mail </th>
		<th> image </th>
		<th> Role </th>
		<th> Admin </th>
		<th> Subscriber </th>
		<th> Edit </th>
		<th> Delete </th>
	</tr>
		
	<?php 
	$query = "SELECT * FROM user";
	$user = mysqli_query($conn, $query);
	
	while($row = mysqli_fetch_assoc($user)){
		$user_id = $row['user_id'];
		$user_name = $row['user_name'];
		$user_email = $row['user_email'];
		$user_image = $row['user_image'];
		$user_role = $row['user_role'];
		
		echo
		"<tr>
			<td> $user_id </td>
			<td> $user_name </td>
			<td> $user_email </td>
			<td> <img src='../images/$user_image' alt='img' height=100 width=100> </td>
			<td> $user_role </td>
			<td><a href = 'user.php?admin_user=$user_id'>Admin</a></td>
			<td><a href = 'user.php?subscriber_user=$user_id'>Subscriber</a></td>
			<td><a href = 'user.php?source=update_user&update_user_id=$user_id'>Edit</a></td>
			<td><a href = 'user.php?delete_user=$user_id'>Delete</a></td>
		</tr>";		
	}
	?>
</table>     


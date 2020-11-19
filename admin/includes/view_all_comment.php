<table class = "table table-bordered">
	<tr>
		<th> Id </th>
		<th> Post Title </th>
		<th> Commenter  </th>
		<th> E-mail </th>
		<th> Content </th>
		<th> Date </th>
		<th>Status </th>
		<th> Approve </th>
		<th> Unapprove </th>
		<th> Edit </th>
		<th> Delete </th>
	</tr>
		
	<?php 
	$query = "SELECT * FROM comment";
	$comment = mysqli_query($conn, $query);
	
	while($row = mysqli_fetch_assoc($comment)){
		$comment_id = $row['comment_id'];
		$comment_post_id = $row['comment_post_id'];
		$comment_commenter = $row['comment_commenter'];
		$comment_email = $row['comment_email'];
		$comment_content = $row['comment_content'];
		$comment_date = $row['comment_date'];
		$comment_status = $row['comment_status'];
		
		$query = "SELECT * FROM posts where post_id='$comment_post_id'";
		$post = mysqli_query($conn, $query);
		
		while($row = mysqli_fetch_assoc($post)){
			$post_title = $row['post_title'];
		
		echo
		"<tr>
			<td> $comment_id </td>
			<td> $post_title </td>
			<td> $comment_commenter </td>
			<td> $comment_email </td>
			<td> $comment_content </td>
			<td> $comment_date </td>
			<td> $comment_status </td>
			<td><a href = 'comment.php?approve_comment_id=$comment_id'>Approve</a></td>
			<td><a href = 'comment.php?unapprove_comment_id=$comment_id'>Unapprove</a></td>
			<td><a href = 'comment.php?source=update_comment&update_comment_id=$comment_id'>Edit</a></td>
			<td><a href = 'comment.php?delete_comment=$comment_id'>Delete</a></td>
		</tr>";
		}
	}
	?>
</table>     


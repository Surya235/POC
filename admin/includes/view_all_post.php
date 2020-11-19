<table class = "table table-bordered">
	<tr>
		<th> Id </th>
		<th> Category </th>
		<th> Title  </th>
		<th> Author</th>
		<th> Date </th>
		<th> Image </th>
		<th> Content </th>
		<th> Tags </th>
		<th> Comment Count </th>
		<th> Edit </th>
		<th> Delete </th>
	</tr>
		
	<?php 
	$query = "SELECT * FROM posts";
	$post = mysqli_query($conn, $query);
	
	while($row = mysqli_fetch_assoc($post)){
		
		$post_id = $row['post_id'];
		$post_category = $row['post_category_id'];
		$post_title = $row['post_title'];
		$post_author = $row['post_author'];
		$post_date = $row['post_date'];
		$post_image = $row['post_image'];
		$post_content = $row['post_content'];
		$post_tags = $row['post_tags'];
		$post_comment_count = $row['post_comment_count'];
		
		
		$category_query = "SELECT * FROM category WHERE category_id='$post_category'";
			$category = mysqli_query($conn, $category_query);
			while($row = mysqli_fetch_assoc($category)){
				
				$category_name = $row["category_name"];
			
		echo
		"<tr>
			<td> $post_id </td>
			<td> $category_name </td>
			<td> $post_title </td>
			<td> $post_author </td>
			<td> $post_date </td>
			<td><img src = '../images/$post_image' width='150' height='100' alt='image'> </td>
			<td> $post_content </td>
			<td> $post_tags </td>
			<td> $post_comment_count </td>
			<td><a href = 'posts.php?source=update_post&update_post_id=$post_id'>Edit</a></td>
			<td><a href = 'posts.php?delete_post=$post_id'>Delete</a></td>
		</tr>";
		}	
		
	} ?>
</table>     


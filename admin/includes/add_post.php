<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="title">Post Title</label>
		<input type="text" class="form-control" name="title">
	</div>
	
	<div class="form-group">
		<label for="category">Post Category</label><br>
		<select name ="category" >
			<option>Choose Category</option>
			<?php
			$query = "SELECT * FROM category";
			$category = mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($category)){
				$category_id = $row['category_id'];
				$category_name = $row["category_name"];
				
			echo "<option  value='$category_id'>$category_name</option>";
			}
			?>
		</select>
	</div>
	
	<div class="form-group">
		<label for="author">Post Author</label>
		<input type="text" class="form-control" name="author" required>
	</div>
	
	<div class="form-group">
		<label for="tags">Post Tags</label>
		<input type="text" class="form-control" name="tags" required>
	</div>
	
	<div class="form-group">
		<label for="image">Post Image</label>
		<input type="file" class="form-control" name="image" required>
		
	</div>
	
	<div class="form-group">
		<label for="content">Post Content</label>
		<textarea type="text" class="form-control" name="content" cols="30" rows="10" required>
		</textarea>
	</div>
	
	<div class="form-group">		
		<input type="submit" class="btn btn-primary" name="submit_post" value="submit">
	</div>

</form>


<?php 
	if(isset($_POST['submit_post'])){
		$post_title = $_POST['title'];
		$post_category = $_POST['category'];
		$post_author = $_POST['author'];
		$post_date = date('d-m-y');
		$post_tags = $_POST['tags'];
		$post_content = $_POST['content'];
		$post_comment_count = 0;
		
		$post_image = $_FILES['image']['name'];
		$post_image_temp = $_FILES['image']['tmp_name'];
		move_uploaded_file($post_image_temp,"../images/$post_image");
		
		$query = "INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count) "; 
		$query .= "VALUES ('$post_category','$post_title','$post_author',now(),'$post_image','$post_content','$post_tags','$post_comment_count')";
		$add_post = mysqli_query($conn, $query);
		header("Location: posts.php?source=view_all_post");
	}
?>
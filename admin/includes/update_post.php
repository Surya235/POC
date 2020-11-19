<?php 
	$update_post_id = $_GET['update_post_id'];
	$query = "SELECT * FROM posts WHERE post_id='$update_post_id'";
	$post_update_query = mysqli_query($conn, $query);
	
	while($row = mysqli_fetch_assoc($post_update_query)){
		$post_category = $row['post_category_id'];
		$post_title = $row['post_title'];
		$post_author = $row['post_author'];
		$post_date = $row['post_date'];
		$post_content = $row['post_content'];
		$post_image = $row['post_image'];
		$post_tags = $row['post_tags'];
		
	}

	$category_query = "SELECT * FROM category WHERE category_id='$post_category'";
	$category = mysqli_query($conn, $category_query);
	while($row = mysqli_fetch_assoc($category)){
	$post_category_name = $row["category_name"];
	$post_category_id = $row["category_id"];
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="title">Post Title</label>
		<input type="text" value= '<?php echo "$post_title"; ?>' class="form-control" name="title" required>
	</div>
	
	<div class="form-group">
		<label for="category">Post Category</label><br>
		<select name ="category" required>
			<option value = '<?php echo $post_category_id; ?>'><?php echo $post_category_name; ?></option>
			<?php
			$query = "SELECT * FROM category ";
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
		<input type="text" value= '<?php echo "$post_author"; ?>' class="form-control" name="author" required>
	</div>
	
	<div class="form-group">
		<label for="tags">Post Tags</label>
		<input type="text" value= '<?php echo "$post_tags"; ?>' class="form-control" name="tags" required>
	</div>
	
	<div class="form-group">
		<label for="image">Post Image</label><br>
		<img src='../images/<?php echo "$post_image"; ?>' width=220 height=150 required>
	
		<input type="file"  class="form-control" name="image" required>
		
	</div>
	
	<div class="form-group">
		<label for="content">Post Content</label>
		<textarea type="text" class="form-control" name="content" cols="30" rows="10" required><?php echo "$post_content"; ?></textarea>
	</div>
	
	<div class="form-group">		
		<input type="submit" class="btn btn-primary" name="update_post" value="Update">
	</div>

</form>


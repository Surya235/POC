<form action = "" method = "post">
	<?php 
		if(isset($_GET['edit'])){
			$edit_id = $_GET['edit'];
			$query = "SELECT * FROM category WHERE category_id = '$edit_id'";
			$edit_category = mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($edit_category)){
			$edit_cat_title = $row['category_name'];											
			}
		}
	?>
	<div class = "form-group">		
		<label for = "cat_edit_title">Edit Category</label>
		<input class = "form-control" type = "text" name = "cat_edited_title" value = "<?php if(isset($edit_cat_title)){echo $edit_cat_title;}?>  ">
	</div>	
	<div class = "form-group">
		<input class = "btn btn-primary" type = "submit" name = "update" value = "Update">
	</div>
</form>
							
<?php
	if(isset($_POST['update'])){
		$edited_cat_id = $_GET['edit'];
		$edited_cat_title = $_POST['cat_edited_title'];
		$query = "UPDATE category SET category_name = '$edited_cat_title' WHERE category_id = '$edited_cat_id'";
		$edited_category = mysqli_query($conn, $query);
	}
?>
	
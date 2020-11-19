<?php include("includes/header.php");?>
    <div id="wrapper">
	
        <!-- Navigation -->		
		<?php include("includes/navigation.php");?>
		
        <div id="page-wrapper">
            <div class="container-fluid">			
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hello, I'm Admin
                        </h1>
						
						<?php
						if(isset($_POST['submit_add_cat'])){
							$cat = $_POST['cat_title'];
							
							if($cat == "" && empty($cat)){
								echo "<h3>The field should not be empty</h3>";
							}
							else{
							$query = "INSERT INTO category (category_name) VALUE ('$cat')";
							$add_category = mysqli_query($conn, $query);
							}
						}
						?> 
						
						<div class = "col-lg-6">
							<form action = "" method = "post">
								<div class = "form-group">		
									<label for = "cat_title">Add Category</label>
									<input class = "form-control" type = "text" name = "cat_title" placeholder = "Add category" required>
								</div>	
								<div class = "form-group">
									<input class = "btn btn-primary" type = "submit" name = "submit_add_cat" value = "submit">
								</div>
							</form>
							<br>	
							
							<!-- Edit Category -->
							<?php
							if(isset($_GET['edit'])){
								 include("includes/update_category.php");
							}
							?>
                        </div>
						
						
						<!-- Delete Category -->
						<?php 
							if(isset($_GET['delete'])){
								$del_id = $_GET['delete'];
								$query = "DELETE FROM category WHERE category_id = '$del_id'";
								$category = mysqli_query($conn, $query);
								header("Location:category.php");
							}
						?>
						
						<div class = "col-lg-6">
							<table class = "table table-bordered">
								<tr>
									<th>Category id</th>
									<th>Category name</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
								
								<?php 
								$query = "SELECT * FROM category";
								$category = mysqli_query($conn, $query);
								
								while($row = mysqli_fetch_assoc($category)){
									$category_name = $row["category_name"];
									$category_id = $row["category_id"];
																	
								echo
									"<tr>
										<td> $category_id </td>
										<td> $category_name </td>
										<td><a href = 'category.php?edit=$category_id'>Edit</a></td>
										<td><a href = 'category.php?delete=$category_id'>Delete</a></td>
									</tr>";
								} ?>								
							</table>
						</div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include("includes/footer.php");?>   





				 
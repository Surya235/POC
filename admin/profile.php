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
							if(isset($_SESSION['userid'])){
								$user_id = $_SESSION['userid'];
								$query = "SELECT * FROM user WHERE user_id='$user_id'";
								$user_update_query = mysqli_query($conn, $query);
								
								while($row = mysqli_fetch_assoc($user_update_query)){
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
								<img src='../images/<?php echo "$user_image";?>' height=150 width=150 alt="image" >								
							</div>
							
							<div class="form-group">
								<label for="user_name">User Name</label>
								<input type="text" value='<?php echo "$user_name";?>' class="form-control" name="user_name">
							</div>
							
							<div class="form-group">
								<label for="author">E-mail</label>
								<input type="text" value='<?php echo "$user_email";?>' class="form-control" name="user_email">
							</div>							
														
						</form>		
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

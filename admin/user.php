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
							if(isset($_GET['source'])){
								$source = $_GET['source'];
								switch($source){
									case "view_all_user":
									include("includes/view_all_user.php");
									break;
									
									case "update_user":
									include("includes/update_user.php");
									break;
									
									case "add_user":
									include("includes/add_user.php");
									break;									
								}																
							}
						?>
						
						
						<?php 
							//update_comment
							if(isset($_POST['update_user'])){
								$user_id = $_GET['update_user_id'];
								$user_name = $_POST['user_name'];
								$user_email = $_POST['user_email'];
								$user_password = $_POST['user_password'];
								$user_role = $_POST['user_role'];
								$user_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));	
								
								$user_image = $_FILES['image']['name'];
								$user_image_temp = $_FILES['image']['tmp_name'];
								move_uploaded_file($user_image_temp,"../images/$user_image");
		
								$query = "UPDATE user SET user_name = '$user_name',user_email = '$user_email',"; 
								$query .= "user_password = '$user_password',user_role = '$user_role',user_image = '$user_image' ";
								$query .= "WHERE user_id='$user_id'";
								$update_user = mysqli_query($conn, $query);
								header("Location: user.php?source=view_all_user");
							}
						?>
						
						<?php
							//Delete Comment
							if(isset($_GET['delete_user'])){
								$delete_user_id = $_GET['delete_user'];
								$query = "DELETE FROM user WHERE user_id = '$delete_user_id'";
								$user = mysqli_query($conn, $query);
								header("Location: user.php?source=view_all_user");
							}
						?>
						
						<?php
							//Unapprove Comment
							if(isset($_GET['admin_user'])){
								$admin_user_id = $_GET['admin_user'];
								
								$query = "UPDATE user SET user_role='Admin' "; 
								$query .= "WHERE user_id='$admin_user_id'";
								$admin_user = mysqli_query($conn, $query);
								header("Location: user.php?source=view_all_user");
							}
						?>
						
						<?php
							//subscriber_user
							if(isset($_GET['subscriber_user'])){
								$subscriber_user_id = $_GET['subscriber_user'];
								
								$query = "UPDATE user SET user_role='Subscriber' "; 
								$query .= "WHERE user_id='$subscriber_user_id'";
								$subscriber_user = mysqli_query($conn, $query);
								header("Location: user.php?source=view_all_user");
							}
						?>						
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

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
									case "view_all_comment":
									include("includes/view_all_comment.php");
									break;
									
									case "update_comment":
									include("includes/update_comment.php");
									break;
									
								}																
							}
						?>
						
						
						<?php 
							//update_comment
							if(isset($_POST['update_comment'])){
								$comment_id = $_GET['update_comment_id'];
								$comment_commenter = $_POST['comment_name'];
								$comment_email = $_POST['comment_email'];
								$comment_content = $_POST['comment_content'];
								
								$query = "UPDATE comment SET comment_commenter='$comment_commenter',comment_email='$comment_email',"; 
								$query .= "comment_content='$comment_content' ";
								$query .= "WHERE comment_id='$comment_id'";
								$update_comment = mysqli_query($conn, $query);
								header("Location: comment.php?source=view_all_comment");
							}
						?>
						
						
						<?php
							//Delete Comment
							if(isset($_GET['delete_comment'])){
								$delete_comment_id = $_GET['delete_comment'];
								$query = "DELETE FROM comment WHERE comment_id = '$delete_comment_id'";
								$comment = mysqli_query($conn, $query);
								header("Location: comment.php?source=view_all_comment");
							}
						?>
						
						<?php
							//Approve Comment
							if(isset($_GET['approve_comment_id'])){
								$approve_comment_id = $_GET['approve_comment_id'];
								
								$query = "UPDATE comment SET comment_status='Approve' "; 
								$query .= "WHERE comment_id='$approve_comment_id'";
								$approve_comment = mysqli_query($conn, $query);
								header("Location: comment.php?source=view_all_comment");
							}
						?>
						
						<?php
							//Unapprove Comment
							if(isset($_GET['unapprove_comment_id'])){
								$unapprove_comment_id = $_GET['unapprove_comment_id'];
								
								$query = "UPDATE comment SET comment_status='Unapprove' "; 
								$query .= "WHERE comment_id='$unapprove_comment_id'";
								$approve_comment = mysqli_query($conn, $query);
								header("Location: comment.php?source=view_all_comment");
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

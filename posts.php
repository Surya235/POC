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
									case "add_post":
									include("includes/add_post.php");
									break;
									
									case "view_all_post":
									include("includes/view_all_post.php");
									break;
									
									case "update_post":
									include("includes/update_post.php");
									break;
								}																
							}
						?>
						
						<?php 
							//update_post
							if(isset($_POST['update_post'])){
								$post_id = $_GET['update_post_id'];
								$post_title = $_POST['title'];
								$post_category = $_POST['category'];
								$post_author = $_POST['author'];
								$post_tags = $_POST['tags'];
								$post_content = $_POST['content'];
									echo $post_content;							
								$post_image = $_FILES['image']['name'];
								$post_image_temp = $_FILES['image']['tmp_name'];
								move_uploaded_file($post_image_temp,"../images/$post_image");
								
								$query = "UPDATE posts SET post_category_id='$post_category',post_title='$post_title',post_author='$post_author',"; 
								$query .= "post_image='$post_image',post_content='$post_content',post_tags='$post_tags' ";
								$query .= "WHERE post_id='$post_id'";
								$update_post = mysqli_query($conn, $query);
								if(!$update_post){echo mysqli_error($conn);}
								header("Location: posts.php?source=view_all_post");
							}
						?>
						
						<?php
							//Delete Post
							if(isset($_GET['delete_post'])){
								$delete_post_id = $_GET['delete_post'];
								$query = "DELETE FROM posts WHERE post_id = '$delete_post_id'";
								$category = mysqli_query($conn, $query);
								header("Location: posts.php?source=view_all_post");
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

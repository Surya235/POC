<?php include("includes/header.php"); ?>

<!-- Navigation -->
    <?php include("includes/navigation.php"); ?>
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->
				
		<?php 
			if(isset($_GET['post_det_id'])){
			$post_det_id = $_GET['post_det_id'];	

			$query = "SELECT * FROM posts  WHERE post_id = '$post_det_id'";
			$post_details = mysqli_query($conn, $query);

			while($row = mysqli_fetch_assoc($post_details)){
				$post_title = $row["post_title"];
				$post_author = $row["post_author"];
				$post_date = $row["post_date"];
				$post_image = $row["post_image"];
				$post_content = $row["post_content"];

		?>	

                <!-- Title -->
                <h1><?php echo $post_title ;?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href='author.php?author=<?php echo $post_author;?>'><?php echo $post_author ;?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ;?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/<?php echo $post_image;?>" height=900 width=600 alt="image">

                <hr>

                <!-- Post Content -->
                <p><?php echo $post_content ;?></p>

                <hr>
					<?php }} ?>
                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
		<?php 
			if(isset($_POST['comment_submit'])){
				$post_det_id = $_GET['post_det_id'];
				$comment_name = $_POST['comment_name'];
				$comment_email = $_POST['comment_email'];
				$comment_content = $_POST['comment_content'];

				$query = "INSERT INTO comment (comment_post_id,comment_commenter,comment_email,comment_content,comment_date,comment_status) "; 
				$query .= "VALUES ('$post_det_id','$comment_name','$comment_email','$comment_content',now(),'Unapprove')";
				$add_comment = mysqli_query($conn, $query);

				$query_count="UPDATE posts SET post_comment_count = post_comment_count + 1 ";
				$query_count .= "WHERE post_id='$post_det_id' ";	
				$comment_count = mysqli_query($conn, $query_count);
			}
		?>
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post" role="form">
						<div class="form-group">
							<label for="name">Name</label>
                            <input type="text" name="comment_name" class="form-control" >
                        </div>
						
						<div class="form-group">
							<label for="email">E-Mail</label>
                            <input type="email" name="comment_email" class="form-control">
                        </div>
						
                        <div class="form-group">
							<label for="">Comment</label>
                            <textarea class="form-control" name="comment_content" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="comment_submit">Submit</button>
                    </form>
                </div>
                <hr>
				
		<?php
			if(isset($_GET['post_det_id'])){
			$post_comm_id = $_GET['post_det_id'];
			$query = "SELECT * FROM comment WHERE comment_status='Approve' AND comment_post_id=$post_comm_id";
			$comment = mysqli_query($conn, $query);

			while($row = mysqli_fetch_assoc($comment)){
				$comment_post_id = $row['comment_post_id'];
				$comment_commenter = $row['comment_commenter'];
				$comment_content = $row['comment_content'];
				$comment_date = $row['comment_date'];

			?>	
			<!-- Comment -->
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading"><?php echo $comment_commenter; ?>
						<small> <?php echo $comment_date; ?></small>
					</h4><br>
					<?php echo $comment_content; ?>
					<hr>
				</div>
			</div>
			<?php }} ?>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include("includes/sidebar.php"); ?>

        </div>
        <!-- /.row -->
		
        <hr>
		
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

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
			if(isset($_GET['author'])){
			$author = $_GET['author'];	

			$query = "SELECT * FROM posts  WHERE post_author = '$author'";
			$post_details = mysqli_query($conn, $query);

			while($row = mysqli_fetch_assoc($post_details)){
				$post_id = $row["post_id"];
				$post_title = $row["post_title"];
				$post_author = $row["post_author"];
				$post_date = $row["post_date"];
				$post_image = $row["post_image"];
				$post_content = $row["post_content"];

		?>	

                <!-- Title -->
                <h2>
					<a href="post.php?post_det_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
				</h2>

                <!-- Author  -->
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

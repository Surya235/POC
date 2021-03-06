<?php include("includes/db.php");?>

<!-- header -->
<?php include("includes/header.php"); ?>	
	
	<!-- Navigation -->
    <?php include("includes/navigation.php"); ?>	

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Welcome to the Blog
                </h1>
		<?php
		if(isset($_POST['submit_search'])){
			$search = $_POST['search'];

			$query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
			$search_post = mysqli_query($conn, $query);

			$count = mysqli_num_rows($search_post);
			if($count == 0 ){ 
			echo "<br> <h2>NO RESULT</h2>";
			}
			else{
				while($row = mysqli_fetch_assoc($search_post)){
				$post_id = $row["post_id"];
				$post_title = $row["post_title"];
				$post_author = $row["post_author"];
				$post_date = $row["post_date"];
				$post_image = $row["post_image"];
				$post_content = $row["post_content"];
			?>
			<!--Blog Post -->
			<h2>
				<a href="post.php?post_det_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
			</h2>
			<p class="lead">
				by <a href="author.php?author=<?php echo $post_author;?>"><?php echo $post_author ?></a>
			</p>
			<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
			<hr>
			<img class="img-responsive" src="images/<?php echo $post_image;?>" alt="image">
			<hr>
			<p><?php echo $post_content ?></p>
		<?php } } }?>		
					
			</div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include("includes/sidebar.php"); ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include("includes/footer.php"); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

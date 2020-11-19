
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div class="well">
				<?php 
					if(isset($_GET['update_comment_id'])){
						$update_comment_id = $_GET['update_comment_id'];
						$query = "SELECT * FROM comment WHERE comment_id='$update_comment_id'";
						$comment_update_query = mysqli_query($conn, $query);
						
						while($row = mysqli_fetch_assoc($comment_update_query)){
							$comment_commenter = $row['comment_commenter'];
							$comment_email = $row['comment_email'];
							$comment_content = $row['comment_content'];
						}
					}
				?>
				<h4>Leave a Comment:</h4>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="comment_name" value='<?php echo "$comment_commenter"; ?>' class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="email">E-Mail</label>
						<input type="email" name="comment_email" value='<?php echo "$comment_email"; ?>' class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="">Comment</label>
						<textarea class="form-control" name="comment_content" rows="3" required><?php echo "$comment_content"; ?></textarea>
					</div>
					
					<div class="form-group">		
						<input type="submit" class="btn btn-primary" name="update_comment" value="Update">
					</div>
	
				</form>
			</div>
			<hr>
			
		</div>
	</div>
	<hr>
	
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>

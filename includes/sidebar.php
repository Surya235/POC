<?php include("db.php");?>
<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
					
				<form action = "search.php" method = "post">
					<div class="input-group">						
                        <input type="text" name = "search" class="form-control">
                        <span class="input-group-btn">
                            <button name = "submit_search" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
					</div>					
				</form>
                    <!-- /.input-group -->
                </div>
				
				<!-- Login -->
                <div class="well">
                    <h4>Login</h4>
					
				<form action = "includes/login.php" method = "post">
					<div class="form-group">						
                        <input type="text" name = "user_name" class="form-control" placeholder="Enter the username" required>                        
					</div>
					<div class="input-group">						
                        <input type="password" name = "user_password" class="form-control" placeholder="Enter the password" required>
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary" name = "login" >login
							</button>
						</span>
					</div>					
				</form>
                    <!-- /.input-group -->
                </div>


                <!-- Blog Categories Well -->
                <div class="well">
							
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
								<?php 
								$query = "SELECT * FROM category";
								$category = mysqli_query($conn, $query);
								
								while($row = mysqli_fetch_assoc($category)){
									$category_id = $row["category_id"];
									$category_name = $row["category_name"];
									echo "<li><a href='category.php?categorypost=$category_id'>$category_name</a></li>";
								}
								?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="../index.php">BLOGGING SYSTEM</a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
		<li class="container-fluid">
			<a href="admin.php">Admin Home</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> USER <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
				</li>
			</ul>
		</li>
	</ul>
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#post"><i class="fa fa-fw fa-desktop"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="post" class="collapse">
					<li>
						<a href="./posts.php?source=view_all_post">View all post</a>
					</li>
					<li>
						<a href="./posts.php?source=add_post">Add post</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="category.php"><i class="fa fa-fw fa-align-left"></i> Categories </a>
			</li>
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-male"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="demo" class="collapse">
					<li>
						<a href="./user.php?source=view_all_user">View all User</a>
					</li>
					<li>
						<a href="./user.php?source=add_user">Add User</a>
					</li>
				</ul>
			</li>
			<li >
				<a href="./comment.php?source=view_all_comment"><i class="fa fa-fw fa-file"></i> Comments </a>
			</li>
			<li>
				<a href="profile.php"><i class="fa fa-fw fa-child"></i> Profile</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php session_start();?>
<?php include('../../includes/db.php');?>
<?php
	if(isset($_SESSION['userrole'])){		
	
	$_SESSION['username'] = NULL;
	$_SESSION['userrole'] = NULL;
	
	header("Location: ../../index.php");
	}
?>
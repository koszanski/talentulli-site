<?php
	require "../includes/header.php";
?>

<!DOCTYPE html>
<html>

	<head>
		<?php include ("../includes/includes.php"); ?>
	</head>
<!--this is the landing page for the administrator, the admin panel. while logging in and viewing this page is complete, you can do none of the actual operations.-->

	<body>
		<?php
			if($_GET['adminlogin'] == "successful")
			{
			echo '<div class="alert alert-success" role="alert"> Admin login successful! </div>';
			echo '<div class="alert alert-success" role="danger"> Warning: the admin panel is mostly incomplete. Placeholder pages and login functionality have been left in, however due to time constraints nearly nothing was implemented, as admins have database access anyway via MySQL Workbench. </div>';
			}

			if (!isset($_SESSION['activeAdminLogin'])) {
				header("Location: ../index.php");
    			exit();
			}
		?>

		<div class="row">
		  <div class="col-xs-1-12">
			<div class="card" style="width: 18rem;">
  				<div class="card-body">
  					<h5 class="card-title">Addition operations</h5>
    				<p class="card-text">Operations to add items to the database.</p>
    				<a href="adminadd.php" class="btn btn-primary">Go</a>
  				</div>
			</div>
		  </div>
		  <div class="col-xs-1-12">
		  	<div class="card" style="width: 18rem;">
  				<div class="card-body">
  					<h5 class="card-title">Removal operations.</h5>
    				<p class="card-text">Operations to remove items from the database.</p>
    				<a href="admindel.php" class="btn btn-primary">Go</a>
  				</div>
			</div>
		   </div>
		</div>


	</body>



</html>

<?php
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery-1.12.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="row" style="display:flex;align-items:center;">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<img src="images/logo.png" class="img-responsive" />

			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="text-align:right;">
				Welcome to Learn!

			</div>
		</div>
		<div class="row">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="index.php">Home</a></li>
			      <?php 
			      $qry_top=mysqli_query($con,"select * from table_top_category order by top_category_order asc");
			      while ($rt=mysqli_fetch_array($qry_top)) {
			      	echo ' <li><a href="#">'.$rt["top_category_name"].'</a></li>';
			      }

			      ?>
			    </ul>
			  </div>
			</nav>
		</div>
		<div class="row">

		</div>
	</div>

</body>
</html>
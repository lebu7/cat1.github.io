<!DOCTYPE html>
<html>
<head>
	<title>Months</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/styles.css"> -->
	<style type="text/css">
	body{
		background: #000;
	}
		.bee{
			color:#000;
			font-weight: bolder;
			font-size: 25px;
			}		
			.boo{
				color:green;
				text-transform: uppercase;

			}
		.loww{
			margin-left: 40%;
    		margin-right: 40%;
		    display: table-cell;
		    vertical-align: middle ;
		    position:relative;
				}
		.thumbnail{
					margin:25px;
				}
				.blue{
					margin-left:60px;
				}
	.alert{
			padding-left:3px;
			padding-right:3px;
			padding-top:3px;
			padding-bottom:3px;
			margin-left:auto;
			margin-right:auto;
			}
			.vuu{
			padding-left:0px;
			padding-right:0px;
			}
	</style>
</head>
<body>
	<?php 
		$year = date("Y");
		$feb;
		if ($year % 4 == 0) {
			$feb = 29;
		}
		else{
			$feb = 28;
		}
				$months = [
			"january" => 31,
			"february" => $feb,
			"march" => 31,
			"april" => 30,
			"may" => 31,
			"june" => 30,
			"july" => 31,
			"august" => 31,
			"september" => 30,
			"october" => 31,
			"november" => 30,
			"december" => 31
		];

		function option($monthsArray){
			foreach ($monthsArray as $month => $days) {
				$monthUpper = strtoupper($month);
				echo "<option value='$month'>$monthUpper</option>";
			}
		}

	 ?>

	 <div class="jumbotron container ">
	 	<div class="text-center bone">
	 	<div class="roww">
	 	<table >
		 	<div class="col-md-12 ">
		 		<h1 class="boo"><b>Select a month</b></h1>
		 	</div>
		 	<div class="col-md-2 col-md-offset-3">
	 		<tbody>
	 			<tr>
	 				<td>
	 					<form role="form" method="post" action="months.php" class="loww">
	 						<div class="form-group">
	 							<div class="input-group">
	 								<span class="input-group-addon"><i class="	glyphicon glyphicon-calendar" style="color:red;"></i></span>
	 								<select name="month_dropdown" class="form-control">
	 									<!-- php to insert options from months array -->
	 									<?php
	 										option($months);
	 									?>
	 								</select>
	 							</div>
	 						</div>
	 						<input type="submit" name="submit" value="SUBMIT" class="btn btn-danger">
	 					</form><br>
	 				</td>
	 			</tr>
	 		</tbody></div>
	 	</table>
	 	</div></div>


	 <?php
	 	if (isset($_POST['submit'])) {
	 		$monthSelected = $_POST['month_dropdown'];
	 		$days = $months[$monthSelected];

	 		if ($monthSelected !== "february") {
	 			echo "<div class='container text-center alert alert-success alert-dismissible'><h3 class='vuu'>The month of $monthSelected has $days days</h3></div>";
	 		}

	 		else{
	 			if ($days == 29) {
	 				echo "<div class='container text-center alert alert-success alert-dismissible'><h3 class='vuu'>The month of $monthSelected has $days days because it is a leap year</h3></div>";
	 			}

	 			else{
	 				echo "<div class='container text-center alert alert-success alert-dismissible'><h3 class='vuu'>The month of $monthSelected has $days days because it is not a leap year</h3></div>";
	 			}
	 		}
	 		
	 	}
	 ?></div>
	 <div class="container blue">
			<div class="row">
			   <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>		
			   <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>		
			   <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>		
			      </div> 
		    <div class="row">
			   <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>		
			   <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>		
			   <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>		
		      </div> 
		      	</div>

	 <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
	 <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	 	 
</body>
</html>

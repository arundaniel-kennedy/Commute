<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<!--meta http-equiv="refresh" content="2"-->
<title>businfo.html</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<?php
	include("connection.php");

	$sql = mysqli_query($per,"SELECT * from businfo order by id desc");

	?>

<div class="container">
	<div class="jumbotron" style="margin: 70px">
		<table class="table" border="3">
	  <thead>
	    <tr>
	      <th scope="col">Busno</th>
	      <th scope="col">Startpoint</th>
				<th scope="col">Endpoint</th>
				<th scope="col">Traffic Intensity</th>
				<th scope="col">No of bus</th>
				<th scope="col">Direct route</th>
				<th scope="col">Alternate route</th>
				<th scope="col">Route used</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php
			while(($row = mysqli_fetch_array($sql))) {
				echo "<tr>";
				echo "<td>".$row["busno"]."</td>";
				echo "<td>".$row["startpoint"]."</td>";
				echo "<td>".$row["endpoint"]."</td>";
				echo "<td>".$row["trafficinten"]."</td>";
				echo "<td>".$row["noofbus"]."</td>";
				echo "<td>".$row["directroute"]."</td>";
				echo "<td>".$row["alternateroute"]."</td>";
				if ($row["trafficinten"]== 1){
					echo "<td>direct</td>";
				}
				else if ($row["trafficinten"]== 2){
					echo "<td>alternate</td>";
				}
				echo "</tr>";
			}
				?>
	  </tbody>
	</table>
<center>

<table class="table table-borderless">
		<form action="update.php" method="post">
			<tbody>
				<tr>

					<td>
						<div class="form-group">
			  			<label for="busno">Bus no:</label>
				  		<input type="text" name="busno" class="form-control" placeholder="Bus no" required>
						</div>
					</td>

					<td>
						<div class="form-group">
							<label for="noofbus">Number of Bus:</label>
							<input type="number" name="noofbus" class="form-control" placeholder="No of buses" required>
						</div>
					</td>

				</tr>

				<tr>

					<td colspan="2">
						<input class="btn btn-success" type="submit" value="Update">
					</td>

				</tr>

			</tbody>
		</form>
	</table>

</center>

			</div>
		</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
				color: #1f5380;
				font-family: monospace;
				font-size: 20px;
				text-align: left;
			} 
			th {
				background-color: #1f5380;
				color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head>
	<?php
		//Creates new record as per request
		//Connect to database
		$hostname = "localhost";
		$servername = "localhost";		//example = localhost or 192.168.0.0
		$username = "root";		//example = root
		$password = "";	
		$dbname = "tesis";
		// Create connection
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
	?>
	<div class="card">
  <h5 class ="card-header"></h5>
  <div class="card-body">
	<body>
		<table>
			<tr>
				<th>Id</th> 
				<th>Kemiringan(o)</th>
				<th>Curah Hujan(mmHg)</th> 
				<th>Kelembaban(%)</th>
				<th>Pergeseran(mm)</th>
				<th>Waktu</th>
			</tr>	
			<?php
				$table = mysqli_query($conn, "SELECT id, kemiringan, curahhujan, kelembaban, pergeseran, waktu FROM node2 order by id desc limit 0,15"); //nodemcu_ldr_table = Youre_table_name
				while($row = mysqli_fetch_array($table))
				{
			?>
			<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["kemiringan"]; ?></td>
				<td><?php echo $row["curahhujan"]; ?></td>
				<td><?php echo $row["kelembaban"]; ?></td>
				<td><?php echo $row["pergeseran"]; ?></td>
				<td><?php echo $row["waktu"];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
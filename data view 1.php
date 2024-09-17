<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landslide Monitoring System(LMS)</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
					    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Chart</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Condition</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Describe</a>
						</li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="data view.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data View
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="data view 1.php">Data View 1</a></li>
            <li><a class="dropdown-item" href="data view 2.php">Data View 2</a></li>
          </ul>
        </li>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="action.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our Team
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="lecture.php">Lecture</a></li>
            <li><a class="dropdown-item" href="student
			.php">Student</a></li>
          </ul>
        </li>  
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
		</header>
	<head>
		<title>Landslide Monitoring System (LMS) Database</title>
		<meta charset="utf-8">
		<!-- Script for updating pages without refreshing the page -->
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				setInterval(function(){get_data()},5000);
				function get_data()
				{
					jQuery.ajax({
						type:"GET",
						url: "read_db.php",
						data:"",
						beforeSend: function() {
						},
						complete: function() {
						},
						success:function(data) {
							$("table").html(data);
						}
					});
				}
			});
		</script>
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
	<body>
		<h1 align ="center" style="color:#1f5380;">Landslide Monitoring System(LMS)Database</h1>
		<table>
			<tr>
				<th>id</th> 
				<th>kemiringan</th> 
				<th>curah hujan</th>
				<th>kelembaban</th>
				<th>pergeseran</th>
				<th>waktu</th>
			</tr>
		</table>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>

<head>
<head>

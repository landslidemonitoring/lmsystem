<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Chart</h2>
                    <h3 class="section-subheading text-muted">Landslide Monitoring System(LMS).</h3>
                </div>
 
<div class="center">
<div class="col-md-12">
<div class="container">
      <div class="card">
        <div class="card-header">Grafik Kelembaban</h5>
        <br>
          <div class="card body"><iframe src="coba.php" width="100%" height="400"></iframe>
        </div>
        </div>
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
</div>
<br><br>
<div class="col-md-12">
<div class="container">
      <div class="card">
        <div class="card-header">Grafik Kemiringan</h5>
        <br>
          <div class="card body"><iframe src="grafik2.php" width="100%" height="400"></iframe>
        </div>
        </div>
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


</div>
<br><br>
<div class="col-md-12">
<div class="container">
      <div class="card">
        <div class="card-header">Grafik Pergeseran</h5>
        <br>
          <div class="card body"><iframe src="grafik3.php" width="100%" height="400"></iframe>
        </div>
        </div>
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
  <?php     
$sql = mysqli_query($conn, "SELECT * FROM node1 ORDER BY id DESC");
$gh = mysqli_fetch_array($sql);
$pergeseran = $gh['pergeseran'];

//logika 

    if( $pergeseran >= 3) {
        $keadaan = '<button type="button" class="btn btn-danger">aman</button>';
    }
    else if ($pergeseran >= 4 ) {
        $keadaan = '<button type="button" class="btn btn-primary">waspada</button>';
    }
    
    else{ 
    $keadaan = '<button type="button" class="btn btn-success">bahaya</button>';
}
?>
	
</div>

 <!-- Team-->
 
 <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Condition</h2>
                    <h3 class="section-subheading text-muted">Landslide Monitoring System.</h3>
                </div>
                <div class="card text-center">
  <div class="card-header">
    Status Keadaan
  </div>
  
  <div class="card-body"> 
  <h5 class="card-title"><?php echo $keadaan?> </h5> 
  </div>
</div>
</div>




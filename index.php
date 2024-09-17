<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landslide Monitoring System</title>
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
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" 
                data-toggle="collapse" data-target="#navbarResponsive" 
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Chart</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Condition</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#describe">Describe</a></li>
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
            <li><a class="dropdown-item" href="student.php">Student</a></li>
          </ul>
        </li>         
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
        <section class="page-section" id="home">
            <div class="container">
            <div class="text-center">
                <div class="masthead-subheading">Welcome To!</div>
                <div class="masthead-heading text-uppercase">Landslide Monitoring System(LMS)</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Landslide Monitoring System(LMS)</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Tanah Longsor</h4>
                        <p class="text-muted"> Tanah Longsor 
                        merupakan bencana alam yang dapat merugikan 
                        baik itu dalam bentuk materil maupun imateril.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Website Monitoring</h4>
                        <p class="text-muted"> Website Monitoring
                        merupakan sebuah website yang dibangun agar dapat
                     mempermudah proses monitoring terjadinya tanah longsor di suatu daerah.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">LMS</h4>
                        <p class="text-muted"> Landslide Monitoring System (LMS) merupakan sebuah sistem yang
                         dibangun untuk memonitoring tanah longsor di suatu 
                         daerah yang dilengkapi dengan website monitoring.</p>
                    </div>
                </div>
            </div>
        </section>
 
        <!-- Portfolio Grid-->
        <script src="jquery.min.js"></script>
		<script>
			var refreshId = setInterval(function()
            {
                $('#responsecontainer').load('grafik_kondisi.php');
                }, 5000);
                </script>
                <!--Begin page content-->
                <div class="container">
            </script type="text/javacript" src="assets/js/jquery-3.4.0 min.js"></script>     
            </script type="text/javacript" src="assets/js/mdb.min.js"></script>
            <div id="responsecontainer" >
            </div>		
		</script>
</body>
</html>
        <!-- About-->
        <section class="page-section" id="describe">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Describe</h2>
                    <h3 class="section-subheading text-muted">Landslide Monitoring System(LMS).</h3>
            </div>
        <div class="container" style="margin-top: 60px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/about/5.jpg" class="d-block w-50" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="assets/img/about/6.jpg" class="d-block w-50" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="assets/img/about/8.jpg" class="d-block w-50" alt="Third slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>          
</div>
  </div>
     </section>

 <!-- Footer-->
 <footer class="bg-dark text-white p-5">
            <div class="row">
                <div class="col-md-2">
                <img src="assets/img/logo.png" class="img-fluid" alt="..."> 
                <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/fisika_itera?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/prodifisika.itera.9"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://mfi.itera.ac.id/"><i class="fab fa-dribbble"></i></a> 
                    <ul>
            </div>
            <div class="col-md-6">
            <div class="row">
                    <h5>Tentang Kami</h5>
                    <p>Landslide Monitoring System (LMS) merupakan sebuah sistem monitoring tanah longsor yang dibangun dengan menggunakan teknologi Wireless Sensor Network (WSN).LMS terdiri node sensor, gateway, dan server. Pada node sensor akan membaca nilai dari sensor, nilai yang terbaca yaitu nilai kelembaban tanah,kemiringan tanah, dan pergeseran tanah yang selanjutnya akan dikirimkan ke gateway menggunakan komunikasi Long Rang(LoRa). Gateway sendiri merupakan jembatan yang menghubungkan antara node sensor dan server. Setelah data dari node sensor diterima oleh gateway maka data tersebut akan diteruskan untuk ditampilkan pada webmonitoring. Webmonitoring dibuat untuk menampilkan data hasil monitoring sensor secara realtime yang dapat menampilkan status kondisi. Selain itu LMS juga dapat mengirimkan peringatan dini apabila terdapat perubahan status kerawanan.</p>
                    <ul>
                    </div>
            </div>
            <div class="col-md-4"> 
            <div class="row">
                    <h5>Contact</h5> 
                    <li>Alamat : Laboratorium Teknik OZT, Laboratorium Fisika Instrumentasi, Lantai 3, Jalan Terusan Ryacudu, Desa Way Hui, Kecamatan Jati Agung, Lampung Selatan 35365</li>
                    <li>Email : mfi@itera.ac.id</li>  
                    <li>Phone : (+62) 721 8030188</li> 
                    <ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

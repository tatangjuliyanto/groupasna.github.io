<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
                           // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, comment)
			VALUES ('$name', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
    header('Location: kedai-asna.php');
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toko asna Detail</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ATOK.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">


</head>

<body>

 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="https://wa.me/62817273356" class="whatshapp"><i class="bi bi-phone d-flex align-items-center ms-"></i></a>
      <a href="https://www.instagram.com/kedaiasna_/" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="mailto:asna.group01@gmail.com" class="linkedin"><i class="bi bi-envelope d-flex align-items-center"></i></i></a>
    </div>
  </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><img src="assets/img/asna.png" class="img-fluid" alt="" height="120px" width="120px"><a href="index.html"><span></span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="index.html">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Pilar Usaha</span> <i class="bi bi-chevron-down active"></i></a>
            <ul>
              <li><a href="toko-asna.php">Toko Asna</a></li>
              <li><a href="kedai-asna.php">Kedai Asna</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->


  <main id="main" data-aos="fade-up">
     
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/laman2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/5.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Toko Asna</h3>
              <ul>
                <li><strong>Kategori</strong>    : Toserba</li>
                <li><strong>Tahun Berdiri</strong> : 2000</li>
                <li><strong>Detail</strong> : Kontak kami  <a href="https://wa.me/62817273356" class="whatshapp"><i class="bi bi-phone"></i></a>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Sejarah</h2>
              <p>
                Menjadi produsen ceriping singkong dan juga bakso goreng yang mendistribusikan barangnya 
                di wilayah DIY itulah cikal bakal dari Toko ASNA. Setelah itu mengalami pasang surut dan mulai berubah menjadi grosir makanan ringan yang mulai berkembang didaerah Bantul , DIY . Grosir ini berkembang cukup pesat karena menjadi satu satunya didaerah disekitarnya.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Sampaikan ulasan</h4>
            <p></p>
            <div class="wrapper">
              <form action="" method="POST" class="form">
                <div class="row">
                  <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                  </div>
                  
                </div>
                <div class="input-group textarea">
                  <label for="comment">Comment</label>
                  <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
                </div>
                <div class="input-group">
                  <button name="submit" class="btn">Post Comment</button>
                </div>
              </form>
              <div class="prev-comments">
                <?php 
                
                $sql = "SELECT * FROM comments";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result)) {
                  while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <div class="single-item">
                  <h4><?php echo $row['name']; ?></h4>
                  
                  <p><?php echo $row['comment']; ?></p>
                </div>
                <?php

                  }
                }
                
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="footer-top">
      <div class="container">
        <div class="row">
          <center>
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Asna toko<span>.</span></h3>
              <p>
                Jl.Imogiri Barat No.km 10, Nogosari,Symberagung, Kec. Jetis, Kabupaten Bantul, Daerah  Istimewa Yogyakarta 55781
                <br><strong>Phone:</strong> +62 817 2733-56<br>
                <strong>Email:</strong> asna.group01@gmail.com<br>
              </p>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4> Social Networks</h4>
              <p></p>
              <div class="social-links mt-3">
                <a href="https://wa.me/62817273356" class="whatshapp"><i class="bi bi-phone"></i></a>
                <a href="mailto:asna.group01@gmail.com" class="gmail"><i class="bi bi-envelope"></i></a>
                <a href="https://www.instagram.com/kedaiasna_/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>
    <div class="container py-4">
      
      <div class="copyright">
        <h1 class="logo">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="assets/img/Untitled-2.png" class="img-fluid" alt="" height="120" width="120" align="middle"></a>
        </h1>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &copy; Copyright <strong><span>Query Official</span></strong>. All Rights Reserved
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
 
      </div>
    </div>
    </div>

 
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
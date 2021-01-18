<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bài tập lớn </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v2.4.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

      <h1><a href="index.html">Đỗ Thành Trung</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2> <span>60TH4</span> 1851060370</h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Trang chủ</a></li>
          <li><a href="#about">Thông tin</a></li>
          <li><a href="#resume">Sơ yếu lý lịch</a></li>
          <li><a href="#contact">Liên hệ</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>Thông Tin</h2>
        <p>Thông Tin Cá Nhân</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/thanhtrung.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <div class="row">
            <div class="col-lg-6">
            
            <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT ten, ngaysinh, sdt, email, dchi FROM thongtincanhan WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Họ và Tên: " . $row["ten"]."<br>";
                            echo "Ngày Sinh: " . $row["ngaysinh"]."<br>";
                            echo "Số điện thoại: " . $row["sdt"]."<br>";
                            echo "Email: " . $row["email"]."<br>";
                            echo "Địa chỉ :" . $row["dchi"]."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">50</span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up">1</span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-live-support"></i>
            <span data-toggle="counter-up">5</span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up">5 </span>
            <p>Hard Workers</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Kỹ năng</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">
        <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang, ghichu FROM kynang WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["kynang"].".".$row["ghichu"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>               
          <div class="progress">
            <span class="skill"><i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="70"></div>
            </div>
          </div>
          <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang, ghichu FROM kynang WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["kynang"].".".$row["ghichu"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
          <div class="progress">
            <span class="skill"><i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="90"></div>
            </div>
          </div>
          <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang, ghichu FROM kynang WHERE id='3'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["kynang"].".".$row["ghichu"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
          <div class="progress">
            <span class="skill"><i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
        <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang, ghichu FROM kynang WHERE id='4'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["kynang"].".".$row["ghichu"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
          <div class="progress">
            <span class="skill"><i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang, ghichu FROM kynang WHERE id='5'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["kynang"].".".$row["ghichu"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
          <div class="progress">
            <span class="skill"><i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang, ghichu FROM kynang WHERE id='6'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["kynang"].".".$row["ghichu"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
          <div class="progress">
            <span class="skill"><i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Sở thích</h2>
      </div>
      <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM sothich WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["ten"].".".$row["ghichu"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Lorem Ipsum</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Dolor Sitema</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sed perspiciatis</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Magni Dolores</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Nemo Enim</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Eiusmod Tempor</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Midela Teren</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Pira Neve</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Dirada Pack</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Moton Ideal</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->
  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Sơ yếu lý lịch</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Tóm tắt</h3>
          <div class="resume-item pb-0">
            <h4>Đang học tại trường Đại học Thủy Lợi</h4>
            <p><em>CSE-K60</em></p>
            <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT  tentruong, dchi, sdt, email, web FROM truong WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["tentruong"]."<br>";
                          echo "Địa chỉ :".$row["dchi"]."<br>";
                          echo "Số điện thoại :".$row["sdt"]."<br>";
                          echo "Email :".$row["email"]."<br>";
                          echo "Web :".$row["web"]."<br>";
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
          </div>

          <h3 class="resume-title">Học vấn</h3>
          <div class="resume-item">
          
            <h5>2018 - 2023</h5>
            <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT  tentruong, tenkhoa, tenlop,ngayvao, ngayra FROM hocvan WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["tentruong"]."<br>";
                          echo " Tên Khoa :".$row["tenkhoa"]."<br>";
                          echo "Tên Lớp:".$row["tenlop"]."<br>";
                          echo "Ngày Vào :".$row["ngayvao"]."<br>";
                          echo "Ngày Ra :".$row["ngayra"]."<br>";
                         
                        }
                      }
                      else {
                        echo"0 results";
                      }
           ?>
           <div class="resume-item">
           <h6> 2015 - 2018</h6>
         <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT  tentruong, tenkhoa, tenlop,ngayvao, ngayra FROM hocvan WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["tentruong"]."<br>";
                          echo " Tên Khoa :".$row["tenkhoa"]."<br>";
                          echo "Tên Lớp:".$row["tenlop"]."<br>";
                          echo "Ngày Vào :".$row["ngayvao"]."<br>";
                          echo "Ngày Ra :".$row["ngayra"]."<br>";
                        
                        }
                      }
                      else {
                        echo"0 results";
                      }
                      ?>
          </div>
           </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Kinh nghiệm </h3>
          <div class="resume-item">
            <h4>Hiện tại</h4>
             <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT  congviec, ghichu FROM kinhnghiem WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "".$row["congviec"]."<br>";
                          echo "".$row["ghichu"]."<br>";
                         
                        
                        }
                      }
                      else {
                        echo"0 results";
                      }
                      ?>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>195 Khâm Thiên - Đống Đa - Hà Nội</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="https://www.facebook.com/" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>dothanhtrung3112@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>0858515811</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
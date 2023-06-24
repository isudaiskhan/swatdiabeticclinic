<?php require_once 'header.php' ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Swat Diabetes & foot care clinic<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <?php
      if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
        echo '  <a href="login.php" class="get-started-btn scrollto">LOGIN</a>';

      } else {
        echo '  <a href="dashboard" class="get-started-btn scrollto">Dashboard</a>';
      }
      ?>



    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

       <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-12 col-lg-8">
          <h2>Welcome To</h2>

          <h2>Swat Diabetic & Endocrine Clinic<span>.</span></h2><br>
          <h1>Dr. Muhammad Yaqoob Khan<span>.</span></h1><br>
          <h2>Consultant Diabetalogist & Clinical Endocrinologist</h2>
        </div>
      </div>



      


    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/7d9.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" style="display: flex;   flex-direction: column;
    justify-content: center;" data-aos="fade-right" data-aos-delay="100">
            <h3>Welcome to Swat Diabetic Clinic.</h3>

            <p>
              The online home of Dr. Muhammad Yaqoob, a renowned consultant diabetologist,
              endocrinologist, and
              internist. With a focus on diabetes care, Dr. Yaqoob provides expert diagnosis, treatment,
              and management
              for patients with diabetes, endocrine disorders, and metabolic conditions. With a wealth of
              qualifications
              including FCPS in Diabetes, Endocrine, and Metabolic Disorders, as well as FCPS in Internal
              Medicine, Dr.
              Yaqoob is dedicated to delivering comprehensive and personalized care. Visit our website to
              learn more
              about our services and schedule an appointment with Dr. Yaqoob at Swat Diabetic Clinic.
            </p>
            <p> When it comes to the management of diabetic foot, Dr. Muhammad Yaqoob at Swat Diabetic
              Clinic is dedicated to providing specialized care. With a deep understanding of the unique
              challenges faced by individuals with diabetes, Dr. Yaqoob offers expert diagnosis,
              treatment, and preventive measures to ensure optimal foot health. From comprehensive
              evaluations to advanced wound care techniques, Dr. Yaqoob's approach emphasizes early
              intervention and customized treatment plans to minimize the risk of complications and
              promote healing. Trust in Dr. Yaqoob's expertise to receive compassionate care and effective
              solutions for diabetic foot concerns.

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Swat Diabetic Clinic<span>.</span></h3>
              <p>
                Saidu Group of Teaching Hospital <br>
                Saidu Sharif, Swat<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>



          </form>

        </div>

      </div>
    </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dr Muhammad Yaqoob</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <?php require_once 'footer.php' ?>

</body>

</html>
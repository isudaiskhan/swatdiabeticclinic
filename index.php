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

                    <h2>Swat Diabetes & Foot Care Clinic<span>.</span></h2><br>
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
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content"
                        style="display: flex;   flex-direction: column;justify-content: center;" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>Welcome to Swat Diabetes & Foot Care Clinic.</h3>

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
                            about our services and schedule an appointment with Dr. Yaqoob at Swat Diabetes & Foot Care
                            Clinic.
                        </p>
                        <p> When it comes to the management of diabetic foot, Dr. Muhammad Yaqoob at Swat Diabetes &
                            Foot Care
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



    <?php require_once 'footer.php' ?>

</body>

</html>
<?php require_once 'header.php' ?>
<link rel="shortcut icon" href="assets/img/images.png" type="image/x-icon">


<body>


    <?php

    if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
        header("location:dashboard/index.php");

    }

    ?>



    <?php

    if (isset($_POST["loginbtn"])) {
        $email = $_POST["my_email"];
        $password = sha1(md5($_POST["my_password"]));


        // echo "My name is $name and my contact is $contact and my address is $address and my email is $email and my password is $password   ";
    

        $query = "select * from registration where your_email = '$email' and password = '$password'";

        $run = mysqli_query($link, $query);


        if (mysqli_num_rows($run) > 0) {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header("location:dashboard/index.php");

        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Dear User!</strong> Invalid Email Or Password
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

        }





    }
    ?>





    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">


                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">LOGIN</p>


                                    <form class="mx-1 mx-md-4" method="POST" action="login.php">




                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa fa-envelope fa-lg me-3 fa-fw fa-beat"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="my_email" id="a" placeholder="Your Email "
                                                    required class="form-control" />



                                            </div>
                                        </div>



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw fa-beat "></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="my_password" id="b" placeholder="Password"
                                                    required class="form-control" />
                                            </div>
                                        </div>




                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="login" name="loginbtn"
                                                class="btn btn-primary btn-lg col-6 mx-auto">LOGIN</button>
                                        </div>


                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="./assets/img/physician.webp" class="img-fluid" alt="Sample image">



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php require_once 'footer.php' ?>
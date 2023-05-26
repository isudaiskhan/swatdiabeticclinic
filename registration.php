<?php require_once 'header.php' ?>


<body>


<?php

if(isset($_POST["btn"])){
$name =  $_POST["my_name"];
$email = $_POST["my_email"];
$password = sha1(md5($_POST["my_password"]));


// echo "My name is $name and my contact is $contact and my address is $address and my email is $email and my password is $password   ";


    $query = "insert into registration(name,your_email,password)values('$name','$email','$password')";


     


    if(mysqli_query($link, $query) ){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
  <strong>Dear user!</strong> Account created successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }else{
        echo "Data Error :".mysqli_error($link);



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

                                   
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                
                                    <form class="mx-1 mx-md-4" method="POST" action="registration.php">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw  fa-beat"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="my_name" placeholder="Name" required id="c"
                                                    class="form-control" />



                                            </div>
                                        </div>




                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw fa-beat"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="my_email" id="a"
                                                    placeholder="Your Email " required class="form-control" />



                                            </div>
                                        </div>



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw fa-beat"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="my_password" id="b"
                                                    placeholder="Password" required class="form-control" />

                                            </div>
                                        </div>





                                        

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="index.php" class="btn btn-danger btn-lg ">GO BACK</a>&nbsp;&nbsp;&nbsp;
                                            <button type="submit" name="btn" class="btn btn-primary btn-lg" >SUBMIT</button>
                                        </div>
                                        

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="draw1.webp" class="img-fluid" alt="Sample image">



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'footer.php' ?>

<?php require_once 'header.php' ?>


<section class="vh-100 bg-image"
    style="background-color:gray;"> 
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">

          <?php 
              if(isset($_POST["btn"])){
                $old = sha1(md5($_POST["old_password"]));
                $new_password = sha1(md5($_POST["new_password"]));
                $confirm_password =  sha1(md5($_POST["confirm_password"]));


                
                  $old_password = $_SESSION["password"];
               
                    if($old == $old_password){

                        if($new_password == $confirm_password){
                              $update_query = "update registration set password = '$new_password'";
                              if($exe_update_query = mysqli_query($link,$update_query)){
                                echo '<div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Dear user !</strong> Password Updated SuccessFully.
                              </div>';
                              }else{
                                echo " error ".mysqli_error($link);
                              }
                              

                        }else{
                          echo '<div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Dear user !</strong> New password and confirm password does"nt match.
                        </div>';
    
                        }

                    }else{
                      echo '<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Dear user !</strong> Your Old password is Incorrect.
                    </div>';
                    }
          
              

           
              }
          ?>

          <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Change Password

                </h2>
  
                <form action="profile.php" method="POST">
  
                  <div class="form-outline mb-4">
                  <label class="form-label text-gray" for="a">Old Password</label>
                    <input type="password" name="old_password" id="a" class="form-control form-control-lg" placeholder=" Old Password" required />
                  </div>
  
                  <div class="form-outline mb-4">
                  <label class="form-label text-gray" for="b">New Password</label>
                    <input type="password" name="new_password" placeholder="New Password" required id="b" class="form-control form-control-lg" />
                  </div>


  
                  <div class="form-outline mb-4">
                  <label class="form-label text-gray" for="c">Confirm New Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm New Password" required id="c" class="form-control form-control-lg" />
                  </div>
  
                 
                
  
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="btn" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">CHANGE</button>
                  </div>
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    







<?php require_once 'footer.php' ?>
<?php require_once 'header.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>





<?php

if (isset($_GET["skDelId"])) {
  $user_id = $_GET["skDelId"];





  // query for all image name start 
  $qselect = "select * from patients where id = '$user_id'";
  $qrun = mysqli_query($link, $qselect);
  $qfetch = mysqli_fetch_assoc($qrun);
  // print_r($qfetch);

    //   $patient_img = $qfetch["patient_image"];
    // $rx_img = $qfetch["rx_image"];
    // $diabatic_img = $qfetch["diabetic_foot_image"];
    // // query for all image name end





  // //  Selection images names query start
//       $SImgQuery = " select * from patients where id  = '$user_id'";
//       $ImgQueryRun = mysqli_query($link,$SImgQuery);
//       $runQuery = mysqli_fetch_array($ImgQueryRun);



  // }else{
//     echo "error" .mysqli_error($link);
}

?>


                  



<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">View Data</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>




  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-4">
                    <label for="a">Name</label>
                    <input type="text" value="<?php echo $qfetch['name']; ?>" name="name" class="form-control" id="a"
                      disabled placeholder="Enter Your Name">
                  </div>


                  <div class="form-group col-4">
                    <label for="b">Father/Husband Name</label>
                    <input type="text" value="<?php echo $qfetch['father_husband_name']; ?>" name="father_husband_name"
                      class="form-control" id="b" disabled placeholder="Enter Your Father/husband Name">
                  </div><br><br><br><br>






                  <div class="form-group col-4">
                    <label for="k">Patient Image</label><br>
                    <?php
                    if (empty($qfetch['patient_image'])) {
                      echo "<b style='color:red'> Image Not Uploaded </b>";

                    } else {

                      ?>

                      <img src="patientImages/<?php
                      echo $pimg = $qfetch['patient_image'];

                      ?>" width="100px" height="50px" />
                    <?php } ?>
                    <!-- <input type="file" name="patient_image" class="form-control" id="k" disabled > -->
                  </div>
                  
                  



                  <div class="form-group col-6">
                    <label for="c">Age</label>
                    <input type="number" value="<?php echo $qfetch['age']; ?>" name="age" class="form-control" id="c"
                      disabled placeholder="Enter Your Age">
                  </div>



                  <div class="form-group col-6">
                    <div class=" mb-4">
                      <label for="d" class="form-label">Select Your Gender</label>&nbsp;&nbsp;&nbsp;
                      <br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php  if($qfetch['gender'] == "male"){?> checked <?php } ?>  type="radio" value="<?php echo $qfetch['gender']; ?>"
                          name="gender" id="d" disabled value="male">
                        <label class="form-check-label" for="d">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php  if($qfetch['gender'] == "female"){?> checked <?php } ?> type="radio" value="<?php echo $qfetch['gender']; ?>"
                          name="gender" id="e" disabled value="female">
                        <label class="form-check-label" for="e">Female</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="f">MR NO</label>
                    <input type="number" value="<?php echo $qfetch['mr_no']; ?>" name="mr_no" class="form-control"
                      id="f" disabled placeholder="Enter Your MR NO">
                  </div>
                  <div class="form-group col-6">
                    <label for="g">Date</label>
                    <input type="date" value="<?php echo $qfetch['date']; ?>" name="date" class="form-control" id="g"
                      disabled placeholder="Enter Your Date">
                  </div>



                  <div class="form-group col-6">
                    <label for="h">CNIC NO</label>
                    <input type="text" value="<?php echo $qfetch['cnic_no']; ?>" name="cnic_no" class="form-control"
                      data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" id="h" disabled>
                  </div>


                  <div class="form-group col-6">
                    <label for="i">Date OF Birth </label>
                    <input type="date" value="<?php echo $qfetch['date_of_birth']; ?>" name="date_of_birth"
                      class="form-control" id="i" disabled placeholder="Enter Your Date OF Birth">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-6">
                    <label for="summernote" class="form-label">Rx</label>
                    <textarea class="form-control"  disabled
                      placeholder="Enter Your RX" ><?php echo $qfetch['rx']; ?></textarea>
                  </div>

                  <div class="form-group col-4">
                    <label for="summernote" class="form-label">Rx Image</label><br>
                    <?php
                    if (empty($qfetch['rx_image'])) {
                      echo "<b style='color:red'> Image Not Uploaded </b>";

                    } else {

                      ?>

                      <img src="rxImages/<?php
                      echo  $qfetch['rx_image'];

                      ?>" width="100px" height="50px" />
                    <?php } ?>
                    <!-- <input type="file" name="rx_image" disabled class="form-control" id="z"> -->
                  </div>

                  <div class="form-group col-2">
                    <label for="summernote" class="form-label">Rx Date</label>
                    <input type="date" value="<?php echo $qfetch['rx_date']; ?>" name="rx_date" class="form-control"
                      id="x" disabled>

                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-6">
                    <label for="summernote" class="form-label">Diabetic Foot</label>
                    <textarea class="form-control" name="diabetic_foot"
                      disabled placeholder="Enter Your Text"><?php echo $qfetch['diabetic_foot']; ?></textarea>
                  </div>

                  <div class="form-group col-4">
                    <label for="summernote" class="form-label">Foot Image</label><br>
                    <?php
                    if (empty($qfetch['diabetic_foot_image'])) {
                      echo "<b style='color:red'> Image Not Uploaded </b>";

                    } else {

                      ?>

                      <img src="diabeticImages/<?php
                      echo $footimg = $qfetch['diabetic_foot_image'];

                      ?>" width="100px" height="50px" />
                    <?php } ?>
                    <!-- <input type="file" name="diabetic_foot_image" disabled class="form-control" id="y"> -->
                  </div>

                  <div class="form-group col-2">
                    <label for="summernote" class="form-label">Foot Image Date</label>
                    <input type="date" value="<?php echo $qfetch['foot_image_date']; ?>" name="foot_image_date" disabled
                      class="form-control" id="o">
                      
                  </div>
                </div>






                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
</div>

<script>
  $(":input").inputmask();

  $(document).ready(function () {
    var t = $('#summernote').summernote(
      {
        height: 200,
        focus: true
      }
    );
    $("#btn").click(function () {
      $('div.note-editable').height(150);
    });
  });
</script>






<?php require_once 'footer.php' ?>
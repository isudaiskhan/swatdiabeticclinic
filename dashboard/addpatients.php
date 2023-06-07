<?php require_once 'header.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>



<div class="content-wrapper">



    <?php

  if (isset($_POST["addpatients"])) {
    $name = $_POST["name"];
    $father_husband_name = $_POST["father_husband_name"];
    $patient_image = $_FILES["patient_image"]["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $mr_no = $_POST["mr_no"];
    $date = $_POST["date"];
    $cnic_no = $_POST["cnic_no"];
    $date_of_birth = $_POST["date_of_birth"];

    if (empty($patient_image)) {
      $query = "INSERT INTO patients (name, father_husband_name, age, gender, mr_no, date, cnic_no, date_of_birth, patient_image) VALUES ('$name', '$father_husband_name', '$age', '$gender', '$mr_no', '$date', '$cnic_no', '$date_of_birth', '$patient_image')";
      $run = mysqli_query($link, $query);
    } else {
      $query = "INSERT INTO patients (name, father_husband_name, patient_image, age, gender, mr_no, date, cnic_no, date_of_birth) VALUES ('$name', '$father_husband_name', '$patient_image', '$age', '$gender', '$mr_no', '$date', '$cnic_no', '$date_of_birth')";
      $run = mysqli_query($link, $query) && move_uploaded_file($_FILES["patient_image"]["tmp_name"], "patientImages/" . $patient_image);
    }




    if ($run) {
      echo "<script>
        var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });

          Toast.fire({
            icon: 'success',
            title: 'Patients Added Successfully.'
          })

        </script>";

    } else {
      echo "Data Error :" . mysqli_error($link);

    }

  }
  ?>






    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Patients</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add Patients</li>
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
                        <form id="quickForm" action="addpatients.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-4">
                                        <label for="a">Name</label>
                                        <input type="text" name="name" class="form-control" id="a"
                                            placeholder="Enter Your Name">
                                    </div>


                                    <div class="form-group col-4">
                                        <label for="b">Father/Husband Name</label>
                                        <input type="text" name="father_husband_name" class="form-control" id="b"
                                            placeholder="Enter Your Father/husband Name">
                                    </div><br><br><br><br>

                                    <div class="form-group col-4">
                                        <label for="k">Patient Image</label>
                                        <input type="file" name="patient_image" class="form-control" id="k">
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="c">Age</label>
                                        <input type="number" name="age" class="form-control" id="c"
                                            placeholder="Enter Your Age">
                                    </div>



                                    <div class="form-group col-6">
                                        <div class=" mb-4">
                                            <label for="d" class="form-label">Select Your
                                                Gender</label>&nbsp;&nbsp;&nbsp;
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="d"
                                                    value="male">
                                                <label class="form-check-label" for="d">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="e"
                                                    value="female">
                                                <label class="form-check-label" for="e">Female</label>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="form-group col-6">
                                        <label for="f">MR NO</label>
                                        <input type="number" name="mr_no" class="form-control" id="f"
                                            placeholder="Enter Your MR NO">
                                    </div>




                                    <div class="form-group col-6">
                                        <label for="g">Date</label>
                                        <input type="date" name="date" class="form-control" id="g"
                                            placeholder="Enter Your Date">
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="h">CNIC NO</label>
                                        <input type="text" name="cnic_no" class="form-control"
                                            data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X"
                                            id="h">
                                    </div>


                                    <div class="form-group col-6">
                                        <label for="i">Date OF Birth </label>
                                        <input type="date" name="date_of_birth" class="form-control" id="i"
                                            placeholder="Enter Your Date OF Birth">
                                    </div>












                                </div>







                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="addpatients">Add</button>
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

$(document).ready(function() {
    var t = $('#summernote').summernote({
        height: 200,
        focus: true
    });
    $("#btn").click(function() {
        $('div.note-editable').height(150);
    });
});
</script>


<?php require_once 'footer.php' ?>
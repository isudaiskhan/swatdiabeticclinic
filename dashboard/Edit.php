<?php require_once 'header.php' ?>





<div class="content-wrapper">



    <?php

  if (isset($_GET["id"])) {
    $user_id = $_GET["id"];



    // query for all image name start 
    $qselect = "select * from patients where id = '$user_id'";
    $qrun = mysqli_query($link, $qselect);
    $qfetch = mysqli_fetch_assoc($qrun);
 
  


  }

  ?>












    <?php

  if (isset($_POST["Editrecord"])) {
    $name = $_POST["name"];
    $father_husband_name = $_POST["father_husband_name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $mr_no = $_POST["mr_no"];
    $date = $_POST["date"];
    $cnic_no = $_POST["cnic_no"];
    $address = $_POST["address"];
    $date_of_birth = $_POST["date_of_birth"];

    $pimg = "patientImages/";


    $patient_image = $_FILES["patient_image"]["name"];

    $queryrun = "UPDATE patients SET name = '$name', father_husband_name = '$father_husband_name', age = '$age', gender = '$gender', mr_no = '$mr_no', date = '$date', cnic_no = '$cnic_no', date_of_birth = '$date_of_birth', address = '$address'";

    if (!empty($patient_image)) {
      $patient_image_path = "patientImages/" . $patient_image;
      move_uploaded_file($_FILES["patient_image"]["tmp_name"], $patient_image_path);
      $queryrun .= ", patient_image = '$patient_image'";
    }

    $queryrun .= " WHERE id = '$user_id'";

    $run = mysqli_query($link, $queryrun);

    if ($run) {
      echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Dear User!</strong> Record Edit Successful.
        </div>';
    } else {
      echo "Data Error: " . mysqli_error($link);
    }
  }

  ?>







    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Record</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Record</li>
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
                        <form id="quickForm" action="Edit.php?id=<?php echo $_GET["id"] ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="k" class="text-center d-block">Patient Image</label>
                                        <div class="row justify-content-center">
                                            <div class="small-12 medium-2 large-2 columns pos-rel">
                                                <div class="circle">
                                                    <img class="profile_pic"
                                                        src="<?php echo $qfetch['patient_image'] ? 'patientImages/' . $qfetch['patient_image'] : ' ../../../assets/img/user-icon.jpg' ?>">
                                                </div>
                                                <div class="p-image">
                                                    <i class="fa fa-camera upload-button"></i>
                                                    <input class="file-upload" type="file" accept="image/*"
                                                        name="patient_image" />
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="form-group col-5">
                                        <label for="a">Name</label>
                                        <input type="text" value="<?php echo $qfetch['name']; ?>" name="name"
                                            class="form-control" id="a" placeholder="Enter Your Name">
                                    </div>


                                    <div class="form-group col-4">
                                        <label for="b">Father/Husband Name</label>
                                        <input type="text" value="<?php echo $qfetch['father_husband_name']; ?>"
                                            name="father_husband_name" class="form-control" id="b"
                                            placeholder="Enter Your Father/husband Name">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="f">MR NO</label>
                                        <input type="number" value="<?php echo $qfetch['mr_no']; ?>" name="mr_no"
                                            class="form-control" id="f" placeholder="Enter Your MR NO">
                                    </div>
                                    <div class="form-group col-3">
                                        <div class=" mb-4">
                                            <label for="d" class="form-label">Select Your
                                                Gender</label>&nbsp;&nbsp;&nbsp;
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input"
                                                    <?php if ($qfetch['gender'] == "male") { ?> checked <?php } ?>
                                                    type="radio" name="gender" id="d" value="male">
                                                <label class="form-check-label" for="d">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input"
                                                    <?php if ($qfetch['gender'] == "female") { ?> checked <?php } ?>
                                                    type="radio" name="gender" id="e" value="female">
                                                <label class="form-check-label" for="e">Female</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-3">
                                        <label for="c">Age</label>
                                        <input type="number" value="<?php echo $qfetch['age']; ?>" name="age"
                                            class="form-control" id="c" placeholder="Enter Your Age">
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="i">Date OF Birth </label>
                                        <input type="date" value="<?php echo $qfetch['date_of_birth']; ?>"
                                            name="date_of_birth" class="form-control" id="i"
                                            placeholder="Enter Your Date OF Birth">
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="g">Date</label>
                                        <input type="date" value="<?php echo $qfetch['date']; ?>" name="date"
                                            class="form-control" id="g" placeholder="Enter Your Date">
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="h">CNIC NO</label>
                                        <input type="text" value="<?php echo $qfetch['cnic_no']; ?>" name="cnic_no"
                                            class="form-control" data-inputmask="'mask': '99999-9999999-9'"
                                            placeholder="XXXXX-XXXXXXX-X" id="h">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="Address">Address</label>
                                        <textarea name="address" class="form-control" placeholder="Enter Address"
                                            rows="5"><?php echo $qfetch['address']; ?></textarea>
                                    </div>



                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"
                                        name="Editrecord">Update</button>&nbsp;&nbsp;
                                    <a href="rxfields.php" class="btn btn-secondary">Add Patient History</a>
                                </div>
                        </form>
                    </div>

                </div>


                <div class="col-md-6">

                </div>

            </div>

        </div>
    </section>

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
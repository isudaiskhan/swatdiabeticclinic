<?php require_once 'header.php' ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> View Patients</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">View Patients</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <?php
  if (isset($_GET["skDelId"])) {
    $user_id = $_GET["skDelId"];

    // query for all image name start 
    $qselect = "select * from patients where id = '$user_id'";
    $qrun = mysqli_query($link, $qselect);
    $qfetch = mysqli_fetch_array($qrun);
    $patient_img = $qfetch["patient_image"];
    $rx_img = $qfetch["rx_image"];
    $diabatic_img = $qfetch["diabetic_foot_image"];
    // query for all image name end
  




    //  Selection images names query start
    $SImgQuery = " select * from patients where id  = '$user_id'";
    $ImgQueryRun = mysqli_query($link, $SImgQuery);
    $runQuery = mysqli_fetch_array($ImgQueryRun);

    // echo "<pre>";
    // print_r($runQuery);
//  Selection images names query end
  



    // if(empty($img_name)){
    //     $queryok = "delete from patients where id = '$user_id'";
    //     $fullexe = mysqli_query($link, $queryok);
  
    if ($runQuery["patient_image"] == "" && $runQuery["rx_image"] == "" && $runQuery["diabetic_foot_image"] == "") {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok);
    } elseif ($runQuery["patient_image"] == "" && $runQuery["rx_image"] == "") {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok) && unlink("diabeticImages/" . $diabatic_img);


    } elseif ($runQuery["patient_image"] == "" && $runQuery["diabetic_foot_image"] == "") {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok) && unlink("rxImages/" . $rx_img);

    } elseif ($runQuery["rx_image"] == "" && $runQuery["diabetic_foot_image"] == "") {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok) && unlink("patientImages/" . $patient_img);

    } elseif ($runQuery["patient_image"] == "") {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok) && unlink("rxImages/" . $rx_img) && unlink("diabeticImages/" . $diabatic_img);

    } elseif ($runQuery["rx_image"] == "") {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok) && unlink("patientImages/" . $patient_img) && unlink("diabeticImages/" . $diabatic_img);


    } elseif ($runQuery["diabetic_foot_image"] == "") {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok) && unlink("patientImages/" . $patient_img) && unlink("rxImages/" . $rx_img);

    } else {
      $queryok = "delete from patients where id = '$user_id'";
      $fullexe = mysqli_query($link, $queryok) && unlink("patientImages/" . $patient_img) && unlink("rxImages/" . $rx_img) && unlink("diabeticImages/" . $diabatic_img);

    }

    // if(empty($img_name)){
    //   $queryok = "delete from patients where id = '$user_id'";
    //   $fullexe = mysqli_query($link, $queryok);
  

    // }else{
  
    //   $queryok = "delete from patients where id = '$user_id'";
    //   $fullexe = mysqli_query($link, $queryok) && unlink("patientImages/". $img_name);
  
    // }
  



    if ($fullexe) {
      echo '<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Dear User!</strong> Record Deleted Successfully .
    </div>';
      // header("Refresh:1; url=viewpatients.php");
    } else {
      echo "error" . mysqli_error($link);
    }

  }


  ?>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Mr No.</th>
                                        <th>Patient Name</th>
                                        <th>Father/ Husband Name</th>
                                        <th>Patient_image</th>
                                        <th>Date Of Birth</th>
                                        <th>Age</th>
                                        <th>Gender</th>

                                        <th>Date</th>
                                        <th>CNIC No</th>


                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                  $query = "select * from patients";
                  $run = mysqli_query($link, $query);
                  $sno = 1;
                  while ($data = mysqli_fetch_assoc($run)) { ?>

                                    <tr>
                                        <td>
                                            <?php echo $sno++; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['mr_no']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['father_husband_name']; ?>
                                        </td>
                                        <td>
                                            <?php if (empty($data['patient_image'])) {
                          echo "<b style='color:red'> Image Not Uploaded </b>";
                        } else { ?>

                                            <img src="patientImages/<?php
                          echo $pimage = $data['patient_image'];

                          ?>" width="100px" height="50px" />
                                            <?php } ?>

                                        </td>

                                        <td>
                                            <?php echo $data['date_of_birth']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['age']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['gender']; ?>
                                        </td>

                                        <td>
                                            <?php echo $data['date']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['cnic_no']; ?>
                                        </td>




                                        <td>
                                            <div class="margin">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info">Action</button>
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle dropdown-icon"
                                                        data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item"
                                                            href="Edit.php?skDelId=<?php echo $data['id']; ?>"><i
                                                                class="fa fa-pencil" style="color:blue"></i>
                                                            EDIT</a><br>
                                                        <a class="dropdown-item"
                                                            href="viewpatients.php?skDelId=<?php echo $data['id']; ?>"
                                                            onclick="return confirm('Are you Sure You Want to delete this?')"><i
                                                                class="fa fa-trash" style="color:red"></i>
                                                            DELETE</a><br>
                                                        <a class="dropdown-item"
                                                            href="viewrecord.php?skDelId=<?php echo $data['id']; ?>"><i
                                                                class="fa fa-eye" style="color:orange"></i> VIEW</a>
                                                        <div class="dropdown-divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>




                                    </tr>
                                    <?php } ?>

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<?php require_once 'footer.php' ?>
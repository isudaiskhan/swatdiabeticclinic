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
    if (isset($_GET["id"])) {
        $user_id = $_GET["id"];

        //get data from patients table
        $qselect = "SELECT * FROM patients WHERE id = '$user_id'";
        $qrun = mysqli_query($link, $qselect);
        $qfetch = mysqli_fetch_array($qrun);
        $patient_img = $qfetch["patient_image"];


        //get data from patient_history table
        $qselect = "SELECT * FROM patient_history WHERE patient_id = '$user_id'";
        $qrun = mysqli_query($link, $qselect);
        $patient_history_fetch = mysqli_fetch_array($qrun);
        $patient_history_img = $patient_history_fetch["image"];




        $deleteQuery = "DELETE FROM patients WHERE id = '$user_id'";
        $res = mysqli_query($link, $deleteQuery);

        $deleteQuery = "DELETE FROM patient_history WHERE patient_id = '$user_id'";
        $res = mysqli_query($link, $deleteQuery);

        if (empty($patient_img)) {
            unlink("patientImages/" . $patient_img);
        }
        if (empty($patient_history_img)) {
            if ($patient_history_fetch["is_rx"]) {
                unlink("rxImages/" . $patient_history_img);
            } else {
                unlink("diabeticImages/" . $patient_history_img);
            }

        }


        // if(empty($img_name)){
    




        if ($res) {
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
                                        <th>Address</th>
                                        <th>History</th>


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
                                                <?php echo $data['address']; ?>
                                            </td>

                                            <td class="display-flex">
                                                <a href="addRxHistory.php?id=<?php echo $data['id']; ?> "
                                                    class="btn btn-sm btn-primary mb-2"> Add Rx
                                                    History</a>
                                                <a href="addFootHistory.php?id=<?php echo $data['id']; ?> "
                                                    class="btn btn-sm btn-primary mb-2"> Add Foot
                                                    History</a>
                                                <a href="viewPatientsHistory.php?id=<?php echo $data['id']; ?>"
                                                    class="btn btn-sm btn-secondary"> View
                                                    History</a>
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
                                                                href="Edit.php?id=<?php echo $data['id']; ?>"><i
                                                                    class="fa fa-pencil" style="color:blue"></i>
                                                                EDIT</a><br>
                                                            <a class="dropdown-item"
                                                                href="viewpatients.php?id=<?php echo $data['id']; ?>"
                                                                onclick="return confirm('Are you Sure You Want to delete this?')"><i
                                                                    class="fa fa-trash" style="color:red"></i>
                                                                DELETE</a><br>
                                                            <a class="dropdown-item"
                                                                href="viewPatientsHistory.php?id=<?php echo $data['id']; ?>"><i
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
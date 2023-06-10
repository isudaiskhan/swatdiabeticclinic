<?php require_once 'header.php' ?>

<?php
$id = $_GET['id'];
//get patient profile
$query = "select * from patients where id = '$id'";
$run = mysqli_query($link, $query);
$patients = mysqli_fetch_assoc($run);


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> View History</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">View History</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    style="width: 125px;height: 125px;object-fit: cover;object-position: center center;"
                                    src="/dashboard/patientImages/<?php echo $patients['patient_image']; ?>"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">
                                <?php echo $patients['name']; ?>
                            </h3>
                            <p class="text-muted text-center">Mr No. :
                                <?php echo $patients['mr_no']; ?>
                            </p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>F/H Name </b>
                                    <a class="float-right">
                                        <?php echo $patients['father_husband_name']; ?>
                                    </a>
                                </li>

                                <li class="list-group-item">
                                    <b>Gender</b> <a class="float-right text-capitalize">
                                        <?php echo $patients['gender']; ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Age</b> <a class="float-right">
                                        <?php echo $patients['age']; ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>DOB</b> <a class="float-right">
                                        <?php echo $patients['date_of_birth']; ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>CNIC</b> <a class="float-right">
                                        <?php echo $patients['cnic_no']; ?>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>


                    <div class="card card-primary">


                        <div class="card-body">

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
                            <p class="text-muted">
                                <?php echo $patients['address']; ?>
                            </p>
                            <hr>

                        </div>

                    </div>

                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">

                                <li class="nav-item"><a class="nav-link active" data-toggle="tab">History Timeline</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">

                                <div class="tab-pane active" id="timeline">

                                    <div class="timeline timeline-inverse">

                                        <?php
                                        // get patient history
                                        $query = "select * from patient_history where patient_id = '$id'  ORDER BY date ASC";
                                        $result = mysqli_query($link, $query);

                                        if ($result) {

                                            while ($patient_history = mysqli_fetch_assoc($result)) { ?>

                                                <div class="time-label">
                                                    <span
                                                        class="<?php echo $patient_history['is_rx'] == 1 ? 'bg-success' : 'bg-primary' ?>">
                                                        <?php echo $patient_history['date'] ?>
                                                    </span>
                                                </div>


                                                <div>
                                                    <i
                                                        class="fas  <?php echo $patient_history['is_rx'] == 1 ? 'bg-success fa-info' : 'bg-primary fa-plus-square' ?>"></i>
                                                    <div class="timeline-item">
                                                        <!-- <span class="time"><i class="far fa-clock"></i> 12:05</span> -->
                                                        <h3 class="timeline-header">
                                                            <a>
                                                                <?php echo $patient_history['is_rx'] == 1 ? 'Rx' : 'Diabetic Foot' ?>
                                                            </a>
                                                        </h3>
                                                        <div class="timeline-body">
                                                            <?php echo $patient_history['description'] ?>
                                                            <?php if ($patient_history['image']) { ?>
                                                                <img class="img-fluid"
                                                                    src="<?php echo $patient_history['is_rx'] == 1 ? '/dashboard/rxImages/' . $patient_history['image'] : '/dashboard/diabeticImages/' . $patient_history['image'] ?> "
                                                                    alt="Photo">

                                                            <?php } ?>
                                                        </div>
                                                        <div class="timeline-footer">

                                                            <!-- <a href="#" class="btn btn-danger btn-sm">Delete</a> -->
                                                        </div>
                                                    </div>
                                                </div>




                                            <?php }

                                        } ?>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- /.content -->
</div>



<?php require_once 'footer.php' ?>
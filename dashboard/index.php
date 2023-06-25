<?php require_once 'header.php' ?>

<?php
// Assuming you have established a database connection

// Query to count the records in the "patients" table
$sql = "SELECT COUNT(*) AS total FROM patients";

// Execute the query
$result = mysqli_query($link, $sql);

// Check if the query was successful
if ($result) {
    // Fetch the result row as an associative array
    $row = mysqli_fetch_assoc($result);

    // Access the count value
    $totalCount = $row['total'];


}

// Close the database connection
mysqli_close($link);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Add</h3>

                            <p>Patients</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="/dashboard/addpatients.php" class="small-box-footer">Add Patients <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-4 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                <?php echo $totalCount; ?>
                            </h3>

                            <p>Patients Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/dashboard/viewpatients.php" class="small-box-footer">View Patients <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Logout</h3>

                            <p>.</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="/dashboard/logout.php" class="small-box-footer">Logout <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php require_once 'footer.php' ?>
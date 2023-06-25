<?php require_once 'header.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>



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

    if (isset($_POST["add_history"])) {
        $patient_id = $_POST["id"];
        $is_rx = $_POST["is_rx"];

        $description = $_POST["description"];
        $image = $_FILES["image"]["name"];
        $date = $_POST["date"];





        $rximg = "rxImages/";


        // Check if both images are empty
        if (empty($image)) {



            $query = "INSERT INTO patient_history (patient_id, description,  date,is_rx)
      VALUES ( '$patient_id', '$description',  '$date','$is_rx', )";
        } else {
            $query = "INSERT INTO patient_history (patient_id,description,  image, date,is_rx )
  VALUES ('$patient_id','$description', '$image', '$date','$is_rx')";
            $run = mysqli_query($link, $query);

            // Handle image uploads
    

            if (!empty($image)) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $rximg . $image);
            }

            if (!empty($diabetic_foot_image)) {
                move_uploaded_file($_FILES["diabetic_foot_image"]["tmp_name"], $footimg . $diabetic_foot_image);
            }
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
                title: 'Patient's History Added Successfully.'
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
                        <form id="quickForm" method="POST" enctype="multipart/form-data">
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

                                            </div>
                                        </div>


                                    </div>

                                    <div class="form-group col-4">
                                        <label for="a">Name</label>
                                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                        <input type="hidden" name="is_rx" value="1">
                                        <input type="text" value="<?php echo $qfetch['name']; ?>" disabled
                                            class="form-control" id="a" placeholder="Name">
                                    </div>


                                    <div class="form-group col-4">
                                        <label for="b">Father/Husband Name</label>
                                        <input type="text" value="<?php echo $qfetch['father_husband_name']; ?>"
                                            class="form-control" id="b" disabled placeholder="Father/husband Name">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="f">MR NO</label>
                                        <input type="number" value="<?php echo $qfetch['mr_no']; ?>" disabled
                                            class="form-control" id="f" placeholder="MR NO">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="summernote" class="form-label">Rx</label>
                                        <textarea class="form-control" name="description" required
                                            placeholder="Enter Your RX"></textarea>
                                    </div>


                                    <div class="form-group col-4">
                                        <label for="summernote" class="form-label">Rx Image</label><br>


                                        <input type="file" name="image" class="form-control" id="z">
                                    </div>






                                    <div class="form-group col-2">
                                        <label for="summernote" class="form-label">Rx Date</label>
                                        <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date" required
                                            class="form-control" id="x">

                                    </div>
                                </div>







                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="add_history">Add
                                        History</button>

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

    $(document).ready(function () {
        var t = $('#summernote').summernote({
            height: 200,
            focus: true
        });
        $("#btn").click(function () {
            $('div.note-editable').height(150);
        });
    });
</script>





















<?php require_once 'footer.php' ?>
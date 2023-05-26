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
    if(isset($_GET["skDelId"])){
      $user_id = $_GET["skDelId"];
      $queryok = "delete from patients where id = '$user_id'";
      if(mysqli_query($link,$queryok)){
        echo "Deleted Successfully";


      }else{

        echo "error".mysqli_error($link);
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
                    <th>Patient Name</th>
                    <th>Father/ Husband Name</th>
                    <th>Patient_image</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Mr. No</th>
                    <th>Date</th>
                    <th>CNIC No</th>
                    <th>Date Of Birth</th>
                    <th>RX</th>
                    <th>Rx Image</th>
                    <th>Rx Date</th>
                    <th>Diebtic foot</th>
                    <th>Diebtic foot image</th>
                    <th>Foot Image Date</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  <tbody>

                  <?php 

                  $query = "select * from patients";
                  $run = mysqli_query($link,$query);
                  $sno = 1;
                  while($data = mysqli_fetch_array($run)){

                  
                  
                  
                  ?>

                    <tr>
                      <td><?php echo $sno++; ?> </td>
                      <td><?php echo $data[1]; ?> </td>
                      <td><?php echo $data[2]; ?> </td>
                      <td>
                        <?php

                        if(empty($data[3])){
                          echo "<b style='color:red'> Image Not Uploaded </b>";

                        }else{
                        
                        ?>

                      <img src="patientImages/<?php
                       echo $pimage = $data[3]; 
                       
                       ?>" width="100px" height="50px" />
                       <?php } ?>
                        
                        </td>
                      <td><?php echo $data[4]; ?> </td>
                      <td><?php echo $data[5]; ?> </td>
                      <td><?php echo $data[6]; ?> </td>
                      <td><?php echo $data[7]; ?> </td>
                      <td><?php echo $data[8]; ?> </td>
                      <td><?php echo $data[9]; ?> </td>
                      <td><?php echo $data[10]; ?> </td>
                      <td>
                        <?php
                        if(empty($data[11])){
                          echo "<b style='color:red'> Image Not Uploaded </b>";

                        }else{
                        
                        ?>

                        <img src="rxImages/<?php
                        echo $rximage = $data[11];
                        
                        ?>" width="100px" height="50px" />
                        <?php } ?>

                        </td>
                      <td><?php echo $data[12]; ?> </td>
                      <td><?php echo $data[13]; ?> </td>
                      <td>
                        <?php
                        if(empty($data[14])){
                          echo "<b style='color:red'> Image Not Uploaded </b>";


                        }else{
                        
                        ?>

                        <img src="diabeticImages/<?php
                        echo $footimage = $data[14];
                      
                      ?>" width="100px" height="50px" /> 
                      <?php } ?>
                      </td>
                      <td><?php echo $data[15]; ?> </td>
                      <td>
                      <a class="btn btn-outline-warning text-dark">EDIT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="viewpatients.php?skDelId=<?php echo $data[0]; ?>" onclick="return confirm('Are you Sure You Want to delete this?')" class="btn btn-outline-danger text-dark">DELETE</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a class="btn btn-outline-success text-dark">VIEW</a>


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
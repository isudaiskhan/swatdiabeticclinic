<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2023
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.1
        </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- SweetAlert2 -->
<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../assets/plugins/toastr/toastr.min.js"></script>
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/js/custom.js"></script>




<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>



<!-- jquery-validation -->
<script src="../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../assets/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
$(function() {
    $('#quickForm').validate({
        rules: {
            name: {
                required: true,
            },

            father_husband_name: {
                required: true,
            },

            age: {
                required: true,
            },

            gender: {
                required: true,

            },

            mr_no: {
                required: true,
            },

            date: {
                required: true,
            },

            cnic_no: {
                required: true,
            },

            date_of_birth: {
                required: true,
            },



            rx: {
                required: true,
            },



            rx_date: {
                required: true,
            },

            diabetic_foot: {
                required: true,
            },




            foot_image_date: {
                required: true,
            },


        },
        messages: {
            name: {
                required: "Please enter name",
            },

            father_husband_name: {
                required: "Please enter father/husband Name ",
            },

            age: {
                required: "Please enter age ",
            },

            gender: {
                required: "Please enter gender ",
            },


            mr_no: {
                required: "Please enter  mr no ",
            },

            date: {
                required: "Please enter  date ",
            },


            cnic_no: {
                required: "Please enter  cnic no ",
            },


            date_of_birth: {
                required: "Please enter date of birth ",
            },



            rx: {
                required: "Please enter rx ",
            },

            rx_date: {
                required: "Please enter rx date ",
            },

            diabetic_foot: {
                required: "Please enter your text ",
            },



            foot_image_date: {
                required: "Please enter foot image date ",
            },


        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>


<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>



</body>
</html>
<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3| Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">

  <style>
    .hoverTitles{
      color: black;
      cursor: pointer;
      font-weight: 500;
      /* font-size: small; */

    }
    .active1{
      cursor: pointer;
      font-weight: 500;
    }
      .hoverTitles:hover{
      color: #007bff !important;
    }
  </style>
</head>
<body>
<div class="wrapper">
<?php include("../include/header.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Department</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 grid-margin">
                <div class="card-body">
                  <a  href="employees.php">
                  <div class="d-flex flex-row align-items-start hoverTitles">
                  
                    <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-user-friends"></i>
                    <div class="ms-3">
                        <p class="pb-0 mb-0" style="line-height:1;">Employees</p>
                          <small class="text-muted small pt-0 mt-0">Set Up Employees</small>
                      
                    </div>
                  
                </div>
              </a>
                </div>
            </div>
            <!-- <p style="line-height:1;"><a href="department.html" target="_self" class="Department titles" style="font-weight:medium;">Department</a> <br> -->

          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card-body">
                  <a href="roles&privilages.php">
                    <div class="d-flex flex-row align-items-start active1">
                    
                      <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-user-lock"></i>
                      <div class="ms-3">
                          <p class="pb-0 mb-0" style="line-height:1;">Roles & Privilages</p>
                            <small class="text-muted small pt-0 mt-0">Set Roles</small>
                        
                      </div>
                    
                  </div>
                </a>
            </div>
        </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-md-3 grid-margin">
            <div class="card-body">
              <a href="shift&scheduling.php">
                <div class="d-flex flex-row align-items-start hoverTitles">
                  <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg 	far fa-clock"></i>
                  <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Shift & Scheduling</p>
                        <small class="text-muted small pt-0 mt-0">Manage Shifts</small>
                  </div>
              </div>
            </a>
            </div>
        </div>
          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card-body">
              <a href="employees-Exit.php">
                <div class="d-flex flex-row align-items-start hoverTitles">
                  <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-sign-out-alt"></i>
                  <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Employees Exit</p>
                        <small class="text-muted small pt-0 mt-0">Set up Employees Exit</small>
                  </div>
              </div>
            </a>
            </div>
        </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
        <div class="row">
            
            <!-- /.col (left) -->
            <div class="col-md-12">

                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">


                          

                          
                      </div>
                    </div>

              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">List All Employees</h5>
                  <div class="card-tools">
                    <!-- <button type="button" title="Grid view" class="btn btn-primary btn-sm">
                      <i class="fas fa-th-large"></i></button> -->
                    
                    <button type="button" class="btn btn-primary btn-sm"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fas fa-plus"></i> Add New</button>
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                              <thead>
                               <tr>
                               <th>ROLE NAME</th>
                               <th>MENU PERMISSION</th>
                               <th>ADDED DATE</th>
                              </thead>
                              <tbody>
                              </tbody>
                             <tfoot>

                             </tfoot>
                            </table>
                          </div>
                        </div>
              <!-- <div class="row">
                <div class="col-md-10">
                  <div class="dataTables_info" id="example1_info" role="status">Showing 1 to 10 of 57 entries
                  </div>
                </div>
                  <div class="col-md-2">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous">
                          <a href="#"  class="page-link">Previous</a>
                        </li>
                          
                            <li class="paginate_button" name="next" id="example1_next">
                              <a href="#"class="page-link">Next</a>
                            </li>
                          </ul>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (right) -->
          </div>
        
        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside>
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include("../include/footer.php") ?>
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../plugins/raphael/raphael.min.js"></script>
<script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      // "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": [   "colvis"]
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
<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
</script> -->
<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3| Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"
    />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
    />
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css" />
    <link
      rel="stylesheet"
      href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <!-- daterange picker -->
    <link
      rel="stylesheet"
      href="../../plugins/daterangepicker/daterangepicker.css"
    />
    <!-- iCheck for checkboxes and radio inputs -->
    <link
      rel="stylesheet"
      href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Bootstrap Color Picker -->
    <link
      rel="stylesheet"
      href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <!-- Bootstrap4 Duallistbox -->
    <link
      rel="stylesheet"
      href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"
    />
    <!-- BS Stepper -->
    <link
      rel="stylesheet"
      href="../../plugins/bs-stepper/css/bs-stepper.min.css"
    />
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
    <!-- summernote -->
    <link
      rel="stylesheet"
      href="../../plugins/summernote/summernote-bs4.min.css"
    />
    <!-- CodeMirror -->
    <link rel="stylesheet" href="../../plugins/codemirror/codemirror.css" />
    <link rel="stylesheet" href="../../plugins/codemirror/theme/monokai.css" />
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css" />
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <style>
    .hoverTitles{
      color: black;
      cursor: pointer;
      font-weight: 500 !important;
      /* font-size: small; */

    }
    .active1{
      cursor: pointer;
      font-weight: 500 !important;
    }
      .hoverTitles:hover{
      color: #007bff !important;
    }
  </style>
    <style>
      .feed-card .card-body .border-feed i {
        position: absolute;
        top: calc(50% - 20px);
        left: 0;
        right: 0;
        text-align: center;
        color: #fff;
        transition: all 0.3s ease-in-out;
      }
      .f-40 {
        font-size: 40px;
      }

      element.style {
      }
      .feed-card .card-body {
        position: relative;
        padding-left: 15px;
      }
      .p-b-0 {
        padding-bottom: 0px;
      }
      .p-t-0 {
        padding-top: 0px;
      }
      .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 25px;
      }
      .card {
        box-shadow: 0 2px 6px -1px rgb(0 0 0 / 10%);
        margin-bottom: 30px;
        transition: box-shadow 0.2s ease-in-out;
      }
      .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0px solid rgba(0, 0, 0, 0.125);
        border-radius: 4px;
      }
    </style>
    <style>
      .badge-light-primary {
        background: #e8e7fc;
        color: #7267ef;
        border-color: #e8e7fc;
      }
      .badge {
        display: inline-block;
        padding: 0.35em 0.5em;
        font-size: 75%;
        font-weight: 500;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 2px;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
    </style>
  </head>

  <body>
    <div class="wrapper">
  <?php include("../include/header.php") ?>
     
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
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-md-6 grid-margin">
                <div class="card-body">
                  <a href="disciplinaryCases.php">
                    <div class="d-flex flex-row align-items-start active1">
                      <i
                        class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fa fa-exclamation-circle"
                      ></i>
                      <div class="ms-3">
                        <p class="pb-0 mb-0" style="line-height: 1">
                            Disciplinary Cases
                        </p>
                        <small class="text-muted small pt-0 mt-0"
                          >Set Up Disciplinary Cases
                        </small>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- <p style="line-height:1;"><a href="department.html" target="_self" class="Department titles" style="font-weight:medium;">Department</a> <br> -->

              <!-- /.col -->
              <div class="col-md-6 grid-margin">
                <div class="card-body">
                  <a href="case-Type.php">
                    <div class="d-flex flex-row align-items-start hoverTitles">
                      <i
                        class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fa fa-server"
                      ></i>
                      <div class="ms-3">
                        <p class="pb-0 mb-0" style="line-height: 1">
                          Case Type
                        </p>
                        <small class="text-muted small pt-0 mt-0">Add Case Type</small>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>
            </div>

            <div class="row mt-3">
              <div class="col-lg-12 col-sm-12">

                <div class="collapse" id="collapseExample">

                    <div class="row my-3">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Add New Case</h5>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-primary btn-sm"
                                            data-bs-toggle="collapse" href="#collapseExample" role="button"
                                            aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-minus"></i> Hide</button>
                                        </button>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-lg-6">
                                            <label>Employee<sup><b style="color:red;">*</b></sup></label>
                                            <div class="input-group">
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected" >Vedant Naidu</option>
                                                    <option>Aniket Nangare</option>
                                                </select>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Case Type<sup><b style="color:red;">*</b></sup></label>
                                            <div class="input-group">
                                                <select class="form-control select2" data-placeholder="Select a State" style="width: 100%;">
                                                    <option selected="selected" >Case Type</option>
                                                    <option>Aniket Nangare</option>
                                                </select>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        
                                       
                                        <!-- /.col-lg-6 -->
                                    </div>
                                    <!-- /.row -->
    
    
                                    <div class="row my-3">
                                       
                                        <div class="col-lg-6">
                                            <label>Subject<sup><b style="color:red;">*</b></sup></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Subject">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <!-- /.col-lg-4 -->
                                        <div class="col-lg-6">
                                            <label>Case Date<sup><b style="color:red;">*</b></sup></label>
                                            <div class="input-group date" id="caseDate" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" placeholder="Case Date" data-target="#caseDate"/>
                                                <div class="input-group-append" data-target="#caseDate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <!-- /.col-lg-4 -->
                                    </div>
                                    <!-- /.row -->
    
    
                                    <div class="row my-3">
                                        <div class="col-lg-12">
                                            <label>Description <sup><b style="color:red;">*</b></sup></label>
                                            <div class="input-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description "></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <buttton type="button" id="reset" class="btn btn-default"
                                            name="reset" data-bs-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false"
                                            aria-controls="collapseExample">Reset</buttton>
                                        <buttton type="button" id="submit" class="btn btn-primary"
                                            name="Save">Save</buttton>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                              <div class="card-header">
                                <h5> Case Attachment  </h5>
                              </div>
                              <div class="card-body py-2">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="logo"> Attachment  <span class="text-danger">*</span> </label>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="attachment">
                                        <label class="custom-file-label">
                                          Choose file...  </label>
                                        <small> Upload files only: gif,png,jpg,jpeg </small> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">List All Cases</h5>
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
                                   <th><i class="fa fa-user"></i> EMPLOYEE</th>
                                   <th>CASE TYPE</th>
                                   <th><i class="fa fa-calendar"></i> CASE DATE</th>
                                   <th>SUBJECT</th>
                                   <th><i class="fa fa-user"></i> CASE BY</th>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                 <tfoot>
    
                                 </tfoot>
                                </table>
                              </div>
                            </div>
               
                </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </div>
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
    <!-- <script src="../../dist/js/adminlte.js"></script> -->

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
        $("#example1")
          .DataTable({
            // "responsive": true, "lengthChange": false, "autoWidth": false,
            // "buttons": [   "colvis"]
          })
          .buttons()
          .container()
          .appendTo("#example1_wrapper .col-md-6:eq(0)");
        $("#example2").DataTable({
          paging: true,
          lengthChange: false,
          searching: false,
          ordering: true,
          info: true,
          autoWidth: false,
          responsive: true,
        });
      });
    </script>

    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->

    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="../../plugins/codemirror/codemirror.js"></script>
    <script src="../../plugins/codemirror/mode/css/css.js"></script>
    <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        // Summernote
        $("#summernote").summernote();

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
          mode: "htmlmixed",
          theme: "monokai",
        });
      });
    </script>

    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Initialize Select2 Elements
        $(".select2bs4").select2({
          theme: "bootstrap4",
        });

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", { placeholder: "dd/mm/yyyy" });
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", { placeholder: "mm/dd/yyyy" });
        //Money Euro
        $("[data-mask]").inputmask();

        //Date picker
        $("#reservationdate").datetimepicker({
          format: "L",
        });

        // caseDate
        $("#caseDate").datetimepicker({
          format: "L",
        });

        //Date and time picker
        $("#reservationdatetime").datetimepicker({
          icons: { time: "far fa-clock" },
        });

        //Date range picker
        $("#reservation").daterangepicker();
        //Date range picker with time picker
        $("#reservationtime").daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: "MM/DD/YYYY hh:mm A",
          },
        });

        //Date range as a button
        $("#daterange-btn").daterangepicker(
          {
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [
                moment().subtract(1, "days"),
                moment().subtract(1, "days"),
              ],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [
                moment().startOf("month"),
                moment().endOf("month"),
              ],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
            startDate: moment().subtract(29, "days"),
            caseDate: moment(),
          },
          function (start, end) {
            $("#reportrange span").html(
              start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
            );
          }
        );

        //Timepicker
        $("#timepicker").datetimepicker({
          format: "LT",
        });

        //Bootstrap Duallistbox
        $(".duallistbox").bootstrapDualListbox();

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        $(".my-colorpicker2").on("colorpickerChange", function (event) {
          $(".my-colorpicker2 .fa-square").css("color", event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function () {
          $(this).bootstrapSwitch("state", $(this).prop("checked"));
        });
      });
      // BS-Stepper Init
      document.addEventListener("DOMContentLoaded", function () {
        window.stepper = new Stepper(document.querySelector(".bs-stepper"));
      });

      // DropzoneJS Demo Code Start
      Dropzone.autoDiscover = false;

      // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
      var previewNode = document.querySelector("#template");
      previewNode.id = "";
      var previewTemplate = previewNode.parentNode.innerHTML;
      previewNode.parentNode.removeChild(previewNode);

      var myDropzone = new Dropzone(document.body, {
        // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
      });

      myDropzone.on("addedfile", function (file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function () {
          myDropzone.enqueueFile(file);
        };
      });

      // Update the total progress bar
      myDropzone.on("totaluploadprogress", function (progress) {
        document.querySelector("#total-progress .progress-bar").style.width =
          progress + "%";
      });

      myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1";
        // And disable the start button
        file.previewElement
          .querySelector(".start")
          .setAttribute("disabled", "disabled");
      });

      // Hide the total progress bar when nothing's uploading anymore
      myDropzone.on("queuecomplete", function (progress) {
        document.querySelector("#total-progress").style.opacity = "0";
      });

      // Setup the buttons for all transfers
      // The "add files" button doesn't need to be setup because the config
      // `clickable` has already been specified.
      document.querySelector("#actions .start").onclick = function () {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
      };
      document.querySelector("#actions .cancel").onclick = function () {
        myDropzone.removeAllFiles(true);
      };
      // DropzoneJS Demo Code End
    </script>
  </body>
</html>

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
    <link rel="stylesheet"
        href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <style>
    
    label{
        font-size: large;
        color: #7267EF !important;
    }
    </style>


    <style>
        .user-card .user-about-block .certificated-badge {
            position: absolute;
            bottom: -5px;
            right: -5px;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            background: #fff;
            padding: 5px 3px;
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
                        </div><!-- /.col -->
                    </div><!-- /.row -->


                    <div class="row my-3 justify-content-center text-center">
                        <div class="col-xl-8 col-md-10">
                            <h2 class="mt-2">
                                Daily live reports !!                </h2>
                            <p class="my-4">Generating report is made easy with an advanced filter function to select the relevant employees or groups for the report. Prints any of our report for the previous periods.</p>
                        </div>
                    </div>


                    <div class="row" data-select2-id="669">
                        <!-- [] start -->
                        <div class="col-lg-4">
                            <div class="card user-card user-card-1">


                                <div class="nav flex-column nav-pills list-group list-group-flush list-pills"
                                    id="user-set-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-salary-tab"
                                        data-toggle="pill" href="#user-set-salary" role="tab"
                                        aria-controls="user-set-salary" aria-selected="false"> <span class="f-w-500">
                                           <i class="far fa-clock fa-lg m-1"></i>
                                            Attendance </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>


                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-basicinfo-tab" data-toggle="pill" href="#user-set-basicinfo"
                                        role="tab" aria-controls="user-set-basicinfo" aria-selected="false"> <span
                                            class="f-w-500"><i class="fa fa-calculator fa-lg m-1"></i> Payroll </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-information-tab" data-toggle="pill" href="#user-set-information"
                                        role="tab" aria-controls="user-set-information" aria-selected="true"> <span
                                            class="f-w-500"><i class="fas fa-layer-group fa-lg m-1"></i>
                                            Projects </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-picture-tab"
                                        data-toggle="pill" href="#user-set-picture" role="tab"
                                        aria-controls="user-set-picture" aria-selected="false"> <span
                                            class="f-w-500"><i class="fa fa-edit fa-lg m-1"></i>
                                            Tasks</span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-account-tab"
                                        data-toggle="pill" href="#user-set-account" role="tab"
                                        aria-controls="user-set-account" aria-selected="false"> <span
                                            class="f-w-500"><i class="far fa-calendar-alt fa-lg m-1"></i>
                                            Invoice </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-document-tab" data-toggle="pill" href="#user-set-document"
                                        role="tab" aria-controls="user-set-document" aria-selected="false"> <span
                                            class="f-w-500"><i class="far fa-plus-square fa-lg m-1"></i>
                                            Leave </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-agenda-tab"
                                        data-toggle="pill" href="#user-set-agenda" role="tab"
                                        aria-controls="user-set-agenda" aria-selected="false"> <span class="f-w-500">
                                            <i class="fa fa-bullseye fa-lg m-1"></i>
                                            Training Sessions </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-password-tab" data-toggle="pill" href="#user-set-password"
                                        role="tab" aria-controls="user-set-password" aria-selected="false"> <span
                                            class="f-w-500"> <i class="far fa-credit-card fa-lg m-1"></i>
                                            Account Statement </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>
                                </div>
                            </div>
                        </div>


                        <!-- FORMS -->

                        <input type="hidden" id="user_id" value="6">
                        <div class="col-lg-8" data-select2-id="668">
                            <div class="tab-content" id="user-set-tabContent" data-select2-id="user-set-tabContent">

                                <!-- Attendance -->

                                <div class="tab-pane fade" id="user-set-salary" role="tabpanel"
                                    aria-labelledby="user-set-salary-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Monthly Attendance Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Employee </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected"> vedant </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">Select Month </label>
                                                        <div class="input-group date" id="attendance"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                              placeholder="Select Month"  data-target="#attendance" />
                                                            <div class="input-group-append" data-target="#attendance"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                          <a href="../System-Report-Template/attendance-Template.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                    class="ladda-spinner"></span></button></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payroll -->

                                <div class="tab-pane fade" id="user-set-basicinfo" role="tabpanel"
                                    aria-labelledby="user-set-basicinfo-tab" data-select2-id="user-set-basicinfo">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Payroll Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Employee </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected"> vedant </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">Select Month </label>
                                                        <div class="input-group date" id="payroll"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                            placeholder="Select Month" data-target="#payroll" />
                                                            <div class="input-group-append" data-target="#payroll"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="../System-Report-Template/payroll.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                  data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                      class="ladda-spinner"></span></button></a>
                                          </div>
                                    </div>
                                </div>

                                <!-- Projects Report -->

                                <div class="tab-pane fade active show" id="user-set-information" role="tabpanel"
                                    aria-labelledby="user-set-information-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Projects Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Project </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected"> vedant </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">Status </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected" disabled> All Status
                                                            </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="../System-Report-Template/project.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                  data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                      class="ladda-spinner"></span></button></a>
                                          </div>
                                    </div>
                                </div>


                                <!-- Tasks -->

                                <div class="tab-pane fade" id="user-set-picture" role="tabpanel"
                                    aria-labelledby="user-set-picture-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Tasks Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Tasks </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected"> vedant </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">Status </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected" disabled> All Status
                                                            </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="../System-Report-Template/Task-Report.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                  data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                      class="ladda-spinner"></span></button></a>
                                          </div>
                                    </div>
                                </div>




                                <!-- Invoices -->


                                <div class="tab-pane fade" id="user-set-account" role="tabpanel"
                                    aria-labelledby="user-set-account-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Invoice Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Start Date </label>
                                                        <div class="input-group date" id="invoiceStart"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                            placeholder="Start Date"  data-target="#invoiceStart" />
                                                            <div class="input-group-append" data-target="#invoiceStart"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">End Date </label>
                                                        <div class="input-group date" id="invoiceEnd"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                            placeholder="End Date" data-target="#invoiceEnd" />
                                                            <div class="input-group-append" data-target="#invoiceEnd"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label"> Status </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected" disabled> ALL Status
                                                            </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="../System-Report-Template/invoice-report.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                  data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                      class="ladda-spinner"></span></button></a>
                                          </div>
                                    </div>
                                </div>




                                <!-- Leave -->


                                <div class="tab-pane fade" id="user-set-document" role="tabpanel"
                                    aria-labelledby="user-set-document-tab">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Leave Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Start Date </label>
                                                        <div class="input-group date" id="leaveStart"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                placeholder="Start Date" data-target="#leaveStart" />
                                                            <div class="input-group-append" data-target="#leaveStart"
                                                                 data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">End Date </label>
                                                        <div class="input-group date" id="leaveEnd"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                placeholder="End Date" data-target="#leaveEnd" />
                                                            <div class="input-group-append" data-target="#leaveEnd"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label"> Status </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected" disabled> ALL Status
                                                            </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="../System-Report-Template/leave-report.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                  data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                      class="ladda-spinner"></span></button></a>
                                          </div>
                                    </div>
                                </div>


                                <!-- Training Session -->


                                <div class="tab-pane fade" id="user-set-agenda" role="tabpanel"
                                    aria-labelledby="user-set-agenda-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Training Session Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Start Date </label>
                                                        <div class="input-group date" id="trainingStart"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                placeholder="Start Date" data-target="#trainingStart" />
                                                            <div class="input-group-append" data-target="#trainingStart"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">End Date </label>
                                                        <div class="input-group date" id="trainingEnd"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                placeholder="End Date" data-target="#trainingEnd" />
                                                            <div class="input-group-append" data-target="#trainingEnd"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label"> Status </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected" disabled> ALL Status
                                                            </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="../System-Report-Template/training-report.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                  data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                      class="ladda-spinner"></span></button></a>
                                          </div>
                                    </div>
                                </div>

                                <!-- Account -->


                                <div class="tab-pane fade" id="user-set-password" role="tabpanel"
                                    aria-labelledby="user-set-password-tab">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Account Statement Report</span></h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Start Date </label>
                                                        <div class="input-group date" id="accStateStart"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                            placeholder="Start Date" data-target="#accStateStart" />
                                                            <div class="input-group-append" data-target="#accStateStart"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">End Date </label>
                                                        <div class="input-group date" id="accStateEnd"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                            placeholder="End Date"  data-target="#accStateEnd" />
                                                            <div class="input-group-append" data-target="#accStateEnd"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label"> Status </label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option value="" selected="selected" disabled> ALL Status
                                                            </option>
                                                            <option value="5" data-select2-id="63"> Naidu </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="../System-Report-Template/account-statement-report.php">  <button type="button" class="btn btn-primary btn-lg ladda-button"
                                                  data-style="expand-right"><span class="ladda-label"> Save </span><span
                                                      class="ladda-spinner"></span></button></a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [] end -->
                    </div>






                </div><!-- /.container-fluid -->
            </div>
        </div>

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
    <script>
        $(function () {

            //Date picker
            $('#attendance').datetimepicker({
                format: 'L'
            });

            $('#payroll').datetimepicker({
                format: 'L'
            });
            $('#invoiceEnd').datetimepicker({
                format: 'L'
            });
            $('#invoiceStart').datetimepicker({
                format: 'L'
            });
            $('#leaveStart').datetimepicker({
                format: 'L'
            });
            $('#leaveEnd').datetimepicker({
                format: 'L'
            });
            $('#trainingEnd').datetimepicker({
                format: 'L'
            });
            $('#trainingStart').datetimepicker({
                format: 'L'
            });
            $('#accStateStart').datetimepicker({
                format: 'L'
            });
            $('#accStateEnd').datetimepicker({
                format: 'L'
            });

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function () { myDropzone.enqueueFile(file) }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function (progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function (file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function (progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function () {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function () {
            myDropzone.removeAllFiles(true)
        }
  // DropzoneJS Demo Code End
    </script>

</body>

</html>
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




                    <div class="row" data-select2-id="669">
                        <!-- [] start -->
                        <div class="col-lg-4">
                            <div class="card user-card user-card-1">
                                <div class="card-body pb-0">
                                    <div class="float-right">
                                        <span class="badge badge-success">Active</span>
                                    </div>
                                    <div class="media user-about-block align-items-center mt-0 mb-3">
                                        <div class="position-relative d-inline-block"> <img  class="img-radius img-fluid wid-80"  style="border-radius:50%; width:80px ;" src="http://hrm.tectignis.in/public/uploads/users/logo.jpg" alt="VEDANT NAIDU">
                                            <div class="certificated-badge"> <i class="fas fa-certificate text-primary bg-icon"  style="font-size:22px;"></i> <i class="fas fa-check front-icon text-white" style="font-size: 11px;position: absolute; top: 11px; left: 9px;"></i>
                                            </div>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1"> VEDANT NAIDU </h6>
                                            <p class="mb-0 text-muted"> MANAGER </p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item"> <span class="f-w-500"><i class="fa fa-user m-r-10"></i>  Manager <i class="fas fa-question-circle" data-toggle="tooltip" title="" data-original-title="Department Head"></i></span> <a href="#"  class="float-right text-body">  VEDANT NAIDU </a> </li>
                                    <li class="list-group-item border-bottom-0"> <span class="f-w-500"><i class="fa fa-envelope m-r-10"></i> Email  </span>  <span class="float-right" > vedantnaidu@tectignis.in </span>
                                    </li>
                                </ul>

                                <div class="nav flex-column nav-pills list-group list-group-flush list-pills"  id="user-set-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-salary-tab" data-toggle="pill" href="#user-set-salary" role="tab" aria-controls="user-set-salary" aria-selected="false"> <span class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock icon-svg-primary wid-20"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                        Contract        </span> <span class="float-right"><i class="fa fa-chevron-right"></i></span> </a>


                                    <a class="nav-link list-group-item list-group-item-action"  id="user-set-basicinfo-tab" data-toggle="pill" href="#user-set-basicinfo"  role="tab" aria-controls="user-set-basicinfo" aria-selected="false"> <span class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text icon-svg-primary wid-20">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg> Basic Information </span> <span class="float-right"><i class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"  id="user-set-information-tab" data-toggle="pill" href="#user-set-information"
                                        role="tab" aria-controls="user-set-information" aria-selected="true"> <span
                                            class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon-svg-primary wid-20">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            Personal Information </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-picture-tab"
                                        data-toggle="pill" href="#user-set-picture" role="tab"
                                        aria-controls="user-set-picture" aria-selected="false"> <span class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image icon-svg-primary wid-20">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                            Profile Picture </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-account-tab"
                                        data-toggle="pill" href="#user-set-account" role="tab"
                                        aria-controls="user-set-account" aria-selected="false"> <span class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book icon-svg-primary wid-20">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z">  </path>
                                        </svg>
                                            Account Information </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-document-tab" data-toggle="pill" href="#user-set-document"
                                        role="tab" aria-controls="user-set-document" aria-selected="false"> <span
                                            class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus icon-svg-primary wid-20">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"> </path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="12" y1="18" x2="12" y2="12"></line>
                                                <line x1="9" y1="15" x2="15" y2="15"></line>
                                            </svg>
                                            Documents </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-agenda-tab"
                                        data-toggle="pill" href="#user-set-agenda" role="tab"
                                        aria-controls="user-set-agenda" aria-selected="false"> <span class="f-w-500"><i class='fas fa-box'></i>
                                            Timesheet Agenda </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-password-tab" data-toggle="pill" href="#user-set-password"
                                        role="tab" aria-controls="user-set-password" aria-selected="false"> <span
                                            class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield icon-svg-primary wid-20">
                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                            </svg>
                                            Change Password </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>
                                </div>
                            </div>
                        </div>


                        <!-- FORMS -->

                        <input type="hidden" id="user_id" value="6">
                        <div class="col-lg-8" data-select2-id="668">
                            <div class="tab-content" id="user-set-tabContent" data-select2-id="user-set-tabContent">

<!-- CONTRACT OPTION -->

                                <div class="tab-pane fade" id="user-set-salary" role="tabpanel" aria-labelledby="user-set-salary-tab">
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <h5 class="alert-heading"><i class="fa fa-exclamation-circle mr-2"></i>Contract option </h5>
                                        <p class="mb-0">Define salary options with contract start and end date. </p>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock icon-svg-primary wid-20">
                                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg><span class="p-l-5">Set Contract </span></h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active" id="pills-contract-tab" data-toggle="pill" href="#pills-contract" role="tab" aria-controls="pills-contract" aria-selected="true"> Contract </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-allowances-tab" data-toggle="pill" href="#pills-allowances" role="tab" aria-controls="pills-allowances" aria-selected="false"> Allowances </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-commissions-tab" data-toggle="pill" href="#pills-commissions" role="tab" aria-controls="pills-commissions" aria-selected="false"> Commissions </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-statutory-tab" data-toggle="pill" href="#pills-statutory" role="tab" aria-controls="pills-statutory" aria-selected="false"> Statutory deductions </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-reimbursements-tab" data-toggle="pill" href="#pills-reimbursements" role="tab" aria-controls="pills-reimbursements" aria-selected="false"> Reimbursements </a> </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade active show" id="pills-contract"
                                                    role="tabpanel" aria-labelledby="pills-contract-tab">
                                                    <form action="http://hrm.tectignis.in/erp/employees/update_contract_info" name="update_contract" id="update_contract" autocomplete="off" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                        <h5 class="mt-1 mb-3 pb-3 border-bottom">List All Contract </h5>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>  Contract Date <span class="text-danger">*</span></label>
                                                                        <div class="input-group date" id="reservationdateAllowances" data-target-input="nearest">
                                                                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdateAllowances"/>
                                                                            <div class="input-group-append" data-target="#reservationdateAllowances" data-toggle="datetimepicker" required>
                                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="department"> Department <span class="text-danger">*</span></label>
                                                                        <select class="form-control select2" style="width: 100%;" required>
                                                                            <option value="" selected="selected"> Department </option>
                                                                            <option value="5" data-select2-id="63"> DEVELOPER </option>
                                                                            <option value="6"> SALES </option>
                                                                            <option value="7"> MARKETING </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6" id="designation_ajax">
                                                                    <div class="form-group">
                                                                        <label for="designation"> Designation </label>
                                                                        <span class="text-danger">*</span>
                                                                        <select class="form-control select2" style="width: 100%;" required>
                                                                            <option value="" selected="selected"> MANAGER </option>
                                                                            <option value="5" data-select2-id="63"> TRAINEE </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Basic Salary <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text"> INR </span></div>
                                                                            <input type="text" class="form-control" name="basic_salary" placeholder="Gross Salary" value="10000.00" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Hourly Rate <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text"> INR </span></div>
                                                                            <input type="text" class="form-control" name="hourly_rate" placeholder="Hourly Rate" value="0.00" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="salay_type">Payslip Type <i class="text-danger">*</i></label>
                                                                        <select class="form-control select2" style="width: 100%;" required>
                                                                            <option value="" selected="selected"> PER MONTH </option>
                                                                        </select>                                                                  
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="office_shift_id" class="control-label">Office Shift </label>
                                                                        <span class="text-danger">*</span>
                                                                        <select class="form-control select2" style="width: 100%;" required>
                                                                            <option value="" selected="selected"> morning</option>
                                                                            <option value="">Office Shift </option>
                                                                        </select>  
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Contract End </label>
                                                                            <div class="input-group date" id="reservationdateAllowances2" data-target-input="nearest">
                                                                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdateAllowances2"/>
                                                                                <div class="input-group-append" data-target="#reservationdateAllowances2" data-toggle="datetimepicker">
                                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Role Description <span class="text-danger">*</span></label>
                                                                        <textarea class="form-control" name="role_description" placeholder="Enter role description here.."></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button" id="submit" onclick="function()" data-style="expand-right"><span class="ladda-label"> Update Contract </span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                                    </form>
                                                </div>

                                                <!-- allowances -->

                                                <div class="tab-pane fade" id="pills-allowances" role="tabpanel" aria-labelledby="pills-allowances-tab">
                                                    <div class="card-body">
                                                        <h5 class="mt-1 mb-3 pb-3 border-bottom">List All Allowances </h5>
                                                        <div id="allowances_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                <div class="row">
                                                                  <div class="col-sm-12">
                                                                    <table id="allowances" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="allowances_info">
                                                                      <thead>
                                                                       <tr>
                                                                       <th>TITLE</th>
                                                                       <th>Date</th>
                                                                       <th>In Time</th>
                                                                       <th>Out Time</th>
                                                                       <th>Total Work</th>
                                                                      </thead>
                                                                      <tbody>
                                                                      </tbody>
                                                                     <tfoot>
                                        
                                                                     </tfoot>
                                                                    </table>
                                                                  </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <form action="" name="user_allowance" id="user_allowance" autocomplete="off" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="department"> Allowance Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option value="" selected="selected"> Non Taxable </option>
                                                                            <option value="5" data-select2-id="63"> Fully Taxable </option>
                                                                            <option value="6"> Partially Taxable </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6" id="designation_ajax">
                                                                    <div class="form-group">
                                                                        <label for="designation"> Amount Option </label>
                                                                        <span class="text-danger">*</span>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option value="" selected="selected"> Fixed </option>
                                                                            <option value="5" data-select2-id="63"> Percentage </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Title <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" name="Title" placeholder="Title" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Amount <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text"> INR </span></div>
                                                                            <input type="text" class="form-control" name="Amount" placeholder="Amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button"data-style="expand-right"><span class="ladda-label">Save </span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                                    </form>
                                                </div>

                                                <!-- Commissions -->

                                                <div class="tab-pane fade" id="pills-commissions" role="tabpanel" aria-labelledby="pills-commissions-tab">
                                                    <div class="card-body">
                                                        <h5 class="mt-1 mb-3 pb-3 border-bottom">List All Commissions </h5>
                                                        <div id="commission_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                <div class="row">
                                                                  <div class="col-sm-12">
                                                                    <table id="commission" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="commission_info">
                                                                      <thead>
                                                                       <tr>
                                                                       <th>TITLE</th>
                                                                       <th>Date</th>
                                                                       <th>In Time</th>
                                                                       <th>Out Time</th>
                                                                       <th>Total Work</th>
                                                                      </thead>
                                                                      <tbody>
                                                                      </tbody>
                                                                     <tfoot>
                                        
                                                                     </tfoot>
                                                                    </table>
                                                                  </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <form action="" name="user_commissions" id="user_commissions" autocomplete="off" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="department"> Allowance Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option value="" selected="selected"> Non Taxable </option>
                                                                            <option value="5" data-select2-id="63"> Fully Taxable </option>
                                                                            <option value="6"> Partially Taxable </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6" id="designation_ajax">
                                                                    <div class="form-group">
                                                                        <label for="designation"> Amount Option </label>
                                                                        <span class="text-danger">*</span>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option value="" selected="selected"> Fixed </option>
                                                                            <option value="5" data-select2-id="63"> Percentage </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Title <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" name="Title" placeholder="Title" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Amount <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text"> INR </span></div>
                                                                            <input type="text" class="form-control" name="Amount" placeholder="Amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label">Save </span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                                    </form>
                                                </div>

                                                <!-- Statutory -->
                                                
                                                <div class="tab-pane fade" id="pills-statutory" role="tabpanel"
                                                    aria-labelledby="pills-statutory-tab">
                                                    <div class="card-body user-profile-list">
                                                        <h5 class="mt-1 mb-3 pb-3 border-bottom">
                                                            List All Statutory deductions </h5>
                                                            <div id="statutoryTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                <div class="row">
                                                                  <div class="col-sm-12">
                                                                    <table id="statutoryTable" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="statutoryTable_info">
                                                                      <thead>
                                                                       <tr>
                                                                       <th>TITLE</th>
                                                                       <th>AMOUNT</th>
                                                                       <th>DEDUCTION OPTION</th>
                                                                      </thead>
                                                                      <tbody>
                                                                      </tbody>
                                                                     <tfoot>
                                        
                                                                     </tfoot>
                                                                    </table>
                                                                  </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <form action="" name="user_statutory" id="user_statutory" autocomplete="off"  method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="amount_option">Deduction Option <span class="text-danger">*</span></label>
                                                                            <select class="form-control select2" style="width: 100%;">
                                                                                <option value="" selected="selected"> Fixed </option>
                                                                                <option value="5" data-select2-id="63"> Percentage </option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="account_title">Title <span class="text-danger">*</span></label>
                                                                        <input class="form-control" placeholder="Title" name="option_title" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="account_number">Amount <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text">INR </span></div>
                                                                            <input class="form-control" placeholder="Amount" name="contract_amount" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button"
                                                                data-style="expand-right"><span class="ladda-label">Save </span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                                    </form>
                                                </div>

                                                <!-- Reimbursements -->

                                                <div class="tab-pane fade" id="pills-reimbursements" role="tabpanel"
                                                    aria-labelledby="pills-reimbursements-tab">
                                                    <div class="card-body user-profile-list">
                                                        <h5 class="mt-1 mb-3 pb-3 border-bottom"> List All Reimbursements </h5>
                                                         <div id="reimbursementsTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                <div class="row">
                                                                  <div class="col-sm-12">
                                                                    <table id="reimbursementsTable" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="reimbursementsTable_info">
                                                                      <thead>
                                                                       <tr>
                                                                       <th>TITLE</th>
                                                                       <th>AMOUNT</th>
                                                                       <th>DEDUCTION OPTION</th>
                                                                      </thead>
                                                                      <tbody>
                                                                      </tbody>
                                                                     <tfoot>
                                        
                                                                     </tfoot>
                                                                    </table>
                                                                  </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <form  action=""  name="user_otherpayment" id="user_otherpayment" autocomplete="off" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token"value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="is_allowance_taxable"> Reimbursement Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option value="" selected="selected">  Non Taxable  </option>
                                                                            <option value="5" data-select2-id="63">  Fully Taxable </option>
                                                                            <option value="5" data-select2-id="63"> Partially Taxable </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="amount_option">Amount Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option value="" selected="selected">  Fixed  </option>
                                                                            <option value="5" data-select2-id="63"> Percentage </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="account_title">
                                                                            Title <span class="text-danger">*</span></label>
                                                                        <input class="form-control" placeholder="Title" name="option_title" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="account_number">Amount <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text">INR </span></div>
                                                                            <input class="form-control" placeholder="Amount" name="contract_amount" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"> Save </span><span  class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<!-- BASIC INFO -->

                                <div class="tab-pane fade" id="user-set-basicinfo" role="tabpanel"
                                    aria-labelledby="user-set-basicinfo-tab" data-select2-id="user-set-basicinfo">
                                    <div class="card" data-select2-id="667">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  class="feather feather-file-text icon-svg-primary wid-20">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg><span class="p-l-5">Basic Information </span></h5>
                                        </div>
                                        <div class="card-body pb-2" data-select2-id="666">
                                            <div class="box-body" data-select2-id="665">
                                                <form action="" name="edit_user" id="edit_user" autocomplete="off" method="post"accept-charset="utf-8" data-select2-id="edit_user">
                                                    <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                    <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                    <div class="form-body" data-select2-id="664">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="company_name">First Name <span class="text-danger">*</span></label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                        </div>
                                                                        <input class="form-control" placeholder="First Name" name="first_name" type="text" id="fsname" value="VEDANT">
                                                                    </div>
                                                                    <span id="fstname"></span>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="company_name">Last Name <span class="text-danger">*</span></label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                        </div>
                                                                        <input class="form-control" placeholder="First Name" name="first_name" type="text" value="NAIDU">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="contact_number">Contact Number <span  class="text-danger">*</span></label>
                                                                    <input class="form-control" onKeyDown="if(this.value.length==10 && event.keyCode>47 && event.keyCode < 58)return false;"
 maxlength="10" maxlength="10" placeholder="Contact Number" name="contact_number" type="number" value="7845125623">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="gender" class="control-label"> Gender </label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option value="" selected="selected">  Male  </option>
                                                                        <option value="5" data-select2-id="63"> Female </option>
                                                                    </select>                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="date_of_birth">Employee ID <span class="text-danger">*</span> </label>
                                                                    <input class="form-control" placeholder="Employee ID" name="employee_id" type="text" value="075869">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="date_of_birth">Date of Birth </label>
                                                                    <div class="input-group date" id="reservationdateBI" data-target-input="nearest">
                                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdateBI"/>
                                                                        <div class="input-group-append" data-target="#reservationdateBI" data-toggle="datetimepicker">
                                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="status" class="control-label">Status </label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option value="" selected="selected">  Banned  </option>
                                                                        <option value="5" data-select2-id="63"> Active </option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="marital_status" class="control-label"> Marital Status </label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option value="" selected="selected">  Single  </option>
                                                                        <option value="5" data-select2-id="63"> Married </option>
                                                                        <option value="5" data-select2-id="63"> Widowed </option>
                                                                        <option value="5" data-select2-id="63"> Divorced or Separated </option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="role">Role <span class="text-danger">*</span></label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option value="" selected="selected">  Web Developer  </option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" data-select2-id="663">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="estate"> State / Province </label>
                                                                    <input class="form-control" placeholder="State / Province" name="state" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="ecity"> City </label>
                                                                    <input class="form-control" placeholder="City" name="city" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="ezipcode" class="control-label"> Zip Code / Postal Code </label>
                                                                    <input class="form-control" placeholder="Zip Code / Postal Code"  name="zipcode" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" data-select2-id="662">
                                                                <div class="form-group">
                                                                    <label for="email" class="control-label"> Religion </label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option value=""  selected="selected" data-select2-id="139" disabled>Religion</option>
                                                                        <option value="16" data-select2-id="672"> Agnosticism </option>
                                                                        <option value="17" data-select2-id="673"> Atheism </option>
                                                                        <option value="18" data-select2-id="674"> Baha'i </option>
                                                                        <option value="19" data-select2-id="675"> Buddhism </option>
                                                                        <option value="20" data-select2-id="676"> Christianity </option>
                                                                        <option value="21" data-select2-id="677"> Humanism </option>
                                                                        <option value="22" data-select2-id="678"> Hinduism </option>
                                                                        <option value="23" data-select2-id="679"> Islam </option>
                                                                        <option value="24" data-select2-id="680"> Jainism </option>
                                                                        <option value="25" data-select2-id="681"> Judaism </option>
                                                                        <option value="26" data-select2-id="682"> Sikhism </option>
                                                                        <option value="27" data-select2-id="683"> Zoroastrianism </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" data-select2-id="685">
                                                                <div class="form-group">
                                                                    <label for="blood_group">Blood Group </label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option value=""  selected="selected" data-select2-id="150" disabled>Blood Group</option>
                                                                        <option value="A+" data-select2-id="686">A+ </option>
                                                                        <option value="A-" data-select2-id="687">A- </option>
                                                                        <option value="B+" data-select2-id="688">B+ </option>
                                                                        <option value="B-" data-select2-id="689">B- </option>
                                                                        <option value="AB+" data-select2-id="690">AB+</option>
                                                                        <option value="AB-" data-select2-id="691">AB-</option>
                                                                        <option value="O+" data-select2-id="692">O+ </option>
                                                                        <option value="O-" data-select2-id="693">O- </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" data-select2-id="695">
                                                                <div class="form-group">
                                                                    <label for="nationality_id"> Nationality </label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option value="" selected="selected" data-select2-id="398" disabled> Select One </option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" data-select2-id="942">
                                                                <div class="form-group">
                                                                    <label for="citizenship_id" class="control-label">
                                                                        Citizenship </label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                        <option value="" selected="selected" data-select2-id="644" disabled> Select One </option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="address"> Address Line 1 </label>
                                                                    <input class="form-control" placeholder="Address Line 1" name="address_1" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="address"> Address Line 2 </label>
                                                                    <input class="form-control" placeholder="Address Line 2" name="address_2" type="text" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"> Update Profile </span><span class="ladda-spinner"></span></button>
                                        </div>
                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                    </div>
                                </div>

                                <!-- Personal Information -->



                                <div class="tab-pane fade active show" id="user-set-information" role="tabpanel" aria-labelledby="user-set-information-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon-svg-primary wid-20">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg><span class="p-l-5"> Personal Information </span></h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs  mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item"> <a class="nav-link" id="pills-bio-tab" data-toggle="tab" href="#pills-bio" role="tab" aria-controls="pills-bio" aria-selected="false"> Bio </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="tab" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> Social Profile </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-bank-tab"  data-toggle="tab" href="#pills-bank" role="tab"  aria-controls="pills-bank" aria-selected="false">  Bank Account </a> </li>
                                                <li class="nav-item"> <a class="nav-link active" id="pills-contact-tab"  data-toggle="tab" href="#pills-contact" role="tab"  aria-controls="pills-contact" aria-selected="true">  Emergency Contact </a> </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade" id="pills-bio" role="tabpanel" aria-labelledby="pills-bio-tab">
                                                    <form action="" name="edit_bio" id="edit_bio" autocomplete="off" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token"  value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label> Bio <span class="text-danger">*</span> </label>
                                                                        <textarea class="form-control" name="bio" rows="4"  placeholder="Enter staff bio here..">Enter staff bio here..</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label> Experience </label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option value="0" selected="selected" data-select2-id="660"> Startup </option>
                                                                            <option value="1"> 1 year </option>
                                                                            <option value="2"> 2 years </option>
                                                                            <option value="3"> 3 years </option>
                                                                            <option value="4"> 4 years </option>
                                                                            <option value="5"> 5 years </option>
                                                                            <option value="6"> 6 years </option>
                                                                            <option value="7"> 7 years </option>
                                                                            <option value="8"> 8 years </option>
                                                                            <option value="9"> 9 years </option>
                                                                            <option value="10"> 10 years </option>
                                                                            <option value="10+"> 10+ years </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button"  data-style="expand-right"><span class="ladda-label"> Update Bio </span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                                    </form>
                                                </div>

                                                 <!-- SOCIAL PROFILE -->
                                                
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                    aria-labelledby="pills-profile-tab">
                                                    <form action="" name="edit_social" id="edit_social" autocomplete="off" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token"  value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label> Facebook </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"> <span class="input-group-text bg-facebook text-white"> <i class="fab fa-facebook-f"></i> </span>
                                                                    </div>
                                                                    <input type="text" class="form-control"  placeholder="Profile Url" name="fb_profile"  value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Twitter </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"> <span class="input-group-text bg-twitter text-white"><i class="fab fa-twitter"></i> </span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Profile Url" name="twitter_profile" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Google Plus </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"> <span class="input-group-text bg-googleplus text-white"><i class="fab fa-google-plus-g"></i> </span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Profile Url" name="gplus_profile" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Linkedin </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"> <span class="input-group-text bg-linkedin text-white"> <i class="fab fa-linkedin-in"></i> </span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Profile Url" name="linkedin_profile" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button"  data-style="expand-right"><span class="ladda-label">  Update Social </span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check"  value=""></div>
                                                    </form>
                                                </div>

                                              <!-- BANK ACCOUNT -->

                                                <div class="tab-pane fade" id="pills-bank" role="tabpanel"
                                                    aria-labelledby="pills-bank-tab">
                                                    <form action=""  name="edit_bankinfo" id="edit_bankinfo" autocomplete="off"  method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token"  value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>  Account Title <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" placeholder="Account Title" name="account_title" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>  Account Number <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control"  placeholder="Account Number" name="account_number" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>  Bank Name <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control"  placeholder="Bank Name" name="bank_name"  value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label> IBAN <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" placeholder="IBAN" name="iban" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>  Swift Code <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control"  placeholder="Swift Code" name="swift_code" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>  Bank Branch <span class="text-danger">*</span></label>
                                                                        <textarea class="form-control"  placeholder="Bank Branch" name="bank_branch"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"> Update Bank Info </span><span  class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check"  value=""></div>
                                                    </form>
                                                </div>

                                                <!-- EMERGENCY CONTACT -->

                                                <div class="tab-pane fade active show" id="pills-contact"
                                                    role="tabpanel" aria-labelledby="pills-contact-tab">
                                                    <form action=""  name="edit_contact" id="edit_contact" autocomplete="off"  method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                        <input type="hidden" name="token"  value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw"  style="display:none;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label> Full Name <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" id="lstname" placeholder="Full Name" name="contact_full_name" value="" required>
                                                                        </div>
                                                                        <span id="lname"></span>

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label> Contact Number <span class="text-danger">*</span></label>
                                                                        <input type="number" id="number" class="form-control" onKeyDown="if(this.value.length==10 && event.keyCode>47 && event.keyCode < 58)return false;"
 maxlength="10" maxlength="10" placeholder="Contact Number" value="" name="contact_phone_no" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label> Email <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span  class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                            </div>
                                                                            <input type="email" id="email" class="form-control" placeholder="Email" value="" name="contact_email" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>  Address <span class="text-danger">*</span> </label>
                                                                        <textarea class="form-control" id="add" placeholder="Address" name="contact_address" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button type="submit" onclick="function()" id="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label">  Update Contact </span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value="" required></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- PROFILE PICTURE -->

                                <div class="tab-pane fade" id="user-set-picture" role="tabpanel"  aria-labelledby="user-set-picture-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24" fill="none" stroke="currentColor"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image icon-svg-primary wid-20">
                                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                    <polyline points="21 15 16 10 5 21"></polyline>
                                                </svg><span class="p-l-5">  Profile Picture </span></h5>
                                        </div>
                                        <div class="card-body pb-2">
                                            <div class="box-body">
                                                <form action="" name="edit_user_photo" id="edit_user_photo" autocomplete="off" method="post" accept-charset="utf-8">
                                                    <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                    <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw"style="display:none;">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="logo">  Profile Picture <span class="text-danger">*</span> </label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"  name="file">
                                                                        <label class="custom-file-label"> Choose file... </label>
                                                                        <small> Upload files only: gif,png,jpg,jpeg </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"> Update Picture </span><span class="ladda-spinner"></span></button>
                                        </div>
                                        <div style="display:none"><label>Bot Will Fill This Field</label>
                                            <input  type="text" name="ciapp_check" value=""></div>
                                    </div>
                                </div>

                                



                                <!-- ACCOUNT INFORMATION -->


                                <div class="tab-pane fade" id="user-set-account" role="tabpanel"
                                    aria-labelledby="user-set-account-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book icon-svg-primary wid-20">
                                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                                    <path  d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z">  </path>
                                                </svg><span class="p-l-5">  Account Information </span> <small  class="text-muted d-block m-l-25 m-t-5">  change your account information </small> </h5>
                                        </div>
                                        <form action="" name="edit_user" id="edit_account" autocomplete="off" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                            <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw"  style="display:none;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label> Username <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                                                                <input class="form-control" placeholder="Username" name="username" type="text" value="vedant">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label> Account Email <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span  class="input-group-text"><i  class="fas fa-envelope"></i></span></div>
                                                                <input class="form-control" placeholder="Account Email" name="email" type="email" value="vedantnaidu@tectignis.in">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label">  Save </span><span class="ladda-spinner"></span></button>
                                            </div>
                                            <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                        </form>
                                    </div>
                                </div>

                                <!-- CHANGE PASSWORD -->


                                <div class="tab-pane fade" id="user-set-password" role="tabpanel"
                                    aria-labelledby="user-set-password-tab">
                                    <div class="alert alert-warning" role="alert">
                                        <h5 class="alert-heading"><i class="feather icon-alert-circle mr-2"></i>  Alert! </h5>
                                        <p>  Dont share this password to anyone. The password should be changed at least once in 3 months. </p>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  class="feather feather-shield icon-svg-primary wid-20">
                                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                                </svg><span class="p-l-5"> Change Password </span></h5>
                                        </div>
                                        <form action="" name="change_password" id="change_password" autocomplete="off" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                            <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>  Current password </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                                <input type="password" readonly="readonly" class="form-control" name="pass"  placeholder="Current password" value="********">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label> New password <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                                <input type="password" class="form-control" name="new_password" placeholder="New password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>  Repeat new password <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                                <input type="password" class="form-control" name="confirm_password"  placeholder="Repeat new password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-danger ladda-button"  data-style="expand-right"><span class="ladda-label">  Change Password </span><span  class="ladda-spinner"></span></button>
                                            </div>
                                            <div style="display:none"><label>Bot Will Fill This Field</label><input  type="text" name="ciapp_check" value=""></div>
                                        </form>
                                    </div>
                                </div>



                                <!-- ADD DOCUMENT -->


                                <div class="tab-pane fade" id="user-set-document" role="tabpanel" aria-labelledby="user-set-document-tab">
                                    <div class="card user-profile-list">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus icon-svg-primary wid-20">
                                                    <path  d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"> </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="12" y1="18" x2="12" y2="12"></line>
                                                    <line x1="9" y1="15" x2="15" y2="15"></line>
                                                </svg><span class="p-l-5"> Documents </span></h5>
                                        </div>
                                        <div class="card-body">
                                                            <div id="addDocument_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                <div class="row">
                                                                  <div class="col-sm-12">
                                                                    <table id="addDocument" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="addDocument_info">
                                                                      <thead>
                                                                       <tr>
                                                                       <th>DOCUMENT NAME</th>
                                                                       <th>DOCUMENT TYPE</th>
                                                                       <th>DOCUMENT FILE</th>
                                                                      
                                                                      </thead>
                                                                      <tbody>
                                                                      </tbody>
                                                                     <tfoot>
                                        
                                                                     </tfoot>
                                                                    </table>
                                                                  </div>
                                                                </div>
                                        <div class="card-header with-elements"> <span class="card-header-title mr-2"><strong> Add New </strong> Document </span> </div>
                                        <form action="" name="user_document" id="user_document" autocomplete="off" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_token"  value="53a234476ba3b824da743d5aeaa31e04">
                                            <input type="hidden" name="token"  value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                            <div class="card-body pb-2">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="date_of_expiry" class="control-label"> Document Name <span class="text-danger">*</span></label>
                                                            <input class="form-control" placeholder="Document Name"  name="document_name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="title" class="control-label"> Document Type <span class="text-danger">*</span></label>
                                                            <input class="form-control" placeholder="Eg. Payslip" name="document_type" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="logo">  Document File <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"  name="document_file">
                                                                <label class="custom-file-label"> Choose file... </label>
                                                                <small> Upload files only: png, jpg, jpeg, gif, txt, pdf,  xls, xlsx, doc, docx </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"> Add Document </span><span class="ladda-spinner"></span></button>
                                            </div>
                                            <div style="display:none"><label>Bot Will Fill This Field</label><input
                                                    type="text" name="ciapp_check" value=""></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- TIMESHEET AGENDA -->


                                <div class="tab-pane fade" id="user-set-agenda" role="tabpanel" aria-labelledby="user-set-agenda-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class='fas fa-box'></i><span class="p-l-5"> Timesheet Agenda </span></h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs  mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active"  id="pills-leave_request-tab" data-toggle="tab"  href="#pills-leave_request" role="tab"  aria-controls="pills-leave_request" aria-selected="false"> Leave Request </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-expense_claim-tab" data-toggle="tab" href="#pills-expense_claim" role="tab" aria-controls="pills-expense_claim" aria-selected="true"> Expense Claim </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-loan-tab"  data-toggle="tab" href="#pills-loan" role="tab" aria-controls="pills-loan" aria-selected="false">  Request Loan </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-travel-tab" data-toggle="tab" href="#pills-travel" role="tab" aria-controls="pills-travel" aria-selected="false"> Travel Request </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-advance_salary-tab" data-toggle="tab" href="#pills-advance_salary" role="tab" aria-controls="pills-advance_salary" aria-selected="false"> Advance Salary </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-overtime-tab"  data-toggle="tab" href="#pills-overtime" role="tab" aria-controls="pills-overtime" aria-selected="false"> Overtime Request </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-awards-tab" data-toggle="tab" href="#pills-awards" role="tab" aria-controls="pills-awards" aria-selected="false"> Awards </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-projects-tab"  data-toggle="tab" href="#pills-projects" role="tab" aria-controls="pills-projects" aria-selected="false">  Projects </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-tasks-tab"  data-toggle="tab" href="#pills-tasks" role="tab" aria-controls="pills-tasks" aria-selected="false"> Tasks </a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="pills-payslip-tab" data-toggle="tab" href="#pills-payslip" role="tab" aria-controls="pills-payslip" aria-selected="false">  Payslip History </a> </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">

<!-- LEAVE REQUEST -->

                                                <div class="tab-pane fade active show" id="pills-leave_request" role="tabpanel" aria-labelledby="pills-leave_request-tab">
                                                    <div class="user-profile-list ">
                                                        <div class="card-header">
                                                            <h5>  List All Leave </h5>
                                                        </div>
                                                        <div class="box-datatable table-responsive">
                                                            <div id="xin_table_expense_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div id="leaveRequest_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                          <table id="leaveRequest" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="leaveRequest_info">
                                                                            <thead>
                                                                             <tr>
                                                                             <th>EMPLOYEE</th>
                                                                             <th>LEAVE TYPE</th>
                                                                             <th><i class="fa fa-calendar"></i> LEAVE DURATION</th>
                                                                             <th>DAYS</th>
                                                                             <th><i class="fa fa-calendar"></i>APPLIED ON</th>
                                                                             <th>STATUS</th>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>
                                                                           <tfoot>
                                              
                                                                           </tfoot>
                                                                          </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                    </div>
                                                </div>

                                                <!-- Expense Claim -->

                                                <div class="tab-pane fade" id="pills-expense_claim" role="tabpanel" aria-labelledby="pills-expense_claim-tab">
                                                    <div class="user-profile-list ">
                                                        <div class="card-header">
                                                            <h5> List All Expense Claim </h5>
                                                        </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_expense_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="explainClaim_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="explainClaim" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="explainClaim_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>ACCOUNT TITLE</th>
                                                                                 <th>PAYEE</th>
                                                                                 <th>AMOUNT</th>
                                                                                 <th>CATEGORY</th>
                                                                                 <th>REF#</th>
                                                                                 <th>PAYMENT METHOD</th>
                                                                                 <th>DATE</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Request Loan -->


                                                <div class="tab-pane fade" id="pills-loan" role="tabpanel" aria-labelledby="pills-loan-tab">
                                                    <div class="user-profile-list">
                                                        <div class="card-header"> <h5> List All Request Loan </h5> </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_loan_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="requestLoan_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="requestLoan" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="requestLoan_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>EMPLOYEE</th>
                                                                                 <th>AMOUNT</th>
                                                                                 <th>MONTH & YEAR</th>
                                                                                 <th>ONE TIME DEDUCT</th>
                                                                                 <th>EMI</th>
                                                                                 <th>CREATED AT</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Travel Request -->


                                                <div class="tab-pane fade" id="pills-travel" role="tabpanel"
                                                    aria-labelledby="pills-travel-tab">
                                                    <div class="user-profile-list ">
                                                        <div class="card-header"> <h5>  List All Travel Request </h5> </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_travel_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="travelRequest_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="travelRequest" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="travelRequest_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th><i class="fa fa-user"></i>EMPLOYEE</th>
                                                                                 <th>PLACE TO VISIT</th>
                                                                                 <th>VISIT PURPOSE</th>
                                                                                 <th>ARRANGEMENT TYPE</th>
                                                                                 <th>ACTUAL BUDGET</th>
                                                                                 <th><i class="fa fa-calendar"></i>END DATE</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Advance Salary -->


                                                <div class="tab-pane fade" id="pills-advance_salary" role="tabpanel"
                                                    aria-labelledby="pills-advance_salary-tab">
                                                    <div class="">
                                                        <div class="card-header"> <h5> List All Advance Salary </h5> </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_ad_salary_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="advanceSalary_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="advanceSalary" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="advanceSalary_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>EMPLOYEE</th>
                                                                                 <th>AMOUNT</th>
                                                                                 <th>MONTH & YEAR</th>
                                                                                 <th>ONE TIME DEDUCT</th>
                                                                                 <th>EMI</th>
                                                                                 <th>CREATED AT</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- OVERTIME REQUEST -->


                                                <div class="tab-pane fade" id="pills-overtime" role="tabpanel" aria-labelledby="pills-overtime-tab">
                                                    <div class="">
                                                        <div class="card-header">  <h5>  List All Overtime Request </h5> </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_overtime_wrapper"  class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="overtimeRequest_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="overtimeRequest" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="overtimeRequest_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>EMPLOYEE</th>
                                                                                 <th>DATE </th>
                                                                                 <th>IN TIME</th>
                                                                                 <th>OUT TIME</th>
                                                                                 <th>TOTAL HOURS</th>
                                                                                 <th>STATUS</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- AWARDS -->


                                                <div class="tab-pane fade" id="pills-awards" role="tabpanel"  aria-labelledby="pills-awards-tab">
                                                    <div class="user-profile-list ">
                                                        <div class="card-header">  <h5>  List All Awards </h5> </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_awards_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="awards_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="awards" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="awards_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>AWARD TYPE</th>
                                                                                 <th> <i class="fa fa-user"></i> EMPLOYEE </th>
                                                                                 <th>AWARD GIFT</th>
                                                                                 <th>AWARD CASH</th>
                                                                                 <th>TOTAL HOURS</th>
                                                                                 <th>MONTH & YEAR</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- PROJECTS -->

                                                <div class="tab-pane fade" id="pills-projects" role="tabpanel"  aria-labelledby="pills-projects-tab">
                                                    <div class="user-profile-list ">
                                                        <div class="card-header"> <h5>  List All Projects </h5>  </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_projects_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="projects_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="projects" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="projects_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>PROJECTS</th>
                                                                                 <th>CLIENT</th>
                                                                                 <th><i class="fa fa-calendar"></i> START DATE</th>
                                                                                 <th><i class="fa fa-calendar"></i> END DATE</th>
                                                                                 <th> <i class="fa fa-user"></i> TEAM </th>
                                                                                 <th>PRIORITY</th>
                                                                                 <th>PROGRESS</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- TASKS -->

                                                <div class="tab-pane fade" id="pills-tasks" role="tabpanel"  aria-labelledby="pills-tasks-tab">
                                                    <div class="user-profile-list ">
                                                        <div class="card-header"> <h5>  List All Tasks </h5> </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_tasks_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="tasks_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="tasks" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="tasks_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>TITLE</th>
                                                                                 <th> <i class="fa fa-user"></i> TEAM </th>
                                                                                 <th><i class="fa fa-calendar"></i> START DATE</th>
                                                                                 <th><i class="fa fa-calendar"></i> END DATE</th>
                                                                                 <th>STATUS</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- PAYSLIP HISTORY -->

                                                <div class="tab-pane fade" id="pills-payslip" role="tabpanel"  aria-labelledby="pills-payslip-tab">
                                                    <div class="user-profile-list ">
                                                        <div class="card-header"> <h5> Payslip History </h5>  </div>
                                                        <div class="m-t-20">
                                                            <div class="box-datatable table-responsive">
                                                                <div id="xin_table_payslip_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div id="payslipHistory_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                              <table id="payslipHistory" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="payslipHistory_info">
                                                                                <thead>
                                                                                 <tr>
                                                                                 <th>EMPLOYEE</th>
                                                                                 <th> NET PAYABLE </th>
                                                                                 <th> SALARY MONTH</th>
                                                                                 <th> PAY DATE</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                               <tfoot>
                                                  
                                                                               </tfoot>
                                                                              </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

//TEXT VALIDATION
$("#lname").hide();
  $("#lstname").keyup(function(){
   txt_check1();
 });
 function txt_check1(){
   let txt=$("#lstname").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(txt)){
    $("#lname").show().html("Enter Alphabets only").css("color","red").focus();
    txt_err=false;
    return false;
   }
   else{
       $("#lname").hide();

   }
 }

 $("#sub").click(function(){
   txt_err = true;
         txt_check1();

     if((txt_err==true)){
        return true;
     }
     else{return false;}
  });
</script>

<script>
let submit = document.getElementById("submit");
submit.addEventListener("click", function(){
 let contact_full_name = document.getElementById("lstname").value;
 let contact_phone_no = document.getElementById("number").value;
 let contact_email = document.getElementById("email").value;
 let contact_address = document.getElementById("add").value;
 


if(contact_full_name == "" || contact_phone_no == "" || contact_email == "" || contact_address == "" ){
    swal("Oops...", "Please fill all the fields", "error");
}
    else{
        swal("Saved!", "HRM Save", "success");
    }
});

    </script>

   
   <script>

// allowances

        $(function () {
            $("#allowances").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#allowances_wrapper .col-md-6:eq(0)');
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

// commission

        $(function () {
            $("#commission").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#commission_wrapper .col-md-6:eq(0)');
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

// statutoryTable

        $(function () {
            $("#statutoryTable").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#statutoryTable_wrapper .col-md-6:eq(0)');
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

// reimbursementsTable

        $(function () {
            $("#reimbursementsTable").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#reimbursementsTable_wrapper .col-md-6:eq(0)');
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

 // addDocument


        $(function () {
            $("#addDocument").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#addDocument_wrapper .col-md-6:eq(0)');
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

// leaveRequest

        $(function () {
            $("#leaveRequest").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#leaveRequest_wrapper .col-md-6:eq(0)');
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

//   explainClaim

        $(function () {
            $("#explainClaim").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#explainClaim_wrapper .col-md-6:eq(0)');
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

// requestLoan

        $(function () {
            $("#requestLoan").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#requestLoan_wrapper .col-md-6:eq(0)');
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


 //travelRequest 

        $(function () {
            $("#travelRequest").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#travelRequest_wrapper .col-md-6:eq(0)');
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

 // advanceSalary

        $(function () {
            $("#advanceSalary").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#advanceSalary_wrapper .col-md-6:eq(0)');
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

 // overtimeRequest

        $(function () {
            $("#overtimeRequest").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#overtimeRequest_wrapper .col-md-6:eq(0)');
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

 // awards

        $(function () {
            $("#awards").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#awards_wrapper .col-md-6:eq(0)');
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

// projects

        $(function () {
            $("#projects").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#projects_wrapper .col-md-6:eq(0)');
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

// tasks

        $(function () {
            $("#tasks").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#tasks_wrapper .col-md-6:eq(0)');
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

  // payslipHistory

  $(function () {
            $("#payslipHistory").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#payslipHistory_wrapper .col-md-6:eq(0)');
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
             $('#reservationdateAllowances').datetimepicker({
                format: 'L'
            });

            $('#reservationdateAllowances2').datetimepicker({
                format: 'L'
            });
            
            $('#reservationdateBI').datetimepicker({
                format: 'L'
            });
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            $('#reservationdate').datetimepicker({
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
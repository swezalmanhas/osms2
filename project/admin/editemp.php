<?php

define('PAGE', 'request');
include('../dbconnection.php');
session_start();
if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['empupdate'])){
    // Checking for Empty Fields
    if(($_REQUEST['empName'] == "") || ($_REQUEST['empCity'] == "") || ($_REQUEST['empMobile'] == "") || ($_REQUEST['empEmail'] == "")){
     // msg displayed if required field missing
     $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
      // Assigning User Values to Variable
      $eId = $_REQUEST['empId'];
      $eName = $_REQUEST['empName'];
      $eCity = $_REQUEST['empCity'];
      $eMobile = $_REQUEST['empMobile'];
      $eEmail = $_REQUEST['empEmail'];
    $sql = "UPDATE technician_tb SET empName = '$eName', empCity = '$eCity', empMobile = '$eMobile', empEmail = '$eEmail' WHERE empid = '$eId'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/custom2.css">
    <script src="../js/script2.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>
        <?php echo "TITLE" ?>
    </title>
</head>

<body>
    <div class="app-container">
        <div class="app-left">
            <button class="close-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>
            <div class="app-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart-2">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                </svg>
                <span>Recruiter</span>
            </div>
            <ul class="nav-list">
                <li class="nav-list-item  ">
                    <a class="nav-list-link  " href="Dashboard.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-columns">
                            <path
                                d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-list-item">
                    <a class="nav-list-link" href="work.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-briefcase">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg>
                        Work Order
                    </a>
                </li>
                <li class="nav-list-item ">
                    <a class="nav-list-link" href="request.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
                            <polyline points="13 2 13 9 20 9" />
                        </svg>
                        Requests
                    </a>
                </li>
               
                <li class="nav-list-item active">
                    <a class="nav-list-link" href="technician.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                        </svg>
                        Technician
                    </a>
                </li>
                <li class="nav-list-item ">
                    <a class="nav-list-link" href="requester.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                        </svg>
                        Requester
                    </a>
                </li>
             
                <li class="nav-list-item">
                    <a class="nav-list-link" href="changepass.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                        </svg>
                        Change Password
                    </a>
                </li>
                <li class="nav-list-item">
                    <a class="nav-list-link" href="../logout.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </div>

        <div class="app-main">
            <div class="main-header-line">
                <h1>Request</h1>
            </div>
            <div class="col-sm-6 mt-5  mx-3 ">
  <h3 class="text-center" style="color: orangered;">Update Technician Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM technician_tb WHERE empid = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group mt-3" style="color: whitesmoke;">
      <label for="empId">Emp ID</label>
      <input type="text" class="form-control" id="empId" name="empId" value="<?php if(isset($row['empid'])) {echo $row['empid']; }?>"
        readonly>
    </div>
    <div class="form-group mt-3"  style="color: whitesmoke;">
      <label for="empName">Name</label>
      <input type="text" class="form-control" id="empName" name="empName" value="<?php if(isset($row['empName'])) {echo $row['empName']; }?>">
    </div>
    <div class="form-group mt-3"  style="color: whitesmoke;">
      <label for="empCity">City</label>
      <input type="text" class="form-control" id="empCity" name="empCity" value="<?php if(isset($row['empCity'])) {echo $row['empCity']; }?>">
    </div>
    <div class="form-group mt-3"  style="color: whitesmoke;">
      <label for="empMobile">Mobile</label>
      <input type="text" class="form-control" id="empMobile" name="empMobile" value="<?php if(isset($row['empMobile'])) {echo $row['empMobile']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group mt-3"  style="color: whitesmoke;">
      <label for="empEmail">Email</label>
      <input type="email" class="form-control" id="empEmail" name="empEmail" value="<?php if(isset($row['empEmail'])) {echo $row['empEmail']; }?>">
    </div>
    <div class="text-center">
      <button type="submit" class="btn mt-5" id="empupdate" name="empupdate">Update</button>
      <a href="technician.php" class="btn mt-5 ">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
        </div>

        <?php include('includes_ad/footer_ad.php');?>
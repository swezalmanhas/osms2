<?php
define('TITLE', 'Work Order');
define('PAGE', 'work');
 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
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
   <link rel="stylesheet"  href="../css/custom2.css">
   <script  src="../js/script2.js"></script>
    <title><?php echo "TITLE"?></title>
</head>
<body>
    <div class="app-container">
        <div class="app-left">
          <button class="close-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
          </button>
          <div class="app-logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
              <line x1="18" y1="20" x2="18" y2="10"/>
              <line x1="12" y1="20" x2="12" y2="4"/>
              <line x1="6" y1="20" x2="6" y2="14"/>       </svg>
            <span>Recruiter</span>
          </div>
          <ul class="nav-list">
            <li class="nav-list-item  ">
              <a class="nav-list-link  " href="Dashboard.php"  >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"/></svg>
                Dashboard
              </a>
            </li>
            <li class="nav-list-item " >
              <a class="nav-list-link " href="work.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                Work Order
              </a>
            </li>
            <li class="nav-list-item ">
              <a class="nav-list-link" href="request.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg>
                Requests
              </a>
            </li>
           
            <li class="nav-list-item">
              <a class="nav-list-link" href="technician.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                Technician
              </a>
            </li>
            <li class="nav-list-item">
              <a class="nav-list-link" href="requester.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                Requester
              </a>
            </li>
            
            <li class="nav-list-item">
              <a class="nav-list-link" href="changepass.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                Change Password
              </a>
            </li>
            <li class="nav-list-item">
              <a class="nav-list-link" href="../logout.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                Logout
              </a>
            </li>
          </ul>
        </div>
        <div class="app-main">
          <div class="main-header-line">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6 mt-5  mx-3">
 <h3 class="text-center" style="color: orangered;">Assigned Work Details</h3>
 <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
 <table class="table table-bordered" style="color: white;">
  <tbody>
   <tr>
    <td>Request ID</td>
    <td>
     <?php if(isset($row['request_id'])) {echo $row['request_id']; }?>
    </td>
   </tr>
   <tr>
    <td>Request Info</td>
    <td>
     <?php if(isset($row['request_info'])) {echo $row['request_info']; }?>
    </td>
   </tr>
   <tr>
    <td>Request Description</td>
    <td>
     <?php if(isset($row['request_desc'])) {echo $row['request_desc']; }?>
    </td>
   </tr>
   <tr>
    <td>Name</td>
    <td>
     <?php if(isset($row['requester_name'])) {echo $row['requester_name']; }?>
    </td>
   </tr>
   <tr>
    <td>Address Line 1</td>
    <td>
     <?php if(isset($row['requester_add1'])) {echo $row['requester_add1']; }?>
    </td>
   </tr>
   <tr>
    <td>Address Line 2</td>
    <td>
     <?php if(isset($row['requester_add2'])) {echo $row['requester_add2']; }?>
    </td>
   </tr>
   <tr>
    <td>City</td>
    <td>
     <?php if(isset($row['requester_city'])) {echo $row['requester_city']; }?>
    </td>
   </tr>
   <tr>
    <td>State</td>
    <td>
     <?php if(isset($row['requester_state'])) {echo $row['requester_state']; }?>
    </td>
   </tr>
   <tr>
    <td>Pin Code</td>
    <td>
     <?php if(isset($row['requester_zip'])) {echo $row['requester_zip']; }?>
    </td>
   </tr>
   <tr>
    <td>Email</td>
    <td>
     <?php if(isset($row['requester_email'])) {echo $row['requester_email']; }?>
    </td>
   </tr>
   <tr>
    <td>Mobile</td>
    <td>
     <?php if(isset($row['requester_mobile'])) {echo $row['requester_mobile']; }?>
    </td>
   </tr>
   <tr>
    <td>Assigned Date</td>
    <td>
     <?php if(isset($row['assign_date'])) {echo $row['assign_date']; }?>
    </td>
   </tr>
   <tr>
    <td>Technician Name</td>
    <td>
     <?php if(isset($row['assign_tech'])) {echo $row['assign_tech']; }?>
    </td>
   </tr>
   <tr>
    <td>Customer Sign</td>
    <td></td>
   </tr>
   <tr>
    <td>Technician Sign</td>
    <td></td>
   </tr>
  </tbody>
 </table>
 <div class="text-center">
  <form class='d-print-none d-inline mr-3'><input class='btn ' type='submit' value='Print' onClick='window.print()'></form>
  <form class='d-print-none d-inline' action="work.php"><input class='btn btn-secondary' type='submit' value='Close'></form>
 </div>
</div>
        </div>

        <?php  
   include('includes_ad/footer_ad.php')?>
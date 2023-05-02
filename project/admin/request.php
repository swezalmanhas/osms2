<?php

define('PAGE', 'request');
include('../dbconnection.php');
session_start();
if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php'</script>";
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
              
                <li class="nav-list-item">
                    <a class="nav-list-link" href="assests.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        Assets
                    </a>
                </li>
                <li class="nav-list-item">
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
                <li class="nav-list-item">
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

            <div class="container">
                <div class="row ">
                    
                        <div class="col-sm-4 mb-5 ml-10">
                            <?php
                            $sql = "SELECT request_id,request_info,request_desc,requester_date FROM submitrequest_tb";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="card mt-5 mx-5">';
                                    echo '<div class="card-header">';
                                    echo 'Request ID:' . $row['request_id'];
                                    echo '</div>';
                                    echo '<div class="card-body">';
                                    echo '<h5 class="card-title">Request Info:     ' . $row['request_info'];
                                    echo '</h5>';
                                    echo '<p class="card-text">' . $row['request_desc'];

                                    echo '</p>';
                                    echo '<p class="card-text">Request Date:    ' . $row['requester_date'];

                                    echo '</p>';
                                    echo '<div class="float-center">';
                                    echo '<form action="" method="POST">';
                                    echo '<form action="" method="POST"> <input type="hidden" name="id" value='. $row["request_id"] .'><input type="submit" class="btn  mr-3" name="view" value="View"><input type="submit" class="btn " name="close" value="Close"></form>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            }
                            ?>


                        </div>
                         <?php
                         if(isset($_REQUEST['view']))
                         {
                            $sql = "SELECT * FROM submitrequest_tb WHERE request_id={$_REQUEST['id']}";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                         }
                         if(isset($_REQUEST['close'])){
                            $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
                            if($conn->query($sql) === TRUE){
                              
                              echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
                              } else {
                                echo "Unable to Delete Data";
                              }
                            }
                            if(isset($_REQUEST['assign'])){
                                // Checking for Empty Fields
                                if(($_REQUEST['request_id'] == "") || ($_REQUEST['request_info'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") || ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['assigntech'] == "") || ($_REQUEST['inputdate'] == "")){
                                 // msg displayed if required field missing
                                 $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
                                } else {
                                  // Assigning User Values to Variable
                                  $rid = $_REQUEST['request_id'];
                                  $rinfo = $_REQUEST['request_info'];
                                  $rdesc = $_REQUEST['requestdesc'];
                                  $rname = $_REQUEST['requestername'];
                                  $radd1 = $_REQUEST['requesteradd1'];
                                  $radd2 = $_REQUEST['requesteradd1'];
                                  $rcity = $_REQUEST['requestercity'];
                                  $rstate = $_REQUEST['requesterstate'];
                                  $rzip = $_REQUEST['requesterzip'];
                                  $remail = $_REQUEST['requesteremail'];
                                  $rmobile = $_REQUEST['requestermobile'];
                                  $rassigntech = $_REQUEST['assigntech'];
                                  $rdate = $_REQUEST['inputdate'];
                                  $sql = "INSERT INTO assignwork_tb (request_id, request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, assign_tech, assign_date) VALUES ('$rid', '$rinfo','$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rassigntech', '$rdate')";
                                  if($conn->query($sql) == TRUE){
                                   // below msg display on form submit success
                                   $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Work Assigned Successfully </div>';
                                  } else {
                                   // below msg display on form submit failed
                                   $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Assign Work </div>';
                                  }
                                }
                                }
                         

                         ?>
                    
                    
                        <div class="col-sm-6 "   >
                            <form action="" method="POST" class="mx-5 ">
                                <h5 class="text-center" style="color: whitesmoke;text-weight:bold;margin-left:150px;">Assign Work Order Request</h5>
                                <div class="form-group">
                                    <label for="request_id" style="color: orange; margin-left:60px;">Request
                                        ID</label>
                                    <input type="text" class="form-control mt-2" id="request_id"
                                         placeholder="Request ID" name="request_id" value="<?php if(isset( $row['request_id'])) echo  $row['request_id'];?>" style="width: 120%; margin-left:60px;" readonly>
                                           
                                </div>
                                <div class="form-group">
                                    <label for="InputRequestInfo" style="color: orange; margin-left:60px;">Request
                                        Info</label>
                                    <input type="text" class="form-control mt-2" id="inputRequestInfo"
                                         placeholder="Request Info" name="request_info"  value="<?php if(isset( $row['request_info'])) echo  $row['request_info'];?>" style="width: 120%; margin-left:60px;">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputRequestDescription"
                                        style="color: orange;margin-left:60px;">Description</label>
                                    <input type="text" class="form-control mt-2" id="inputRequestDescription"
                                         placeholder="Write Description" name="requestdesc" value="<?php if(isset( $row['request_desc'])) echo  $row['request_desc'];?>" style="width: 120%; margin-left:60px;">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputName" style="color: orange;margin-left:60px;">Name</label>
                                    <input type="text" class="form-control mt-2" id="inputName" value="<?php if(isset( $row['requester_name'])) echo  $row['requester_name'];?>" style="width: 120%; margin-left:60px;"
                                        placeholder="chris" name="requestername" >
                                </div>

                                <div class="row mt-3">
                                    <div class="form-group col-md-6 ">
                                        <label for="inputAddress"
                                            style="color:orange;margin-left:60px">Address Line
                                            1</label>
                                        <input type="text" class="form-control mt-2" style="margin-left:60px;widht:130%;" value="<?php if(isset( $row['requester_add1'])) echo  $row['requester_add1'];?>"
                                            id="inputAddress" placeholder="H.NO 69" name="requesteradd1">
                                    </div>
                                    <div class="form-group col-md-6   ">
                                        <label for="inputAddress2"
                                            style="color: orange; margin-left:110px; ">Address Line 2</label>
                                        <input type="text" class="form-control mt-2 ml-2" style="margin-left:110px; widht:130%;" value="<?php if(isset( $row['requester_add2'])) echo  $row['requester_add2'];?>"
                                            id="inputAddress2" placeholder="LM THAPAR" name="requesteradd2">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputcity"
                                            style="color: orange; margin-left:60px ">City</label>
                                        <input type="text" class="form-control" style="margin-left: 60px;" value="<?php if(isset( $row['requester_city'])) echo  $row['requester_city'];?>"
                                            id="inputCity" name="requestercity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputstate"
                                            style="color: orange; margin-left:80px">State</label>
                                        <input type="text" class="form-control" style="margin-left: 80px;" value="<?php if(isset( $row['requester_state'])) echo  $row['requester_state'];?>"
                                            id="inputState" name="requesterstate">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip"
                                            style="color: orange;margin-left:95px">ZIP</label>
                                        <input type="text" class="form-control" style="margin-left: 95px; width: 130%;" id="inputZip"  value="<?php if(isset( $row['requester_zip'])) echo  $row['requester_zip'];?>"
                                            name="requesterzip" onkeypress="isInputNumber(event)">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail"
                                            style="color: orange; margin-left:60px ">Email</label>
                                        <input type="email" class="form-control" style="margin-left:60px;" value="<?php if(isset( $row['requester_email'])) echo  $row['requester_email'];?>"
                                            id="inputEmail" name="requesteremail">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputMobile"
                                            style="color: orange; margin-left:80px">Mobile</label>
                                        <input type="text" class="form-control" style="margin-left:80px;" value="<?php if(isset( $row['requester_mobile'])) echo  $row['requester_mobile'];?>"
                                            id="inputMobile" name="requestermobile">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputdate"
                                            style="color: orange;margin-left:90px">Date</label>
                                        <input type="date" class="form-control" style="margin-left: 90px; width: 150%;" value="<?php if(isset( $row['requester_date'])) echo  $row['requester_date'];?>"
                                            id="inputDate" name="requesterdate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="assigntech" style="margin-left:60px; color:orange; margin-top: 10px;">Assign To Technician</label>
                                        <input type="text" class="form-control" id="assigntech" placeholder="technicain" name="assigntech" style="margin-left:60px;">  
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputdate" style="margin-left:60px; color: orange; margin-top: 10px;">Date</label>
                                        <input type="date" class="form-control" id="inputDate" name="inputdate" style="margin-left:60px; ">
                                    </div>
                                </div>
                                <button type="submit" class="btn " name="assign" style="margin-top:20px;" >Assign</button>
                                <button type="reset" class="btn " style="margin-top:20px;">Reset</button>

                            </form>
                            <?php if (isset($msg)) {
                                echo $msg;}?>
                        </div>
                    </div>
                </div>
            </div>



            <!-- </div>
            </section> -->


        </div>




    </div>




    <?php
    include('includes_ad/footer_ad.php') ?>
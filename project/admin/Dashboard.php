<?php

define('TITLE', 'Dashboard');
define('PAGE', 'Dashboard');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
    $aEmail = $_SESSION['aEmail'];
}
else{
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
            <li class="nav-list-item active ">
              <a class="nav-list-link  " href="Dashboard.php"  >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"/></svg>
                Dashboard
              </a>
            </li>
            <li class="nav-list-item">
              <a class="nav-list-link" href="work.php">
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
            <div class="action-buttons">
              <button class="open-right-area">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            </button>
            <button class="menu-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            </div>
          </div>
          <div class="chart-row three">
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>Requests Recived</h2>
                  <span>20.5 K</span>
                </div>
                <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage">30%</text>
          </svg>
                </div>
              </div>
            </div>
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>Assigned Work</h2>
                  <span>5.5 K</span>
                </div>
                <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart blue">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage">60%</text>
          </svg>
                </div>
              </div>
            </div>
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>No. of technician</h2>
                  <span>10.5 K</span>
                </div>
                 <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart orange">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="90, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage">90%</text>
          </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="chart-row two">
            <div class="chart-container-wrapper big">
              <div class="chart-container">
                <div class="chart-container-header">
                  <h2>Top Active Jobs</h2>
                  <span>Last 30 days</span>
                </div>
                <div class="line-chart">
                  <canvas id="chart"></canvas>
                </div>
                <div class="chart-data-details">
                  <div class="chart-details-header"></div>
                </div>
              </div>
            </div>
            <div class="chart-container-wrapper small">
              <div class="chart-container">
                <div class="chart-container-header">
                  <h2>Acquisitions</h2>
                  <span href="#">This month</span>
                </div>
                <div class="acquisitions-bar">
                 <span class="bar-progress rejected" style="width:8%;"></span>
                  <span class="bar-progress on-hold" style="width:10%;"></span>
                  <span class="bar-progress shortlisted" style="width:18%;"></span>
                  <span class="bar-progress applications" style="width:64%;"></span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color applications"></span>
                  <span class="progress-type">Applications</span>
                  <span class="progress-amount">64%</span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color shortlisted"></span>
                  <span class="progress-type">Shortlisted</span>
                  <span class="progress-amount">18%</span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color on-hold"></span>
                  <span class="progress-type">On-hold</span>
                  <span class="progress-amount">10%</span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color rejected"></span>
                  <span class="progress-type">Rejected</span>
                  <span class="progress-amount">8%</span>
                </div>
              </div>
             
            </div>
            
          </div>
          <div class="mx-5 mt-5 text-center " style="color: orange; ">
            <p class=" bg-danger text-white p-2">LISt of rerquester</p>
            <?php
            $sql = "SELECT * FROM requesterlogin_tb";
            $result = $conn->query($sql);
            if($result->num_rows>0)
            {
              echo '
              <table class="table" style="color:orange">
              <thead>
               <tr>
               <th scope="col" >REQUESTER ID</th>
               <th scope="col">REQUESTER ID</th>
               <th scope="col">REQUESTER ID</th>
               </tr>
              </thead>
              <tbody>';
              while($row=$result->fetch_assoc())
              {

              echo'<tr >';
              echo '<td >'.$row["r_login_id"].'</td>';
              echo '<td>'.$row["r_name"].'</td>';
              echo '<td>'.$row["r_email"].'</td>';
              echo'</tr>';
              
             
              }

              echo
              '</tbody>
              </table>

              ';
            }
            else{
              echo '0 Result';
            }
            ?>
           
        </div>
        </div>
   <?php  
   include('includes_ad/footer_ad.php')?>
      

      
      
           
          


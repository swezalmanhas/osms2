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
                <li class="nav-list-item active">
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

            <div class="col-sm-9 col-md-10 mt-5 text-center">
                <!--Table-->
                <p class=" bg-dark text-white p-2" style="margin-left:50px;">List of Requesters</p>
                <?php
                $sql = "SELECT * FROM requesterlogin_tb";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo '<table class="table mt-3 mr-5" style="margin-left:50px;">
  <thead >
   <tr style="color:white;">
    <th scope="col">Requester ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr style="color:orange;">';
                        echo '<th scope="row">' . $row["r_login_id"] . '</th>';
                        echo '<td>' . $row["r_name"] . '</td>';
                        echo '<td>' . $row["r_email"] . '</td>';
                        echo '<td><form action="editreq.php" method="POST" class="d-inline"> <input type="hidden" name="id" value=' . $row["r_login_id"] . '><button type="submit"  class="btn " name="view" value="View"  ><i class="bi bi-pen-fill"></i>
    </button></form>  
    <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value=' . $row["r_login_id"] . '><button type="submit" style="margin-left:-70px;" class="btn" name="delete" value="Delete"><i class="bi bi-trash3-fill"></i></button></form></td>
   </tr>';
                    }

                    echo '</tbody>
                    </table>';
                } else {
                    echo "0 Result";
                }
                if (isset($_REQUEST['delete'])) {
                    $sql = "DELETE FROM requesterlogin_tb WHERE r_login_id = {$_REQUEST['id']}";
                    if ($conn->query($sql) === TRUE) {
                        // echo "Record Deleted Successfully";
                        // below code will refresh the page after deleting the record
                        echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
                    } else {
                        echo "Unable to Delete Data";
                    }
                }
                ?>
                 <div><a class="btn " href="insertreq.php"><i class="fas fa-plus fa-2x"></i></a>
            </div>
          
        </div>
       
    </div>

    </div>

    </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
        referrerpolicy="no-referrer"></script>
    <script src="../js/script2.js"></script>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    </div>
</body>

</html>
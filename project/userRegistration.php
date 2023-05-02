<?php
             include('dbconnection.php');
if (isset($_REQUEST['rSignup'])) {
    if (($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")) {
        $regmsg = '<div class="alert alert-warning mt-1" role="alert">
        All Field Are Required </div>';
    } else {
        $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email ='".$_REQUEST['rEmail']. "'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $regmsg = '<div class="alert alert-warning mt-1" role="alert">Email ID Already Registered</div>';
        } else {
                  $rName = $_REQUEST['rName'];
            $rEmail = $_REQUEST['rEmail'];
            $rPassword = $_REQUEST['rPassword'];
            $sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rName','$rEmail','$rPassword')";
            if ($conn->query($sql) == TRUE) {
                $regmsg = '<div class="alert alert-success mt-1" role="alert">Account Succesfully Created </div>';
            } else {
                $regmsg = '<div class="alert alert-danger mt-1" role="alert">Unable To Create  </div>';
            }
        }
    }
}

             ?>


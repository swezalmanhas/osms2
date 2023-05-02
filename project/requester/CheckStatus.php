<?php
define('TITLE', 'Status');
define('PAGE', 'CheckStatus');
include('../dbconnection.php');
include('includes/header.php');
session_start();
if($_SESSION['is_login'])
{
    $rEmail = $_SESSION['rEmail'];
}
else{
    echo "<script>location.href='RequesterLogin.php'</script>";
}

?>
<div class="main-content">
    <section class="profile section  " id="services">
        <div class="container">
            <div class="row">
                <div class="section-title padd-15">
                    <h2>Service Status </h2>
                </div>
            </div>
            <div class="col-sm-6 mt-5  mx-3">
                <form action="" class="mt-3 form-inline d-print-none">
                    <div class="form-group mr-3">
                        <label for="checkid" style="color: var(--text-black-900); margin-bottom: 10px;">Enter Request ID: </label>
                        <input type="text" class="form-control ml-3" id="checkid" name="checkid"
                            onkeypress="isInputNumber(event)">
                    </div>
                    <button type="submit" class="btn btn-danger">Search</button>
                </form>
                <?php
                if (isset($_REQUEST['checkid'])) {
                    $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['checkid']}";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if (($row['request_id']) == $_REQUEST['checkid']) 
                    { ?>
                        <h3 class="text-center mt-5" style="color: var(--skin-color);">Assigned Work Details</h3>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="color: var(--text-black-900);">Request ID</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['request_id'])) {
                                            echo $row['request_id'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Request Info</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['request_info'])) {
                                            echo $row['request_info'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Request Description</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['request_desc'])) {
                                            echo $row['request_desc'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Name</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_name'])) {
                                            echo $row['requester_name'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Address Line 1</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_add1'])) {
                                            echo $row['requester_add1'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Address Line 2</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_add2'])) {
                                            echo $row['requester_add2'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">City</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_city'])) {
                                            echo $row['requester_city'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">State</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_state'])) {
                                            echo $row['requester_state'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Pin Code</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_zip'])) {
                                            echo $row['requester_zip'];
                                        } ?>
                                    </td style="color: var(--text-black-900);">
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Email</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_email'])) {
                                            echo $row['requester_email'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Mobile</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['requester_mobile'])) {
                                            echo $row['requester_mobile'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: var(--text-black-900);">Assigned Date</td>
                                    <td style="color: var(--text-black-900);">
                                        <?php if (isset($row['assign_date'])) {
                                            echo $row['assign_date'];
                                        } ?>
                                    </td>
                                </tr>
                                <tr style="color: var(--text-black-900);">
                                    <td>Technician Name</td>
                                    <td>Zahir Khan</td>
                                </tr>
                                <tr style="color: var(--text-black-900);">
                                    <td>Customer Sign</td>
                                    <td></td>
                                </tr>
                                <tr style="color: var(--text-black-900);">
                                    <td>Technician Sign</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <form class="d-print-none d-inline mr-3"><input class="btn btn-danger" type="submit" value="Print"
                                    onClick="window.print()"></form>
                            <form class="d-print-none d-inline" action="work.php"><input class="btn btn-secondary" type="submit"
                                    value="Close"></form>
                        </div>
                    <?php } else {
                        echo '<div class="alert alert-dark mt-4" role="alert">
      Your Request is Still Pending </div>';
                    }
                }
                ?>

            </div>
        </div>
    </section>
    <?php
    include('includes/footer.php');
    ?>
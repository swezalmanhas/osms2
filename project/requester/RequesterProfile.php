<?php
define('TITLE', 'Profile');
define('PAGE', 'RequesterProfile');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login'])
{
    $rEmail = $_SESSION['rEmail'];
}
else{
    echo "<script>location.href='RequesterLogin.php'</script>";
}
$sql = "SELECT r_name, r_email FROM requesterlogin_tb WHERE r_email='$rEmail'";
$result = $conn->query($sql);
if($result->num_rows==1)
{
    $row = $result->fetch_assoc();
    $rName = $row['r_name'];
}
if(isset($_REQUEST['nameupdate']))
{
if($_REQUEST['rName'] == "")
{
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Field</div>';
}
else{
        $rName = $_REQUEST['rName'];
        $sql = "UPDATE requesterlogin_tb SET r_name='$rName' WHERE r_email='$rEmail'";
        if($conn->query($sql)==TRUE)
        {
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2 " role="alert">Updated Successfully</div>';
        }
        else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2 " role="alert">Unable To Update</div>';
        }
}
}
?>


              
        <!--profile start-->
        <div class="main-content">
        <section class="profile section  " id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Profile </h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form action="" mathod="POST" class="max-5">
                            <div class="form-group mt-3 ml-3" >
                                <label for="rEmail"  style="color: var(--text-black-900);">Email</label>
                                <input type="email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $rEmail ?>" readonly >
                            </div>
                            <div class="form-group mt-3 ml-3" >
                                <label for="rName"  style="color:var(--text-black-900);">Name</label>
                                <input type="text"   class="form-control"  name="rName" id="rName" value="<?php echo $rName ?>" id="rName" >
                            </div>
                            <button  type="submit" class="btn " name="nameupdate" >Update</button>
                            <?php if(isset($passmsg))
                            {
                                echo $passmsg;
                            }
                            ?>
                        </form>
                    </div>
                </div>
        </section>
       <?php
       include('includes/foogter.php')
       ?>
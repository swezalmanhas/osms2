<?php
define('TITLE', 'CHANGE PASSWORD');
define('PAGE', 'Requesterchangepass');
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
if(isset($_REQUEST['passupdate']))
{
    if($_REQUEST['rPassword']=="")
    {
        $passmsg = '<div class="alert alert-warning  col-sm-4 ml-5 mt-2">Fill The Password</div>';
    }
    else{
        $rPass = $_REQUEST['rPassword'];
        $sql = "UPDATE requesterlogin_tb SET r_password='$rPass' WHERE r_email='$rEmail'";
        if($conn->query($sql)==TRUE)
        {
            $passmsg = '<div class="alert alert-success  col-sm-4 ml-5 mt-2">Successfully Update</div>';
        }
        else{
            $passmsg = '<div class="alert alert-danger  col-sm-4 ml-5 mt-2">Unable To Update</div>';
        }
    }
   
}

?>
<section class="profile section  " id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Profile </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 col-md-10">
                            <form action="" method="POST">
                                <div class="form-group mt-3">
                                    <label for="inputemail" style="color: var(--text-black-900); ">Email</label>
                                    <input type="email" class="form-control" style="width: 40%;" id="inputEmail" value="<?php echo $rEmail?>" readonly>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputnewpassword" style="color: var(--text-black-900); ">Enter New Password</label>
                                    <input type="password" class="form-control" style="width: 40%; margin-left: 2px; border-radius: 2px;"id="inputnewpassword" placeholder="New Password" name="rPassword">
                                </div>
                                <button type="submit" class="btn btn-danger" name="passupdate">Submit</button>
                               <button type="reset" class="btn btn-secondary" >Reset</button>
                               <?php
                                  if(isset($passmsg))
                                  {
                                      echo $passmsg;
                                  }
                                  ?>

                            </form>
                        </div>
                    </div>
</div>
</section
<?php
include('includes/footer.php');
?>
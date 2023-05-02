<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
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
if(isset($_REQUEST['submitrequest']))
{
    if(($_REQUEST['requestinfo']=="")|| ($_REQUEST['requestdesc']=="")||($_REQUEST['requestername']=="") ||($_REQUEST['requesteradd1']=="") ||($_REQUEST['requesteradd2']=="") ||($_REQUEST['requestercity']=="") ||($_REQUEST['requesterstate']=="") ||($_REQUEST['requesterzip']=="") ||($_REQUEST['requesteremail']=="") ||($_REQUEST['requestermobile']=="")||($_REQUEST['requesterdate']==""))
    {
        $msg = '<div class="alert alert-warning col-sm-4 ml-6 mt-2 max-5" role="alert">All Field Are Required</div>';
    }
    else{
        $rinfo=$_REQUEST['requestinfo'];
        $rdesc=$_REQUEST['requestdesc'];
        $rname=$_REQUEST['requestername'];
        $radd1=$_REQUEST['requesteradd1'];
        $radd2=$_REQUEST['requesteradd2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate=$_REQUEST['requesterstate'];
        $rzip=$_REQUEST['requesterzip'];
        $remail=$_REQUEST['requesteremail'];
        $rmobile=$_REQUEST['requestermobile'];
        $rdate=$_REQUEST['requesterdate'];
        $sql = "INSERT INTO submitrequest_tb (request_info,request_desc,requester_name,requester_add1, requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,requester_date) VALUES('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";
      if($conn->query($sql)==TRUE)
      
      {
        $genid=mysqli_insert_id($conn);
        $msg='<div class="alert alert-success col-sm-4 ml-6 mt-2 max-5" role="alert">Request Submitted Successfully</div>';
            $_SESSION['myid'] = $genid;
            echo "<script>location.href='submitrequestsuccess.php'</script>";

      }
      else{
        $msg='<div class="alert alert-danger col-sm-4 ml-6 mt-2 max-5" role="alert">Unable To Submit Your Request</div>';
      }
    }
}
?>
  
        <!--submit start-->
        <div class="main-content">
        <section class="profile section  " id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Submit Request </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 col-md-10 mt-1">
                            <form action="" method="POST" class="mx-5 ">
                                <div class="form-group">
                                    <label for="InputRequestInfo" style="color: var(--text-black-900);">Request Info</label>
                                    <input type="text" class="form-control mt-2" id="inputRequestInfo"  style="width: 115%;" placeholder="Request Info" name="requestinfo">
                                   </div>
                                <div class="form-group mt-3">
                                    <label for="inputRequestDescription" style="color: var(--text-black-900);">Description</label>
                                    <input type="text" class="form-control mt-2" id="inputRequestDescription"  style="width: 115%;" placeholder="Write Description" name="requestdesc">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputName" style="color: var(--text-black-900);">Name</label>
                                    <input type="text" class="form-control mt-2" id="inputName" style="width: 115%;" placeholder="chris" name="requestername">
                                </div>
                                
                               <div class="row mt-3">
                               <div class="form-group col-md-6 ">
                                    <label for="inputAddress" style="color: var(--text-black-900);margin-left:18px">Address Line 1</label>
                                    <input type="text" class="form-control mt-2" style="margin-left:18px" id="inputAddress" placeholder="H.NO 69" name="requesteradd1">
                                </div>
                                <div class="form-group col-md-6   ">
                                    <label for="inputAddress2" style="color: var(--text-black-900);margin-left:75px ">Address Line 2</label>
                                    <input type="text" class="form-control mt-2 ml-2" style="margin-left:75px" id="inputAddress2" placeholder="LM THAPAR" name="requesteradd2">
                                </div>
                               </div>
                                
                                
                               <div class="row mt-3">
                                <div class="form-group col-md-6">
                                    <label for="inputcity"  style="color: var(--text-black-900); margin-left:18px ">City</label>
                                    <input type="text" class="form-control"  style="margin-left: 18px;" id="inputCity" name="requestercity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputstate"  style="color: var(--text-black-900); margin-left:50px">State</label>
                                    <input type="text" class="form-control"  style="margin-left: 50px;" id="inputState" name="requesterstate">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip"  style="color: var(--text-black-900);margin-left:75px">ZIP</label>
                                    <input type="text" class="form-control" style="margin-left: 75px;" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)">
                                </div>
                               </div>

                               <div class="row mt-3">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail"  style="color: var(--text-black-900); margin-left:18px ">Email</label>
                                    <input type="email" class="form-control"  style="margin-left: 18px;" id="inputEmail" name="requesteremail">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputMobile"  style="color: var(--text-black-900); margin-left:50px">Mobile</label>
                                    <input type="text" class="form-control"  style="margin-left: 50px;" id="inputMobile" name="requestermobile">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputdate"  style="color: var(--text-black-900);margin-left:75px">Date</label>
                                    <input type="date" class="form-control" style="margin-left: 75px;" id="inputDate" name="requesterdate">
                                </div>
                               </div>
                               <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
                               <button type="reset" class="btn btn-secondary" >Reset</button>
                                
                            </form>
                            <?php
                            if(isset($msg))
                            {
                                echo $msg;
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </section>
        <!--only NUmber for input-->
        <script>
            function isInputNumber(evt)
            {
                var ch = String.formCharCode(evt.which);
                if(!(/[0-9]/.test(ch)))
                {
                    evt.preventDefault();
                }
            }
        </script>

<?php
include('includes/footer.php');
?>

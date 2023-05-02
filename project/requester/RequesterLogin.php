<?php
include('../dbconnection.php');
session_start();
if (!isset($_SESSION['is_login']))
 {
    if (isset($_REQUEST['rEmail'])) {
        $rEmail =mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
       
        $rPassword =(mysqli_real_escape_string($conn,trim($_REQUEST['rPassword'] )));
        $sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email='" . $rEmail . "' AND r_password='" . $rPassword . "' limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['rEmail'] = $rEmail;
            echo "<script>location.href='RequesterProfile.php';</script>";
           
            exit;

        } else {
            $msg = '<div class="alert alert-warning mt-2">Enter The Valid Email And Password</div>';
        }
    }

} else {
    echo "<script>location.href='RequesterProfile.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/all.min.css">
  
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Nosifer&family=Sawarabi+Mincho&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    
    
    <!--live switcher-->
     <!--style switcher-->
    <link rel="StyleSheet" href="../css/color-1.css " class="alternate-style" title="color-1" disabled>
    <link rel="StyleSheet" href="../css/color-2.css " class="alternate-style" title="color-2" disabled>
    <link rel="StyleSheet" href="../css/color-3.css " class="alternate-style" title="color-3" disabled>
    <link rel="StyleSheet" href="../css/color-4.css " class="alternate-style" title="color-4" disabled>
    <link rel="StyleSheet" href="../css/color-5.css " class="alternate-style" title="color-5" disabled>
    <link rel="StyleSheet" href="../css/color-6.css " class="alternate-style" title="color-6" disabled>
  

    <link rel="StyleSheet" href="../css/style-switcher.css">
    <title>profile</title>
</head>
<body class="dark">
<div class="main-container">
        <!--aside start-->
        <div class="aside">
            <div class="logo">
                <a href="requesterProfile.php"><span>A</span>tlas</a>
                <p>Customer's happiness is our aim</p>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">

                
                <li><a href="#Login" style="color:var(--skin-color);"><i class="fa fa-comments"></i> Login </a></li>
               
                

            </ul>
        </div>
        <!--profile start-->
        <div class="main-content">
            <section class="Login section  " id="requester/RequesterLogin.php">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Login Page</h2>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 mt-5 text-center" style="font-size: 30px; font-weight: bolder; color: var(--skin-color);">
                        <i class="fas fa-stethoscope"></i>
                        <span>Online Management System</span>
                    </div>
                    <p class="text-center" style="fontsize:20px; color:var(--text-black-900);">
                    <i class="fas fa-user-secret "></i>
                    Requester Area</p>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-md-4">
                                <form action="" method="POST" class="shadow-lg p-4">
                                    <div class="form-group">
                                        <i class="fas fa-user" style="color: var(--text-black-900);"></i><label for="email" class="font-weight-bold pl-2" style="color: var(--text-black-900);">Email</label>
                                        <input type="email" name="rEmail"  class="form-control" placeholder="Email">
                                        <small class="mt-1 form-text mb-3 " style="color: var(--text-black-900);">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                     <label for="pass" class=" mt-3 font-weight-bold pl-5" style="color: var(--text-black-900); ">Password</label>
                                        <input type="password" name="rPassword"  class="form-control" placeholder="Password">
                                        
                                    </div>
                                    <button  type="submit" class="btn " name="rSignup" >Login</button>
                                    <?php 
                                    if(isset($msg))
                                    {
                                        echo $msg;
                                    }
                                    ?>
                                    <button  type="submit" class="btn " name="" > <a href="../index.php">Back to Home</a></button>
                                    
                                  
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
</section>
        
        </div>
         <!--profile start- ->
             
        <!-- switcher-->
        <div class="style-switcher">
        <div class="style-switcher-toggler s-icon" >
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            <span class="color-6" onclick="setActiveStyle('color-6')"></span>
        </div>
    </div>
     <!--stle switcher end-->
           <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
           <script  src="../js/script.js"></script>
           <script src="../js/style-switcher.js"></script>
           <script src="../js/jquery.min.js"></script>
           <script src="../js/popper.min.js"></script>
           <script src="../js/bootstrap.min.js"></script>
           
</div>
</body>
</html>
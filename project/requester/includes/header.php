<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/all.min.css">
   <link rel="stylesheet"  href="../css/custom.css">
    
    
    
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
    <title><?php echo TITLE ?></title>
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
            <li><a href="RequesterProfile.php" class="<?php if (PAGE == 'RequesterProfile') {echo 'active';}?>"><i class="fa fa-user">Profile</i></a></li>
                <li><a href="SubmitRequest.php" class="<?php if (PAGE == 'SubmitRequest') {
                echo 'active';}?>"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                <li><a href="checkstatus.php" class="<?php if (PAGE == 'CheckStatus') {
                echo 'active';}?>"><i class="fas fa-briefcase"></i>Service Status</a></li>
                <li><a href="Requesterchangepass.php"  class="<?php if (PAGE == 'Requesterchangepass') {
                echo 'active';}?>"><i class="fa fa-key"></i>Change Password</a></li>
                <li><a href="../logout.php"  class=""><i class="fa fa-sign-out-alt"></i> Logout </a></li>
               
                

            </ul>
        </div>

                
          
       
      
        
       
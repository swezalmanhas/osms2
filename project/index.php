<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/custom.css">
   
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Nosifer&family=Sawarabi+Mincho&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    
    
    <!--live switcher-->
     <!--style switcher-->
    <link rel="StyleSheet" href="css/color-1.css " class="alternate-style" title="color-1" disabled>
    <link rel="StyleSheet" href="css/color-2.css " class="alternate-style" title="color-2" disabled>
    <link rel="StyleSheet" href="css/color-3.css " class="alternate-style" title="color-3" disabled>
    <link rel="StyleSheet" href="css/color-4.css " class="alternate-style" title="color-4" disabled>
    <link rel="StyleSheet" href="css/color-5.css " class="alternate-style" title="color-5" disabled>
    <link rel="StyleSheet" href="css/color-6.css " class="alternate-style" title="color-6" disabled>
  

    <link rel="StyleSheet" href="css/style-switcher.css">

    <!--  google font-->
    <title>osm</title>
</head>
<style>
 


</style>


<body class="dark">
<div class="main-container">
        <!--aside start-->
        <div class="aside">
            <div class="logo">
                <a href="index.php"><span>A</span>tlas</a>
                <p>Customer's happiness is our aim</p>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">

                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#services"><i class="fa fa-list"></i>services</a></li>
                <li><a href="#reg"><i class="fa fa-briefcase"></i>registration</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>contact</a></li>
                <li><a href="requester/RequesterLogin.php"><i class="fa fa-comments"></i> Login </a></li>
               
                

            </ul>
        </div>
        <div class="main-content">
           <section class="home active section  " id="home">
               <div class="container">
                   <div class="row">
                   <div class="home-info padd-15">
                       <h3 class="hello">HELLO, WELCOME TO 
                           <span class="name">OSMD</span>
                       </h3>
                       <h3 class="my-profession">We Are Here For <span class="typing"></span></h3>
                       <p>An online service management system is a software solution that allows organizations to efficiently manage their services and streamline their operations through an online platform.</p>
                       <a href="requester/RequesterLogin.php" class="btn hire-me">Login</a>
                       <!-- <a href="reg" class="btn hire-me">Sign Up</a> -->
                   </div>
                   <div class="home-img padd-15">
                       <img src="images/wallpaper.jpg" alt="">
                   </div>
               </div>
               </div>
           </section>
           <!-- service section start-->
           <section class="service section  " id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!--item satr-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-tv   " ></i>
                                </div>
                                <h4>Electronic Appliance</h4>
                                <p>An online service management system for services of electronic appliances is a digital platform that allows users to access and manage services related to electronic appliances remotely through the internet.</p>
                            </div>
                        </div>
                        <!--item end-->
                          <!--item satr-->
                          <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-sliders-h "></i>
                                </div>
                                <h4>Preventive Maintenance</h4>
                                <p>An online service management system for preventive maintenance is a digital platform that enables users to proactively schedule, track, and manage preventive maintenance tasks for their equipment or assets remotely through the internet.</p>
                            </div>
                        </div>
                        <!--item end-->
                          <!--item satr-->
                          <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <h4>Fault Repair</h4>
                                <p>An online service management system for fault repairing is a digital platform that allows users to report, track, and manage fault repair requests for their products or services remotely through the internet.</p>
                            </div>
                        </div>
                        <!--item end-->
                          <!--item satr-->
                          <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>Service Request Management</h4>
                                <p> OSMS can provide a portal or interface for users to submit service requests, such as maintenance or repair requests, customer support inquiries, or service appointments</p>
                            </div>
                        </div>
                        <!--item end-->
                          <!--item satr-->
                          <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Service Order Management</h4>
                                <p>OSMS can handle the end-to-end management of service orders, including order creation, tracking, and fulfillmen</p>
                            </div>
                        </div>
                        <!--item end-->
                        

                    </div>
                </div>
            </section>
             <!-- service section end-->
             <!-- registation form-->
            <?php
            include('userRegistration.php');
            
            ?>
            <section class="registration section  " id="reg">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Registration</h2>
                            
                        </div>
                    </div>
                <div class="row">
                    <div class="testbox">
  <h1>Create Your Account</h1>

  <form action="" method="post">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Company</label>
    </div>
  <hr>
  <div>
  <label id="icon" for="name"><i class="icon-user"></i></label>
<input type="text" name="rName"  placeholder="Name" />
</div>
<div>
  <label id="icon" for="name"><i class="icon-user"></i></label>
<input type="email" name="rEmail"  placeholder="Email"  />
</div>
<div>
  <label id="icon" for="pass"><i class="icon-user"></i></label>
<input type="password" name="rPassword"  placeholder="Password" pattern=".{8,}"  title=" Password minimum 8 characters"/>
</div>
  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   <button  type="submit" class="btn " name="rSignup" ><a href="#registration"></a> Sign Up</button>
   <?php
   if(isset($regmsg)){
    echo $regmsg;
   }
   
   ?>
  </form>
</div>
                </div>
                    


                        <!-- <form action="" method="POST" onSubmit="">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" autocomplete='off'>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" autocomplete='off'>
                            <label for="Username">Username</label>
                            <input type="text" name="Username" id="Username" autocomplete='off'>
                            <label for="Password">Password</label>
                            <input type="Password" name="Password" id="Password" autocomplete='off'>
                        </form>
                        <div class=cont>
                            <button type='Submit' id='connect' class="button type3"><span>Connect</span>
                        </button>
                        <i class="fa fa-spinner" id='spinner'></i>
                        <i class="fa fa-check" id='check'></i>
                            
                        </div> -->
                        
  

                    </div>
               
                    </section>
            
             <!-- registation form end-->
             

             <!--CONTACT SECTION START-->
             <section class="contact section  " id="contact" >
                   <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title">Have You Any Questions ?</h3>
                    <h4 class="contact-sub-title">I' M AT YOUR SERVICES</h4>
                    <div class="row">
                        <!--contact item start-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call Us On</h4>
                            <p>+91-9103064945</p>
                        </div>

                        <!--contact item end-->
                         <!--contact item start-->
                         <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Office</h4>
                            <p>Pathankot, Punjab</p>
                        </div>

                        <!--contact item end-->
                         <!--contact item start-->
                         <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>swezalmanhas@gmail.com</p>
                        </div>

                        <!--contact item end-->
                         <!--contact item start-->
                         <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>Website</h4>
                            <p>www.domain.com</p>
                        </div>

                        <!--contact item end-->
                    </div>
                    <h3 class="contact-title padd-15">SEND ME EMAIL</h3>
                    <h4 class="contact-sub-title padd-15">I'M VERY RESPONSIVE TO MESSAGES</h4>
                    <!--contact form-->
                    <div class="row">
                        <div class="contact-form padd-15">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group padd-15" style="color:var(--text-black-900)">
                                        <input type="text" class="form-control"  style="width: 90%;" placeholder="Name" >
                                    </div>
                                </div>
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group padd-15">
                                        <input type="email" class="form-control"  style="width: 90%;" placeholder="Email">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group padd-15">
                                        <input type="text" class="form-control"  style="width: 95%;"placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group padd-15">
                                        <textarea name="" class="form-control"  style="width: 95%;" id="" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group padd-15">
                                        <button type="submit" class="btn">Send Message</button>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center mt-5" >
                            <small style="color: var(--text-black-900);"> Designed by fddfd &copy; 2022</small>
                            <small class="ml-2"><a href="admin/login.php">Admin Login</a></small>
                        </div>
                    </div>

                   </div>
               </section>
               <!--CONTACT SECTION end-->
             

           <!--live switchers -->
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
           <script  src="js/script.js"></script>
           <script src="js/style-switcher.js"></script>
           <script src="js/jquery.min.js"></script>
           <script src="js/popper.min.js"></script>
           <script src="js/bootstrap.min.js"></script>
           
     
</body>
</html>
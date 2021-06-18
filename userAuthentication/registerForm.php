<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--glyphicon -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
   <link rel="stylesheet" href="../ads/ads.css">
   <link rel="stylesheet" href="../style/index.css">
   <title>Sign up </title>

   <link href="../images/icon1.png" rel="shortcut icon" type="image/x-icon" />
   <link href="../images/icon1.png" rel="apple-touch-icon" />
</head>

<body>
   <!-- NAV BAR SECTION -->
   <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
      <div class="w-container"><a href="/" aria-current="page" class="brand-link w-nav-brand w--current">
            <img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
         </a>
         <nav role="navigation" class="navigation-menu w-nav-menu">
            <a href="../index.php" aria-current="page" class="navigation-link w-nav-link "><span class="glyphicon glyphicon-home"></span> Home</a>
            <a href="../allJobs.php" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
            <a href="loginForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            <a href="registerForm.php" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
         </nav>
      </div>
   </div>

   <!-- ............END NAVBAR .................. -->

   <!-- Main Content -->
   <div class="container-fluid">
      <div class="row main-content bg-success text-center">
         <div class="col-md-4 text-center company__info" style="background-color: rgb(246 150 108);">
            <span class="company__logo">
            <h1 class="company_title" style="position: relative;bottom: 3em;font-family: cursive;">Welcome <br> to</h1><br>
               <h2><span> <img src="../images/defult.jpg" alt="logo img" style="height: 5em;position: relative;bottom:3em;"></span></h2>
            </span>
         </div>
         <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
               <div class="row" style="text-align: center;justify-content: center;padding-top: 28px;">
                  <h2>Join to us Now !</h2>
               </div>
               <div class="row">
                  <form control="" class="form-group" action="register.php" method="post" style="padding-left: 4.5em;">
                     <div class="row">
                        <select class="form-control" name="user_type" id="user_type" style="margin-top: 2.5em;color: rgb(243 116 55 / 89%);border: 1px solid rgb(243 116 55 / 30%);height: 3em;">
                           <option> Sign up as </option>
                           <option value="businessOwner">Business Owner</option>
                           <option value="jobSeeker">Job Seeker</option>
                        </select>
                     </div>
                     <!-- USERNAME -->
                     <div class="row">
                        <input type="text" name="username" id="username" class="form__input" placeholder="Enter Username.." required>
                     </div>
                     <!-- PASSWORD -->
                     <div class="row">
                        <input type="password" name="password" id="password" class="form__input" placeholder="Enter Password.." required>
                     </div>
                     <!-- EMAIL -->
                     <div class="row">
                        <input type="text" name="email" id="email" class="form__input" placeholder="Enter Email.." required>
                     </div>
                     <!-- Job -->
                     <div class="row">
                        <input type="text" name="job" id="job" class="form__input" placeholder="Enter Your Job.." required>
                     </div>
                     <!-- teleNo -->
                     <div class="row">
                        <input type="text" name="teleNo" id="teleNo" class="form__input" placeholder="Enter Telephone Number.." required>
                     </div>
                     <!-- ADDRESS -->
                     <div class="row">
                        <input type="text" name="address" id="address" class="form__input" placeholder="Enter Address.." required>
                     </div>
                     <div class="row">
                        <input type="submit" value="Sign up" name="register" class="btn" style="margin-left: 58px;width: 40%;">
                        <div class="row"><br>
                           <p style="margin-left: 2em;">Already have an account ?<a href="loginForm.php" style="color:rgb(243 116 55 / 91%) ;"> Login</a></p>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--................FOOTER SECTION .............. -->
   <div class="footer">
      <div class="w-container">
         <div class="w-row">
            <div class="spc w-col w-col-4">
               <h5 class="footer-head"> <img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
               </h5>
               <p>Pal Jobs have much planned for the future, working with great clients and companies. If you’d like to join our team.</p>
            </div>
            <div class="spc w-col w-col-4">
               <h5 class="footer-head">have a question?</h5>
               <a href="#" class="footer-link">pal-jobs@gmail.com</a>
               <a href="#" class="footer-link">05948766334</a>
               <a href="#" class="footer-link">Hebron, Palestine</a>
            </div>
            <div class="w-col w-col-4">
               <h5 class="footer-head">social</h5>
               <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab700ea1cf26_social-18.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Twitter</a></div>
               <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab858aa1cf07_social-03.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Facebook</a></div>
               <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab240ba1ceee_social-11.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Pinterest</a></div>
               <div class="footer-link-wrapper w-clearfix"><img src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d27d25aefab2697a1cf18_social-06.svg" width="20" alt="" class="info-icon" /><a href="#" class="footer-link with-icon">Google</a></div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer center">
      <div class="w-container">
         <div class="footer-text">© 2021 Copyright, Made By: Niveen & Alia</div>
      </div>
   </div>

</body>

</html>
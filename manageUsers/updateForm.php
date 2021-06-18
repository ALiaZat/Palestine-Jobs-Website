<?php
session_start();
if (!isset($_SESSION['type'])) {
  header("location:../userAuthentication/loginForm.php");
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../userAuthentication/formStyle.css" type="text/css">
  <!--glyphicon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../style/index.css">
  <link rel="stylesheet" href="../ads/ads.css">
  <title>Update User's Details</title>

  <script>
    // Initialize affix and add an offset to add affix class on scroll
    $('#mainNav').affix({
      offset: {
        top: 100
      }
    })
  </script>

  <link href="../images/icon1.png" rel="shortcut icon" type="image/x-icon" />
  <link href="../images/icon1.png" rel="apple-touch-icon" />
</head>

<body>
  <?php
  require '../database.php';
  $db = new dbFun();
  $id = $_GET['id'];
  $users = $db->getUserById($id);
  foreach ($users as $user) { ?>
    <!-- ...................NAV BAR SECTION .................. -->
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
      <div class="w-container"><a href="/" class="brand-link w-nav-brand">
          <img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
        </a>
        <nav role="navigation" class="navigation-menu w-nav-menu">
          <a href="../views/home.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-home"></span> Home</a>
          <a href="../views/alljobs.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
          <div class="user-nav"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI_80u_uzadF91vm9XQO6kgsYzCXHcQMYlKg8UR4Wrzf6RrSfY7T9hYWQGoG7CA-hLpFc&usqp=CAU" loading="lazy" alt="" class="image-4" />
            <div data-hover="" data-delay="0" class="w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle" style="top: -1.5em;">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="text-block-4">admin</div>
              </div>
              <nav class="w-dropdown-list">
                <a href="manageUsers.php?id=<?php echo $user['userID']; ?>" class="w-dropdown-link "><span class="glyphicon glyphicon-cog"></span> Manage Users</a>
                <a href="../Admin/controlPanel.php?id=<?php echo $user['userID']; ?>" class="w-dropdown-link"><span class="glyphicon glyphicon-cog"></span> Control Panel</a>
                <a href="../userAuthentication/logout.php" class="w-dropdown-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
              </nav>
            </div>
          </div>
        </nav>
        <div class="hamburger-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>

    <!-- END NAVBAR -->

  <?php } ?>

  <?php
  if (isset($_GET['id'])) {
    foreach ($users as $user) { ?>
      <!-- Main Content -->
      <div class="container-fluid">
        <div class="row main-content bg-success text-center">
          <div class="col-md-4 text-center company__info">
            <span class="company__logo">
              <h2><span><img src="../images/defult.jpg" alt="logo img" style="height: 5em;position: relative;bottom:3em;"></span></h2>
            </span>
            <!-- <h4 class="company_title">Welcome to Pal Jobs </h4> -->
          </div>
          <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
              <div class="row" style="text-align: center;justify-content: center;padding-top: 28px;">
                <h2><?php echo "Update " . "(" . $user['username'] . ")" . " Details"; ?></h2>
              </div>
              <div class="row">
                <form control="" class="form-group" action="updateUser.php?id=<?php echo $user['userID']; ?>" method="post" style="padding-left: 4.5em;">
                  <div class="row">
                    <select class="form-control" name="user_type" id="user_type" style="margin-top: 2.5em;color: rgb(243 116 55 / 89%);border: 1px solid rgb(243 116 55 / 30%);height: 3em;">
                      <option> <?php echo $user['user_type']; ?> </option>
                      <option value="admin">Admin</option>
                      <option value="businessOwner">Business Owner</option>
                      <option value="jobSeeker">Job Seeker</option>
                    </select>
                  </div>
                  <!-- USERNAME -->
                  <div class="row">
                    <input type="text" name="username" id="username" class="form__input" value="<?php echo $user['username']; ?>">
                  </div>
                  <!-- PASSWORD -->
                  <div class="row">
                    <input type="password" name="password" id="password" class="form__input" value="<?php echo $user['password']; ?>">
                  </div>
                  <!-- EMAIL -->
                  <div class="row">
                    <input type="text" name="email" id="email" class="form__input" value="<?php echo $user['email']; ?>">
                  </div>
                  <!-- Job -->
                  <div class="row">
                    <input type="text" name="job" id="job" class="form__input" placeholder="Enter Your Job.." value="<?php echo $user['job']; ?>">
                  </div>
                  <!-- teleNo -->
                  <div class="row">
                    <input type="text" name="teleNo" id="teleNo" class="form__input" value="<?php echo $user['teleNo']; ?>">
                  </div>
                  <!-- ADDRESS -->
                  <div class="row">
                    <input type="text" name="address" id="address" class="form__input" value="<?php echo $user['address']; ?>">
                  </div>
                  <div class="row">
                    <input type="submit" value="Update" name="updt" class="btn" style="margin-left:-3em;width: 40%;">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



    <?php } ?>
  <?php } else {
    header("location:manageUsers.php");
  }
  ?>
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

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d27d25aefabdd8aa1ced7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/js/webflow.b7e093d49.js" type="text/javascript"></script>
</body>

</html>
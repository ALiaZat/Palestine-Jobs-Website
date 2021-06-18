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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../addJob/allJobs.css" type="text/css">
  <link rel="stylesheet" href="../style/nav-bar.css" type="text/css">
  <link rel="stylesheet" href="adminCards.scss">
  <link rel="stylesheet" href="../style/index.css">
  <title>Control Panel</title>
  <link href="../images/icon1.png" rel="shortcut icon" type="image/x-icon" />
  <link href="../images/icon1.png" rel="apple-touch-icon" />

  <script>
    // Initialize affix and add an offset to add affix class on scroll
    $('#mainNav').affix({
      offset: {
        top: 100
      }
    })
  </script>
</head>

<body style="background-color: white;">
  <?php
  require '../database.php';
  $db = new dbFun();
  $id = $_GET['id']; ?>
  <!-- ...................NAV BAR SECTION .................. -->
  <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
    <div class="w-container"><a href="/" class="brand-link w-nav-brand">
        <img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
      </a>
      <nav role="navigation" class="navigation-menu w-nav-menu">
        <a href="../views/home.php?id=<?php echo $id ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-home"></span> Home</a>
        <a href="../views/alljobs.php?id=<?php echo $id ?>" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
        <div class="user-nav"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI_80u_uzadF91vm9XQO6kgsYzCXHcQMYlKg8UR4Wrzf6RrSfY7T9hYWQGoG7CA-hLpFc&usqp=CAU" loading="lazy" alt="" class="image-4" />
          <div data-hover="" data-delay="0" class="w-dropdown">
            <div class="dropdown-toggle w-dropdown-toggle" style="top: -1.5em;">
              <div class="icon-2 w-icon-dropdown-toggle"></div>
              <div class="text-block-4">admin</div>
            </div>
            <nav class="w-dropdown-list">
              <a href="controlPanel.php?id=?id=<?php echo $id ?>" class="w-dropdown-link"><span class="glyphicon glyphicon-cog"></span> Control Panel</a>
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


  <div class="content">
    <!-- MANAGE USERS SECTION -->
    <a href="../manageUsers/manageUsers.php?id=<?php echo $id ?>">
      <div class="card">

        <div class="icon"><i class="fas fa-users material-icons md-36"></i></div>
        <p class="title">Users</p>
        <p class="text">Click to see or edit Pal-Jobs users.</p>
      </div>
    </a>

    <!-- MANAGE JOBS SECTION -->
    <a href="../manageJobs/manageJobs.php?id=<?php echo $id ?>">
      <div class="card">

        <div class="icon"><i class="far fa-list-alt material-icons md-36"></i></div>
        <p class="title">Jobs</p>
        <p class="text">Click to see or edit Pal-Jobs jobs.</p>
      </div>
    </a>

    <!-- MANAGE ADS SECTION -->
    <a href="../ads/manageAds.php?id=<?php echo $id ?>">
      <div class="card">

        <div class="icon"><i class="far fa-list-alt material-icons md-36"></i></div>
        <p class="title">Ads</p>
        <p class="text">Click to see or edit Ads.</p>

      </div>
    </a>

  </div>
  </div>
  <!--................FOOTER SECTION .............. -->
  <div class="fixed-footer">
    <div class="footer">
      <div class="w-container">
        <div class="w-row">
          <div class="spc w-col w-col-4">
            <h5 class="footer-head"><img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
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
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d27d25aefabdd8aa1ced7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/js/webflow.b7e093d49.js" type="text/javascript"></script>
</body>

</html>
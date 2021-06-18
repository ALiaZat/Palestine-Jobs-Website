<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../style/index.css" type="text/css">
  <link rel="stylesheet" href="../style/nav-bar.css">
  <title>My Announcements</title>

  <link href="../images/icon1.png" rel="shortcut icon" type="image/x-icon" />
  <link href="../images/icon1.png" rel="apple-touch-icon" />
</head>

<body>
  <?php
  require '../database.php';
  $db = new dbFun();
  $id = $_GET['id'];
  $users = $db->getUserById($id);
  ?>
  <!-- ...................NAV BAR SECTION .................. -->
  <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
    <div class="w-container"><a href="/" class="brand-link w-nav-brand">
    <img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
      </a>
      <?php foreach ($users as $user) { ?>
        <nav role="navigation" class="navigation-menu w-nav-menu">
          <a href="../views/home.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-home"></span> Home</a>
          <a href="../views/alljobs.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
          <a href="../addJob/jobForm.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link "><span class="glyphicon glyphicon-hand-up"></span> Post Job</a>
          <div class="user-nav"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI_80u_uzadF91vm9XQO6kgsYzCXHcQMYlKg8UR4Wrzf6RrSfY7T9hYWQGoG7CA-hLpFc&usqp=CAU" loading="lazy" alt="" class="image-4" />
            <div data-hover="" data-delay="0" class="w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="text-block-4"><?php echo $user['username']; ?></div>
              <?php } ?>
              </div>
              <nav class="w-dropdown-list"><a href="announcement.php?id=<?php echo $user['userID']; ?>" class="w-dropdown-link"><span class="glyphicon glyphicon-list"></span> My Announcements</a>
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
  <!-- ........END NAVBAR............-->

  <?php
  $jobs = $db->getjobsOffer($id);
  if (isset($_GET['msg'])) { ?>
    <div class="alert alert-danger" style="font-size: 13px;background-color: #fff4e9;margin:8em;width:44%;margin-left: 29em;color: #f47c2c;background-color: #ffdac24a;">
      <div style="text-align: center;">
        <h4>Your Job Offer Posted Successfully</h4>
        <p>wait to get approval by admin and then will posted on website</p>
      </div>
    </div>

  <?php }
  if (empty($jobs)) {
  ?>
    <!-- <div class="container"> -->
    <div class="alert alert-danger" style="font-size: 13px;background-color: #fff4e9;margin:8em;width:70%;color: #f47c2c;background-color: #ffdac24a;">
      <strong>Warning!</strong>You Don't have any announcements yet .. <a href="jobForm.php?id=<?php echo $id ?>">Post a Job Now!</a>
    </div>
  <?php } else { ?>
    <div class="container">
      <table class="table table-striped table-hover">
        <thead style="color: #fdad5f;font-size: 16px;font-family: cursive;">
          <tr>
            <th>ID</th>
            <th>Job Title</th>
            <th>Company Name</th>
            <th>Full/Part Time</th>
            <th>City</th>
            <th>Details</th>
          </tr>
        </thead>

        <?php foreach ($jobs as $row) { ?>
          <tbody>
            <tr>
              <th style="color: #fdad5f;font-size: 16px;font-family: cursive;"><?php echo $row['jobID']; ?></th>
              <td><?php echo $row['jobTitle']; ?></td>
              <td><?php echo $row['companyName']; ?></td>
              <td><?php echo $row['fl_pa_time']; ?></td>
              <td><?php echo $row['city']; ?></td>
              <td><a style="color: #fdad5f;font-size: 16px;" href="../details.php?job_id=<?php echo $row['jobID'] ?>">Details</a></td>
            </tr>
          </tbody>
          <?php } ?>
      </table>
    </div>
<?php } ?>
<br><br><br><br><br>
<!--................FOOTER SECTION .............. -->
<footer>
  <div class="footer">
    <div class="w-container">
      <div class="w-row">
        <div class="spc w-col w-col-4">
          <h5 class="footer-head"><img src="../images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;"></h5>
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
</footer>
<!-- .....END FOOTER...... -->
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d27d25aefabdd8aa1ced7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/js/webflow.b7e093d49.js" type="text/javascript"></script>
</body>

</html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style/index.css">
  <!--glyphicon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../style/nav-bar.css">
  <title>Manage Users</title>

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
          <a href="../views/home.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link "><span class="glyphicon glyphicon-home"></span> Home</a>
          <a href="../views/alljobs.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
          <div class="user-nav"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI_80u_uzadF91vm9XQO6kgsYzCXHcQMYlKg8UR4Wrzf6RrSfY7T9hYWQGoG7CA-hLpFc&usqp=CAU" loading="lazy" alt="" class="image-4" />
            <div data-hover="" data-delay="0" class="w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle" style="top: -1.5em;">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="text-block-4">admin</div>
              </div>
              <nav class="w-dropdown-list">
                <a href="manageUsers.php?id=<?php echo $user['userID']; ?>" class="w-dropdown-link w--current"><span class="glyphicon glyphicon-cog"></span> Manage Users</a>
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
  $users = $db->getUsers();
  ?>


  <table class="table table-striped table-hover">
    <thead style="color: #fdad5f;font-size: 16px;font-family: cursive;">
      <tr>
        <th>#</th>
        <th>username</th>
        <th>Email</th>
        <th>Address</th>
        <th>Telephone Number</th>
        <th>Type</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>

    <?php foreach ($users as $row) { ?>
      <tbody>
        <tr>
          <th style="color: #fdad5f;font-size: 16px;font-family: cursive;"><?php echo $row['userID']; ?></th>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['teleNo']; ?></td>
          <td><?php echo $row['user_type']; ?></td>
          <td><a href="updateForm.php?id=<?php echo $row['userID'];?>">Update</a></td>
          <td><a href="deleteUser.php?id=<?php echo $row['userID'];?>">Delete</a></td>
        </tr>
      </tbody>
    <?php } ?>
  </table>

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
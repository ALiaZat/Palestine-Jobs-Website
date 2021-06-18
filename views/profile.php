<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/index.css">
    <!--glyphicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../style/profile.css">
    <title>Profile</title>

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
                    <a href="home.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-home"></span> Home</a>
                    <a href="alljobs.php?id=<?php echo $user['userID']; ?>" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
                    <div class="user-nav"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI_80u_uzadF91vm9XQO6kgsYzCXHcQMYlKg8UR4Wrzf6RrSfY7T9hYWQGoG7CA-hLpFc&usqp=CAU" loading="lazy" alt="" class="image-4" />
                        <div data-hover="" data-delay="0" class="w-dropdown">
                            <div class="dropdown-toggle w-dropdown-toggle">
                                <div class="icon-2 w-icon-dropdown-toggle"></div>
                                <div class="text-block-4"><?php echo $user['username']; ?></div>
                            </div>
                            <nav class="w-dropdown-list">
                                <a href="profile.php?id=<?php echo $user['userID']; ?>" class="w-dropdown-link"><span class="glyphicon glyphicon-user"></span> Profile</a>
                                <a href="../userAuthentication/logout.php" class="w-dropdown-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </nav>
                        </div>
                    </div>
                </nav>
                <div class="hamburger-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div><br>

        <!-- END NAVBAR -->

<br><br>
        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <div class="profile-nav col-md-3">
                    <div class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="../images/profile.jpg" alt="profile picture">
                            </a>
                            <h1><?php echo $user['username']; ?></h1>
                            <p><?php echo $user['email']; ?></p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="profile-info col-md-9">
                    <div class="panel">
                        <div class="bio-graph-heading">
                            <h2 style="padding-right: 20em;">Your Details:</h2>
                        </div>
                        <div class="panel-body bio-graph-info">
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Username:</span><?php echo $user['username']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Email:</span><?php echo $user['email']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Occupation:</span><?php echo $user['job']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Address:</span><?php echo $user['address']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Telephone:</span><?php echo $user['teleNo']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bio-graph-heading">
                            <h2 style="padding-right: 11em;">
                                Job that Match Your Preference
                            </h2>
                        </div><br><br>
                        <?php
                        $pref=$user['job'];
                        $jobs = $db->getPreference($pref);
                        foreach ($jobs as $job) { ?>
                            <div>
                                <ul role="list" class="list-2">
                                    <li class="list-item" style="padding-top: 24px;">
                                        <div class="w-form">
                                            <form action="../mostViewed.php?job_id=<?php echo $job['jobID']; ?>&id=<?php echo $id; ?>" method="post">
                                                <input type="submit" value="More Details" class="det-btn hollow-button" style="left: 41em;top: 19px;">
                                            </form>
                                        </div>
                                        <div class="fea-info">
                                            <ul role="list" class="fea-list w-list-unstyled">
                                                <li class="fea-item" style="color:coral;font-weight: 600;font-size: 12px;margin-left: 16px;"><i class="fas fa-clock" style="margin-right: 5px;color:coral;"></i> <?php echo $job['fl_pa_time']; ?></li>
                                                <li class="fea-item" style="font-weight: 600;font-size:15px;color:#6d6969;"><?php echo $job['jobTitle']; ?></li>
                                                <li class="fea-item"><?php echo $job['companyName']; ?></li>
                                                <li class="fea-item">
                                                    <i class="fas fa-map-marker-alt" style="margin-right: 5px;color: #6b6b6bc2;"></i> <?php echo $job['city']; ?>
                                                    <p style="margin: 14px 0 10px;margin-left: 22px;"><i class="fas fa-shekel-sign" style="margin-right:5px;margin-left:10px;color: #6b6b6bc2;"></i> <?php echo $job['salary']; ?></p>
                                                </li>
                                                <hr style="margin-bottom: 3px;margin-top: 1px;border-top: 1px solid #a5a0a09c;">
                                                <li class="fea-item" style="float:right;margin-right: 24px;"><i class="far fa-eye" style="margin-right: 5px;color: #6b6b6bc2;"></i> <?php echo $job['viewsNo']; ?></li>

                                            </ul>
                                        </div><img src="<?php echo $job['image']; ?>" loading="lazy" sizes="(max-width: 479px) 74vw, 184px" height="103" id="feature-img" alt="job image" class="feacure-img" />
                                    </li>
                                </ul>
                            </div><br><br><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
    <!--................FOOTER SECTION .............. -->
    <!-- <div class="footer">
        <div class="w-container">
            <div class="w-row">
                <div class="spc w-col w-col-4">
                    <h5 class="footer-head">pal jobs</h5>
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
    </div> -->
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d27d25aefabdd8aa1ced7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/js/webflow.b7e093d49.js" type="text/javascript"></script>
</body>

</html>
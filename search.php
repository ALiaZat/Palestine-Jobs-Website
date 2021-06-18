<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <!--glyphicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style/index.css">
    <title>Pal Jobs</title>

    <link href="images/icon1.png" rel="shortcut icon" type="image/x-icon" />
    <link href="images/icon1.png" rel="apple-touch-icon" />
</head>

<body>
     <!-- NAV BAR SECTION -->
     <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
        <div class="w-container"><a href="/" aria-current="page" class="brand-link w-nav-brand w--current">
        <img src="images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu">
            <a href="index.php" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-home"></span> Home</a>
                <a href="allJobs.php" aria-current="page" class="navigation-link w-nav-link "><span class="glyphicon glyphicon-list"></span>  All Jobs</a>
                <a href="userAuthentication/loginForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                <a href="userAuthentication/registerForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </nav>
            <div class="hamburger-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div><br><br>

    <?php
    require 'database.php';
    $db = new dbFun();
    $job_title = $_POST['jobTitle'];
    $city = $_POST['city'];
    $jobs = $db->search($job_title, $city);
    if (empty($jobs)) {
    ?>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="section-title"> Search Results </h2>
                </div>
            </div><br><br>
            <div class="alert alert-danger" style="font-size: 13px;background-color: #fff4e9;">
                No job posts available <a href="allJobs.php">See all jobs</a>
            </div>
        </div>
        <?php } else { ?>
            <br><br>
            <div class="row text-center">
                <div class="col-md-12">
                <h2 style="color: #f58e5d;padding-bottom: 45px;font-family: 'Glyphicons Halflings';font-weight: 600;font-size: 30px;"> Search Results </h2>
                </div>
            </div><br>
           <?php foreach ($jobs as $job) { ?>
        <div>
            <ul role="list" class="list-2">
                <li class="list-item" style="padding-top: 24px;">
                    <div class="w-form">
                        <form action="mostViewed.php?job_id=<?php echo $job['jobID']; ?>" method="post">
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
        </div>
    <?php }} ?>

        <!--................FOOTER SECTION .............. -->
<div class="footer">
            <div class="w-container">
                <div class="w-row">
                    <div class="spc w-col w-col-4">
                        <h5 class="footer-head"><img src="images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;"></h5>
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
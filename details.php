<!DOCTYPE html>
<html data-wf-domain="pal-jobs.webflow.io" data-wf-page="609d27d25aefab74c6a1cedd" data-wf-site="609d27d25aefabdd8aa1ced7" data-wf-status="1">

<head>
    <meta charset="utf-8" />
    <title>Job's Details</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="style/details-page.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "PT Sans:400,400italic,700,700italic", "PT Serif:400,400italic,700,700italic", "Roboto:300,regular,500"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="images/icon1.png" rel="shortcut icon" type="image/x-icon" />
    <link href="images/icon1.png" rel="apple-touch-icon" />
    <style>
        .w-list-unstyled .det-list-item pre {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.42857143;
            color: #333;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #fff; 
            border: 1px solid #fff;
            border-radius: 4px;
        }
    </style>
</head>

<body class="body-2">
    <?php if (isset($_GET['review'])) { ?>
        <h1 class="deteails-head" style="margin-left: 6em;margin-top: 3em;width: 15em;font-size: 2.1em;">Posting this Job on Website ?</h1>
    <?php } else { ?>
        <!-- NAV BAR SECTION -->
        <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
            <div class="w-container"><a href="/" aria-current="page" class="brand-link w-nav-brand w--current">
            <img src="images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">                </a>
                <nav role="navigation" class="navigation-menu w-nav-menu">
                    <a href="index.php" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-home"></span> Home</a>
                    <a href="allJobs.php" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
                    <a href="userAuthentication/loginForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    <a href="userAuthentication/registerForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                </nav>
                <div class="hamburger-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>

    <?php } ?>


    <!-- ...... DETAILS SECTION .......... -->
    <?php
    require 'database.php';
    $db = new dbFun();
    $jobID = $_GET['job_id'];
    $job = $db->getJobDetails($jobID);
    while ($row = mysqli_fetch_assoc($job)) {
    ?>
        <header id="hero" class="hero">
            <div>
                <h1 class="heading-11"><?php echo $row['jobTitle']; ?> - <?php echo $row['companyName']; ?></h1>
            </div>
            <div class="flex-container w-container">
                <div class="details-sec">
                    <ul role="list" class="w-list-unstyled">
                        <li class="det-list-item">
                            <h4 class="deteails-head">Company Details: </h4>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="far fa-building" style="margin-right: 5px;color:darkgray;"></i>Company Name: </div>
                            <div class="text-block-6"> <?php echo $row['companyName']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="far fa-envelope" style="margin-right: 5px;color:darkgray;"></i>Email:</div>
                            <div class="text-block-6"> <?php echo $row['email']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="fas fa-phone" style="margin-right: 5px;color:darkgray;"></i>Telephone Number:</div>
                            <div class="text-block-6"> <?php echo $row['teleNo']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="fas fa-map-marker-alt" style="margin-right: 5px;color:darkgray;"></i>Address:</div>
                            <div class="text-block-6"> <?php echo $row['address']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="fas fa-briefcase" style="margin-right: 5px;color:darkgray;"></i>Company Type:</div>
                            <div class="text-block-6"> <?php echo $row['comp_type']; ?></div>
                        </li>
                        <li>
                            <div class="text-block-5 w-clearfix"><a href="<?php echo $row['website']; ?>" class="detls-btn w-button"> <i class="fas fa-globe" style="margin-right: 5px;"></i>Our Website</a></div>
                        </li>
                    </ul>
                    <h4 class="deteails-head"> Job Details: </h4>
                    <ul role="list" class="w-list-unstyled">
                        <li class="det-list-item">
                            <div class="text-block-5">Job Title:</div>
                            <div class="text-block-6"> <?php echo $row['jobTitle']; ?> </div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="far fa-clone" style="margin-right: 5px;color:darkgray;"></i>Category: </div>
                            <div class="text-block-6"> <?php echo $row['category']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="fas fa-clock" style="margin-right: 5px;color:darkgray;"></i>Job Type:</div>
                            <div class="text-block-6"><?php echo $row['fl_pa_time']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"> <i class="fas fa-dollar-sign" style="margin-right: 5px;color:darkgray;"></i>Salary: </div>
                            <div class="text-block-6"><?php echo $row['salary']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"> <i class="fas fa-eye" style="margin-right: 5px;color:darkgray;"></i>views number: </div>
                            <div class="text-block-6"> <?php echo $row['viewsNo']; ?></div>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="fas fa-user-check" style="margin-right: 5px;color:darkgray;"></i>Job Requirement: </div>
                        </li>
                        <li class="det-list-item">
                            <pre class="paragraph-9"><?php echo $row['jobRequirment']; ?></pre>
                        </li>
                        <li class="det-list-item">
                            <div class="text-block-5"><i class="fas fa-file-alt" style="margin-right: 5px;color:darkgray;"></i>Job Description: </div>
                        </li>
                        <li class="det-list-item">
                            <p class="paragraph-9"><?php echo $row['jobDescription']; ?></p>
                        </li>
                    </ul>
                </div>
                <div class="hero-image-mask w-clearfix"><img src="<?php echo $row['image']; ?>" alt="" class="hero-image" /></div>
            </div>
            <?php if (isset($_GET['review'])) { 
                    $id = $_GET['id'];
                    ?>
                <div style="display: flex;margin-left: 2em;justify-content: center;">
                    <form action="review.php?job_id=<?php echo $row['jobID']; ?>&id=<?php echo $id; ?>" method="post">
                        <input type="submit" value="Post The Job" class="detls-btn w-button" style="font-size: 20px;width: 10em;height: 2em;">
                    </form>
                    <a href="manageJobs/manageJobs.php?id=<?php echo $id; ?>" class="detls-btn w-button" style="font-size: 20px;width: 11em;height: 2em;padding-top: 15px;margin-left: 2em;">Don't Post The Job</a>
                </div>
            <?php } ?>
        </header>

    <?php } ?>

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
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d27d25aefabdd8aa1ced7" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="style/index.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>
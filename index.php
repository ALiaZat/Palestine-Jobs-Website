<!DOCTYPE html>
<html data-wf-domain="pal-jobs.webflow.io" data-wf-page="609d27d25aefabc442a1ceda" data-wf-site="609d27d25aefabdd8aa1ced7" data-wf-status="1">

<head>
    <meta charset="utf-8" />
    <title>Pal Jobs</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link rel="stylesheet" href="style/index.css">
    <!--glyphicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
        /* enable absolute positioning */
        .inner-addon {
            position: relative;
        }

        /* style icon */
        .inner-addon .glyphicon {
            position: absolute;
            padding: 10px;
            pointer-events: none;
        }

        /* align icon */
        .left-addon .glyphicon {
            left: 0px;
        }

        .right-addon .glyphicon {
            right: 0px;
        }

        /* add padding  */
        .left-addon input {
            padding-left: 30px;
        }

        .right-addon input {
            padding-right: 30px;
        }
    </style>
</head>

<body class="body">
    <!-- NAV BAR SECTION -->
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
        <div class="w-container"><a href="/" aria-current="page" class="brand-link w-nav-brand w--current">
               <img src="images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu">
                <a href="index.php" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-home"></span> Home</a>
                <a href="allJobs.php" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-list"></span>  All Jobs</a>
                <a href="userAuthentication/loginForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                <a href="userAuthentication/registerForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </nav>
        </div>
    </div>

    <!-- ............END NAVBAR .................. -->

    <div class="hero-section centered">
        <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading">The Easiest Way to Get Your New Job</h1>
        <div data-w-id="e464d218-f801-55d1-1f50-7da00b5bfb8f" style="opacity:0" class="w-container">
            <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">Find Jobs, Employment &amp; Career Opportunities</div>
            <div data-ix="fade-in-bottom-page-loads">
                <div class="w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" class="form-2" action="search.php" method="post">
                        <i class="glyphicon glyphicon-search" style="position: relative;right:-22px;margin-top: 10px;color:#192024;"></i>
                        <input type="search" class="text-field-3 w-input" maxlength="256" name="jobTitle" data-name="Field 2" placeholder="     Job Title, Category or keyword .." id="field-2" style="padding-left: 3em;" />
                        <i class="glyphicon glyphicon-map-marker" style="position: relative;right:-22px;margin-top: 10px;color:#192024;"></i>
                        <input type="search" class="text-field-4 w-input" maxlength="256" name="city" data-name="Field 3" placeholder="     City.." id="field-3" style="padding-left: 3em;" />
                        <!-- <select id="field" name="field" class="select-field w-select">
                            <option value="">Select Category...</option>
                            <option value="First">First Choice</option>
                            <option value="Second">Second Choice</option>
                            <option value="Third">Third Choice</option>
                        </select> -->
                        <input type="submit" value="Search" class="submit-button w-button" />
                    </form>
                </div>
            </div>
        </div><a href="allJobs.php" class="tab-btn">See All jobs</a>
    </div>
    <div class="about-as">
        <div class="w-container">
            <div class="section-title-group">
                <h2 class="section-heading centered">ABOUT US</h2>
            </div>
            <div class="w-row">
                <div class="w-col w-col-6">
                    <div data-w-id="270e8437-efa3-df11-d438-de69b23e41e9" style="opacity:0" class="white-box">
                    <img src="images/about-us1.jpg" loading="lazy" width="320" sizes="(max-width: 479px) 70vw, 320px"  alt="" class="image" /></div>
                </div>
                <div class="w-col w-col-6">
                    <div data-w-id="49e69b8a-ef40-4d84-1f92-d2617143b8db" style="opacity:0" class="white-box about-us">
                        <h3 class="heading">PAL JOBS</h3>
                        <blockquote class="block-quote">Pal Jobs strives to put job seekers first, giving them free access to search for jobs, post resumes, and research companies. We also provide opportunities for employers to advertise their jobs in order to obtain employees.</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-as accent">
        <div class="w-container">
            <div class="section-title-group">
                <h2 class="section-heading centered white">services</h2>
            </div>
            <div class="w-row">
                <div class="column w-col w-col-6">
                    <div class="white-box transparent"><img src="images/seeker.jpg" loading="lazy" height="196" alt="" class="fullwidth-image seeker-img" />
                        <h3 class="white-text">Easiest way to find your dream job</h3><a href="allJobs.php" class="hollow-button">Find a job</a>
                    </div>
                </div>
                <div class="w-col w-col-6">
                    <div class="white-box transparent"><img src="images/employer.jpg" sizes="(max-width: 479px) 85vw, (max-width: 767px) 89vw, (max-width: 991px) 43vw, 430px" srcset="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d859ddbc93b2e3808f9d3_4165382-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d859ddbc93b2e3808f9d3_4165382-p-1600.jpeg 1600w, https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d859ddbc93b2e3808f9d3_4165382-p-2000.jpeg 2000w, https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d859ddbc93b2e3808f9d3_4165382-p-2600.jpeg 2600w, https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/609d859ddbc93b2e3808f9d3_4165382.jpg 3000w" alt="" class="fullwidth-image owner-img" />
                        <h3 class="white-text">Hired skilled prople,best of them</h3><a href="userAuthentication/registerForm.php" class="hollow-button all-caps">post a job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ............................ WEBSITE  STATE ..................... -->
    <?php
    require 'database.php';
    $db = new dbFun();
    $cajobs = $db->countAddedJob();
    $cpjobs = $db->countPostedJob();
    $ccompanies = $db->countCompany();
    $cseekers = $db->countJobSeeker();
    foreach ($cajobs as $cajob) {
        $countAjob = $cajob['totalAddedJob'];
    }
    foreach ($cpjobs as $cpjob) {
        $countPjob = $cpjob['totalPostedJob'];
    }
    foreach ($ccompanies as $ccompany) {
        $countCom = $ccompany['totalCompany'];
    }
    foreach ($cseekers as $cseeker) {
        $countSeeker = $cseeker['totalJobSeeker'];
    }
    $countAjob = $cajob['totalAddedJob'];
    $countPjob = $cpjob['totalPostedJob'];
    $countCom = $ccompany['totalCompany'];
    $countSeeker = $cseeker['totalJobSeeker'];
    ?>
    <div class="section-2">
        <div class="state">
            <ul role="list" class="w-list-unstyled">
                <li class="state-item">
                    <div class="w-layout-grid grid-2">
                        <!--NUMBER OF JOB ADDED -->
                        <div>
                            <h1 class="number-head"><?php echo $countAjob; ?></h1>
                            <p class="number-body">jobs Added</p>
                        </div>
                        <!--NUMBER OF JOB POSTED -->
                        <div>
                            <h1 class="number-head"><?php echo $countPjob; ?></h1>
                            <p class="number-body">jobs posted</p>
                        </div>
                        <!-- NUMPER OF COMPANIES -->
                        <div>
                            <h1 class="number-head"><?php echo $countCom; ?></h1>
                            <p class="number-body">companies</p>
                        </div>
                        <!-- NUMBER OF REGISTERED USERS -->
                        <div>
                            <h1 class="number-head"><?php echo $countSeeker; ?></h1>
                            <p class="number-body">job seekers</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="feacured-sec">
        <div class="w-container">
            <div data-duration-in="300" data-duration-out="100" class="tabs-wrapper w-tabs">
                <div class="tab-menu w-tab-menu">
                   <a data-w-tab="Tab 1" class="tab-btn tab w-inline-block w-tab-link w--current">
                        <div class="text-block-3">Featured Jobs</div>
                    </a>
                    <a data-w-tab="Tab 2" class="tab-btn tab w-inline-block w-tab-link">
                        <div>Most viewed jobs</div>
                    </a>
                </div>
                <div class="w-tab-content">
                    <!-- ............. TAP 1 .. Featured job section ............ -->
                    <?php
                    $jobs = $db->getFeatured();
                    $views = $db->getMostView();
                    ?>
                    <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                    <a style="    position: relative;color: coral;font-size: 20px;left: 42%;" href="allJobs.php">See All Jobs --></a>
                        <section id="cards-section" class="cards-section">
                            <div class="centered-container w-container">
                                <?php foreach ($jobs as $job) { ?>
                                    <div class="cards-grid-container">
                                        <div id="w-node-_8090b664-51cc-ff9a-8034-77377b897efa-42a1ceda" class="div-card">
                                            <div class="cards-image-mask"><img src="<?php echo $job['image']; ?>" sizes="182px" alt="" class="mostviewed-img" /></div>

                                            <div class="job-title-card"><?php echo $job['jobTitle']; ?></div>

                                            <div class="text-block-2"><?php echo $job['companyName']; ?></div>
                                            <div>
                                                <ul role="list" class="list w-list-unstyled">
                                                    <li class="card-items" style="margin-left:10px;">
                                                        <i class="fas fa-map-marker-alt" style="margin-right: 5px;color: #6b6b6bc2;"></i> <?php echo $job['city']; ?>
                                                        <p style="margin: 14px 0 10px;margin-left: 22px;"><i class="fas fa-shekel-sign" style="margin-right: 5px;margin-left: 10px;color: #6b6b6bc2;"></i> <?php echo $job['salary']; ?></p>
                                                    </li>
                                                    <div class="w-form">
                                                        <form action="mostViewed.php?job_id=<?php echo $job['jobID']; ?>" method="post">
                                                            <input type="submit" value="More Details" class="fea-det-btn hollow-button">
                                                        </form>
                                                    </div>
                                                    <hr style="margin-bottom: 3px;margin-top: 24px;border-top: 1px solid #a5a0a09c;">
                                                    <li class="card-items" style="float:right;margin-right: 24px;color: #6b6b6bc2;"><i class="far fa-eye" style="margin-right: 5px;"></i> <?php echo $job['viewsNo']; ?> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>
                    </div>
                    <div data-w-tab="Tab 2" class="w-tab-pane">
                    <a style="    position: relative;color: coral;font-size: 20px;left: 42%;" href="allJobs.php">See All Jobs --></a>
                        <!-- ............. TAP 2 .... Most viewed  job section ............ -->
                        <?php foreach ($views as $view) { ?>
                            <div>
                                <ul role="list" class="list-2">
                                    <li class="list-item">
                                        <div class="w-form">
                                            <form action="mostViewed.php?job_id=<?php echo $view['jobID']; ?>" method="post">
                                                <input type="submit" value="More Details" class="det-btn hollow-button">
                                            </form>
                                        </div>
                                        <a href="#" class="button w-button">share/like</a>
                                        <div class="fea-info">
                                            <ul role="list" class="fea-list w-list-unstyled">
                                                <li class="fea-item" style="color:coral;font-weight: 600;font-size: 12px;margin-left: 16px;"><i class="fas fa-clock" style="margin-right: 5px;color:coral;"></i> <?php echo $view['fl_pa_time']; ?></li>
                                                <li class="fea-item" style="font-weight: 600;font-size:15px;color:#6d6969;"><?php echo $view['jobTitle']; ?></li>
                                                <li class="fea-item"><?php echo $view['companyName']; ?></li>
                                                <li class="fea-item">
                                                    <i class="fas fa-map-marker-alt" style="margin-right: 5px;color: #6b6b6bc2;"></i> <?php echo $view['city']; ?>
                                                    <p style="margin: 14px 0 10px;margin-left: 22px;"><i class="fas fa-shekel-sign" style="margin-right:5px;margin-left:10px;color: #6b6b6bc2;"></i> <?php echo $view['salary']; ?></p>
                                                </li>
                                                <hr style="margin-bottom: 3px;margin-top: 1px;border-top: 1px solid #a5a0a09c;">
                                                <li class="fea-item" style="float:right;margin-right: 24px;"><i class="far fa-eye" style="margin-right: 5px;color: #6b6b6bc2;"></i> <?php echo $view['viewsNo']; ?></li>

                                            </ul>
                                        </div><img src="<?php echo $view['image']; ?>" loading="lazy" sizes="(max-width: 479px) 74vw, 184px" height="103" id="feature-img" alt="job image" class="feacure-img" />
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4">
        <!-- ...........................  ADS SEC ........................... -->
        <?php
        if (isset($_GET['ads_id'])) {
            $adsID = $_GET['ads_id'];
            $ads = $db->getAdById($adsID);
            foreach ($ads as $ad) { ?>
                <div class="ads-sec w-clearfix"><a href="<?php echo $ad['ads_url'] ?>" target="_blank"><img src="<?php echo $ad['ads_image'] ?>" loading="lazy" width="158" sizes="(max-width: 991px) 36vw, 35vw" class="image-2" /></a>
                    <div class="ads-esc w-clearfix"><i class="fas fa-exclamation-circle" style="margin-right: 5px;"></i><i class="fas fa-times"></i></div>
                    <div class="div-block-9">
                        <a href="<?php echo $ad['ads_url'] ?>" target="_blank">
                            <h1 class="ads-title"><?php echo $ad['ads_title'] ?></h1>
                        </a>
                        <a href="<?php echo $ad['ads_url'] ?>" target="_blank">
                            <p class="ads-desc"><?php echo $ad['ads_desc'] ?></p>
                        </a>
                    </div>
                </div>
            <?php }
        } else { ?>
            <div class="ads-sec w-clearfix"><a href="https://www.jawwal.ps//index.php?url=posts/view/7697" target="_blank"><img src="https://scontent.fjrs1-2.fna.fbcdn.net/v/t1.6435-9/175533919_171443808168866_7044341426353283026_n.png?_nc_cat=104&ccb=1-3&_nc_sid=730e14&_nc_ohc=hnNWifDmZbEAX-LAoXF&_nc_ht=scontent.fjrs1-2.fna&oh=ac15ba9e678a7e24ad2831ec99cf24ca&oe=60C6D771 " loading="lazy" width="158" sizes="(max-width: 991px) 36vw, 35vw" class="image-2" /></a>
                <div class="ads-esc w-clearfix"><i class="fas fa-exclamation-circle" style="margin-right: 5px;"></i><i class="fas fa-times"></i></div>
                <div class="div-block-9">
                    <a href="https://www.jawwal.ps//index.php?url=posts/view/7697" target="_blank">
                        <h1 class="ads-title">لأنك مع الشبكة الأوفر والأقوى في فلسطين.</h1>
                    </a>
                    <a href="https://www.jawwal.ps//index.php?url=posts/view/7697" target="_blank">
                        <p class="ads-desc"> اختار وجباتك وبنوصّلك طلباتك لكل مكان.. مع برنامج Enjoy للمكافآت الأضخم في فلسطين لتتمتع بعالم من التوفير!</p>
                    </a>
                </div>
            </div>
        <?php } ?>


        <div class="get-start">
            <div class="div-block-8">
                <h1 class="heading-8">Join Thousands of Companies That Rely on Pal Jobs</h1>
                <p class="paragraph-6">Pal Jobs offers a way to completely optimize your entire recruiting process. Find better candidates, conduct more focused interviews, and make data-driven hiring decisions.</p><a href="userAuthentication/registerForm.php" class="link">Get Started <i class="fas fa-arrow-right" style="margin-left: 6px;color:white;"></i> </a>
            </div>
        </div>
    </div>
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
</body>

</html>
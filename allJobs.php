<!DOCTYPE html>
<html>

<head>
    <title>ALL Jobs</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="style/index.css">
    <!--glyphicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>

    <style>
        .contenr {
            left: 25px;
            width: 95%;
            border-radius: 17px;
            box-shadow: 1px 1px 16px 0 hsla(0, 2.1%, 70%, 0.56);
        }
    </style>

    <link href="images/icon1.png" rel="shortcut icon" type="image/x-icon" />
    <link href="images/icon1.png" rel="apple-touch-icon" />
</head>

<body>
    <!-- NAV BAR SECTION -->
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
        <div class="w-container"><a href="/" aria-current="page" class="brand-link w-nav-brand w--current">
                <img src="images/logo1.png" alt="logo img" style="height: 64px;position: relative;bottom: 12px;">
            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu">
                <a href="index.php" aria-current="page" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-home"></span> Home</a>
                <a href="allJobs.php" aria-current="page" class="navigation-link w-nav-link w--current"><span class="glyphicon glyphicon-list"></span> All Jobs</a>
                <a href="userAuthentication/loginForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                <a href="userAuthentication/registerForm.php" class="navigation-link w-nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </nav>
            <div class="hamburger-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div><br><br>
    <!-- END NAVBAR SECTION  -->

    <div class="container-fluid contenr">
        <br />
        <table>
            <!-- SEARCH PANEL -->
            <tr>
                <div class="form-group" style="display: flex;transform: translate(3em, 3em);">
                    <input type="text" name="search_box" id="search_box" class="text-field-3 w-input" placeholder=" Job Title, City or keyword .. " />
                    <div class="submit-button w-button" style="width:3em;"><i class="fas fa-search"></i></div>
                </div>
            </tr><br><br>
            <tr>
                <h3 style="color: #f37437;">Search Result</h3>
            </tr>

            <!-- ........a search results from fetch.php...... -->
            <tr>
                <div class="table-responsive" id="dynamic_content"></div>
            </tr>
        </table>

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
    <script src="https://uploads-ssl.webflow.com/609d27d25aefabdd8aa1ced7/js/webflow.b7e093d49.js" type="text/javascript"></script>
</body>

</html>

<!-- ...................script..................... -->
<script>
    $(document).ready(function() {

        load_data(1);

        function load_data(page, query = '') {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    page: page,
                    query: query
                },
                success: function(data) {
                    $('#dynamic_content').html(data);
                }
            });
        }

        $(document).on('click', '.page-link', function() {
            var page = $(this).data('page_number');
            var query = $('#search_box').val();
            load_data(page, query);
        });

        $('#search_box').keyup(function() {
            var query = $('#search_box').val();
            load_data(1, query);
        });

    });
</script>
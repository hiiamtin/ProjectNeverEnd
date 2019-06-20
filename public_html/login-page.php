<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--title -->
    <title>cineshow</title>
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,900' rel='stylesheet' type='text/css'>
    <!-- stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<?php
    if(isset($_SESSION["user_name"])){
        $login_logout = "Logout";
    }else{
        $login_logout = "Login";
    }
?>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo-hdr" width="180">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">home</a>
                        </li>
                        <li><a href="latest.html">latest movies</a>
                        </li>
                        <li><a href="pricing.html">pricing</a>
                        </li>
                        <li><a href="up-coming.html">Up coming</a>
                        </li>
                        <li><a href="conatct.html">contact</a>
                        </li>
                        <li class="active" id="login_bt"><a><?echo $login_logout?></a>
                        </li>
                        <li class="free-trial-btn"><a href="free-trail.html">free trial</a>
                        </li>
                        <li>
                            <select>
                                <option>ENG</option>
                                <option>FR</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    <!-- header -->
    <?php if(!isset($_SESSION["user_name"])) : ?>
    <section class="login-block">
        <div class="container">
            <div class="login-inner">
                <h2>Login Here</h2>
                <div class="login-form">
                    <form id="login-form" method="post" action="php/authen_login.php">
                        <iframe id="iframe_login" name="iframe_login" src="" style="width:0;height:0;border:0px solid #fff;"></iframe>
                        <input type="text" name="user_name" class="inp-fild" placeholder="Name">
                        <input type="password" name="user_pass" class="inp-fild" placeholder="Password">
                        <button class="inlog-btn"><a type="submit">Login</a></button>
                    </form>
                    <h4><a href="#">Forgot Password</a></h4>
                    <h4>Dont have an account? <a href="#">Create New</a></h4>
                </div>
            </div>
        </div>
    </section>
    <?php else : ?>
    <?php endif; ?>
    <script type="text/javascript">
      document.getElementById("login_bt").onclick = function () {
        var val = "<?php echo $login_logout ?>";
          if(val=="Login"){
            location.href = "login-page.php";
          }
          else{
            location.href = "php/logout.php";
          }
      };
    </script>




    <!-- footer -->
     <footer class="footer">
        <div class="container">
            <div class="row responsiv-div2">
                <div class="col-sm-3 col-xs-6">
                    <div class="f-inner">
                        <h4>About</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Lorem Ipsum</a>
                            </li>
                            <li><a href="">Dolor Sit</a>
                            </li>
                            <li><a href="">Lorem Ipsum</a>
                            </li>
                            <li><a href="">Dolor Sit</a>
                            </li>
                            <li><a href="">Sit Amet</a>
                            </li>
                            <li><a href="">Ipsum Dolor</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="f-inner">
                        <h4>Other</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Lorem Ipsum</a>
                            </li>
                            <li><a href="">Sit Amet</a>
                            </li>
                            <li><a href="">Dolor Sit</a>
                            </li>
                            <li><a href="">Ipsum Dolor</a>
                            </li>
                            <li><a href="">Lorem Ipsum</a>
                            </li>
                            <li><a href="">Dolor Sit</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="f-inner contect-f">
                        <h4>Contact</h4>
                        <ul class="list-unstyled">
                            <address>123 Lorem Ipsum <br> 12345 India</address>
                            <br>
                            <li>01 23 456 789</li>
                            <li class="f-link"><a href="">contact@cineshow.fr</a>
                            </li>
                            <br>
                            <li>01 23 456 789</li>
                            <li class="f-link"><a href="">sales@cineshow.fr</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="f-inner">
                        <h4>Email Alerts</h4>
                        <div class="form">
                            <form>
                                <input type="text" name="nm" class="inp-fild" placeholder="Name">
                                <input type="text" id="mail" name="mail" class="inp-fild" placeholder="Email Address">
                            </form>
                            <button class="footer-btn">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-line">
                <div class="im-inner">
                    <span></span>
                    <a href="index.html"><img src="img/logo.png" class="ftr-logo" width="200">
                    </a><span></span>
                </div>
                <h4> Copyrights 2016 | <a href="#">Terms of use</a></h4>
                <div class="right-icon">
                    <ul class="list-inline">
                        <li class="fb"><a href="#"><i class="fb fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter"><a href="#"><i class="twitter fa fa-twitter"></i></a>
                        </li>
                        <li class="google"><a href="#"><i class="google fa fa-google-plus"></i></a>
                        </li>
                        <li class="youtube"><a href="#"><i class="youtube fa fa-youtube-play"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
     <div class="premium-tagline">
        <p>Created By: <a href="https://www.premium-themes.co/" target="_blank">Premium Themes</a></p>
    </div>
    <!-- footer -->

   <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    
    
</body>

</html>
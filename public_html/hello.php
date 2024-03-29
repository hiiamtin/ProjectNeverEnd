<?php
// ใช้เช็คค่ากัน การพิมพ์ URL ตรงๆโดยไม่ผ่านหน้า login
if (!isset($_session)) {
  session_start();
  }
if( !isset($_session["user_name"])) {
  header("Location: login.php");
} else { // else คือถ้า login แล้วให้แสดง
  echo $username; // นี้คือแสดงชื่อของผู้ login
}
?>
<html>
<head>
	<title>Welcome to webserv</title>
	<style>
/* Variables colors*/
/* HTML, body */
html,
body {
  height: 100%;
}
body {
  font-size: 16px;
  line-height: 1.7;
  color: #2c3e50;
  background-color: #fcfcfc;
}
/* Pattern and color overlay */
.section-pattern-overlay {
  width: 100%;
  height: 100%;
  background: url(https://fonline-reloaded.net/img/overlay.png);
  background-color: rgba(0, 0, 0, 0.8);
  color: #f1f1f1;
}
.section-pattern-overlay h1,
.section-pattern-overlay h2 {
  text-transform: uppercase;
}
.section-pattern-overlay h1 > span,
.section-pattern-overlay h2 > span {
  color: #48a65b;
}
/* Welcome section */
.welcome {
  position: relative;
  width: 100%;
  height: 100%;
  background: url(https://webserv.kmitl.ac.th/welcome-user-bg-wallpaper-hd-minisize);
  background-position: center;
  background-size: cover;
}
/* Section center */
.section-center {
  width: 100%;
  height: 100%;
  display: table;
  position: absolute;
  left: 0;
  right: 0;
}
.section-center .section-align {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}
.section-center .section-align ul {
  display: inline-block;
  position: relative;
  margin-bottom: 20px;
}
.section-center .section-align ul li {
  padding: 0 5px;
}
/*Section */
.section {
  margin-top: 100px;
  text-align: center;
}
.section .section-heading {
  margin-bottom: 20px;
  padding-bottom: 5px;
  text-transform: uppercase;
  border-bottom: 5px solid #eee;
}
.section .section-heading > span {
  display: inline-block;
  padding-bottom: 5px;
  margin-bottom: -10px;
  border-bottom: 5px solid #48a65b;
}
.button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         }
	</style>
</head>
<body>
<!--Bootstrap-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- WELCOME SECTION -->
<div class="welcome">

  <div class="section-pattern-overlay">

    <div class="section-center">

      <div class="section-align">

        <div class="container">

          <h1>Welcome to <span>KMITL</span> Webserv</h1>
          <ul class="list-inline">
            <li>login</li>
            <li>Parallax</li>
                  <li>Flat Design</li>
                  <li>Stunning Animations</li>
                  <li>HTML Integration</li>
          </ul>
        </div>
        <!-- /.container -->

      </div>
      <!-- /.section-align -->

    </div>
    <!-- /.section-center -->

  </div>
  <!-- /.section-pattern-overlay -->

</div>
<!-- /.welcome -->
<!-- END WELCOME SECTION -->
</body>
</html>

<?PHP
session_start(); 
include 'config.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photocash - Open Source P2P Photo Cash!</title>
<link href="css/email_sent.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="photocash is an innovative money network and a new kind of cash network.">
<meta name="keywords" content="cash, money, photocash, cash photo, photo cash" />
<link rel="shortcut icon" href="http://www.photocash.org/img/favicon.ico">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</head>



<body>
<div id="wrapper">

  <div id="header">
    <div id="center_box">
      <div id="logoboxl"></div>
      <div id="rightbox">Photocash</div>
    </div>
  </div>
  <div id="cube">
    <form name="input" id="commentForm" action="http://www.photocash.org/get_password.php" method="post"> 
    <div id="rect_box">
      <div id="emailmsg"><?PHP echo 'Email Sent! :'; echo $_SESSION['email'];   ?></div>

    </div>
    </form>
<div id="footer">
  <div id="bx1"><strong><a class="gray" href="http://www.photocash.org/terms.php">Terms</a> | <a class="gray" href="http://www.photocash.org/privacy.php">Privacy</a> | <a class="gray" href="http://www.photocash.org/index.php">&copy; 2023 Photocash</a></strong></div>
  <div id="bx2"></div>
</div>
  </div>
</div>

</body>

</html>



<?php include_once("analyticstracking.php") ?>
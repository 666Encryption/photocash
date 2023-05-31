<?PHP
include 'config.php';
session_start();
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
<link href="css/account.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="photocash is an innovative money network and a new kind of cash network.">
<meta name="keywords" content="cash, money, photocash, cash photo, photo cash" />
<link rel="shortcut icon" href="http://www.photocash.org/img/favicon.ico">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</head>

<body>

   

<div id="wrapper">



  <div id="header">
    <div id="pricestock">PhotoCash: $1.00</div>
    <div id="rightmenur"><a class="white" href="http://www.photocash.org/add_info.php?id=<?PHP $id = $_GET["id"];  echo $id; ?>">Add info</a> | <a class="white" href="http://www.photocash.org/account.php?id=<?PHP $id = $_GET["id"];  echo $id; ?>">Account</a> | <a class="white" href="http://www.photocash.org/log_out.php">Log out</a></div>
  </div>
  <div id="menubox">
    <div id="logobot"><img src="http://www.photocash.org/img/bot.jpg" alt="" width="50" height="50" /></div>
    <div id="logowordsbox"><strong> <a class="blue" href="http://www.photocash.org/home.php?id=<?PHP $id = $_GET["id"];  echo $id; ?>">Photocash</a></strong></div>
    <div id="rightmenu"><a href="https://github.com/Antichrist43/PHOTOCASH"><img src="http://www.photocash.org/img/download.png" alt="" /></a></div>
  </div>
  <div id="o">
    <div id="jjj">Account</div>
  </div>
  <form id="submit" action="search_companies.php" method="post">
  <div id="companyinfod">
    <div id="descriptionv">
      <p>&nbsp;</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?PHP echo '<br><br>';
	 $user_id = $_SESSION['id']; 	
$query = "SELECT * FROM company WHERE user_id = '$user_id'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{

$user_id = $row['user_id'];

$phone = $row['phone'];

}
echo '<br><br>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Photocash Address: '.$user_id;echo'<br>';


echo '<br><br><br><br>';

?></p>
  
    </div>
  </div></form>
  <div id="sitespecialuser"></div>
  <div id="download"></div>
  <div id="footer"><a class="blue" href="http://www.photocash.org/howphotocashworks.php?id=<?PHP $id = $_GET["id"];  echo $id; ?>">How PhotoCash Works?</a> | &copy; 2023 Photocash | © Photocash Project 2023 Released under the <a class="blue" href="http://opensource.org/licenses/mit-license.php" target="_blank">MIT license</a></div>
</div>


</body>

</html>

<?PHP     include 'analyticstracking.php';            ?>



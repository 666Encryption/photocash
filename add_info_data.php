<?PHP
include 'config.php';
session_start();
date_default_timezone_set('America/Kentucky/Monticello');
$title = $_POST['companyname'];
$description = $_POST['companydescription'];
$webaddress = $_POST['companyaddress'];


if(!empty($title) || !empty($description) || !empty($webaddress))
{
$time = date("Y-m-d H:i:s");

$user_id = abs(rand(111111111111, 999999999999999));

$id = $_SESSION['id'];

$price = "1.00";

$signup = "INSERT INTO company(id, user_id, firstname, lastname, email, password, month, day, year, sex, phone, photo, views, interactions, location, title, description, webaddress, other, time) VALUES (NULL, '$id', '', '', '', '', '', '', '', '', '$price', '', '', '', '$user_id', '$title', '$description', '$webaddress', '', '$time')";  mysql_query($signup) or die('Error, insert query failed, oh shoot, it failed.---------------2a');

$extra = "browse.php?id=".$id;
header("Location: http://www.bitcompany.site/$extra");

}
else
{
$extra = "add_info.php?id=".$_SESSION['id'];
header("Location: http://www.photocash.org/$extra");
}


?>